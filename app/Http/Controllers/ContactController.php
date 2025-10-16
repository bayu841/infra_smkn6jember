<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        try {
            // 1. Honeypot Validation - Deteksi bot
            if (!empty($request->honeypot)) {
                Log::warning('Honeypot triggered', ['ip' => $request->ip()]);
                return back()->with('error', 'Pesan tidak valid.');
            }

            // 2. Rate Limiting berdasarkan IP
            $ipKey = 'contact_ip:' . $request->ip();
            $maxAttemptsPerMinute = 2; // Maksimal 2 pesan per menit
            $maxAttemptsPerHour = 5;   // Maksimal 5 pesan per jam

            // Rate limiting per menit
            if (Cache::has($ipKey . '_minute')) {
                $attemptsMinute = Cache::get($ipKey . '_minute');
                if ($attemptsMinute >= $maxAttemptsPerMinute) {
                    return back()->with('error', 'Terlalu banyak percobaan. Silakan tunggu 1 menit.');
                }
            }

            // Rate limiting per jam
            if (Cache::has($ipKey . '_hour')) {
                $attemptsHour = Cache::get($ipKey . '_hour');
                if ($attemptsHour >= $maxAttemptsPerHour) {
                    return back()->with('error', 'Terlalu banyak percobaan. Silakan coba lagi dalam 1 jam.');
                }
            }

            // 3. Time-based validation - Cegah pengiriman terlalu cepat
            $timestamp = $request->timestamp;
            $currentTime = time();
            $minTimeDiff = 3; // Minimal 3 detik antara pengiriman

            if (($currentTime - $timestamp) < $minTimeDiff) {
                Log::warning('Form submitted too quickly', ['ip' => $request->ip()]);
                return back()->with('error', 'Silakan tunggu beberapa detik sebelum mengirim lagi.');
            }

            // 4. Validasi data input
            $validator = Validator::make($request->all(), [
                'name' => [
                    'required',
                    'string',
                    'max:100',
                    'regex:/^[a-zA-Z\s\.\-\']+$/' // Hanya huruf, spasi, titik, dash, apostrof
                ],
                'email' => [
                    'required',
                    'email',
                    'max:255'
                ],
                'phone' => [
                    'required',
                    'string',
                    'max:20',
                    'regex:/^[0-9+\-\s()]{10,20}$/' // Format nomor telepon yang valid
                ],
                'message' => [
                    'required',
                    'string',
                    'min:10',
                    'max:1000',
                    function ($attribute, $value, $fail) {
                        // Deteksi kata spam
                        $spamKeywords = [
                            'http://', 'https://', '[url]', '[/url]',
                            'viagra', 'casino', 'lottery', 'click here',
                            'make money', 'work from home', 'bitcoin'
                        ];

                        foreach ($spamKeywords as $keyword) {
                            if (stripos($value, $keyword) !== false) {
                                $fail('Pesan mengandung konten yang tidak diizinkan.');
                                break;
                            }
                        }

                        // Deteksi terlalu banyak link
                        $linkCount = substr_count(strtolower($value), 'http');
                        if ($linkCount > 2) {
                            $fail('Pesan mengandung terlalu banyak link.');
                        }
                    }
                ]
            ], [
                'name.required' => 'Nama wajib diisi.',
                'name.regex' => 'Format nama tidak valid.',
                'email.required' => 'Email wajib diisi.',
                'email.email' => 'Format email tidak valid.',
                'phone.required' => 'Nomor telepon wajib diisi.',
                'phone.regex' => 'Format nomor telepon tidak valid.',
                'message.required' => 'Pesan wajib diisi.',
                'message.min' => 'Pesan minimal 10 karakter.',
                'message.max' => 'Pesan maksimal 1000 karakter.'
            ]);

            if ($validator->fails()) {
                return back()
                    ->withErrors($validator)
                    ->withInput();
            }

            // 5. Clean data sebelum disimpan
            $cleanData = [
                'name' => htmlspecialchars(trim($request->name), ENT_QUOTES, 'UTF-8'),
                'email' => filter_var(trim($request->email), FILTER_SANITIZE_EMAIL),
                'phone' => preg_replace('/[^0-9+\-\s()]/', '', $request->phone),
                'message' => htmlspecialchars(trim($request->message), ENT_QUOTES, 'UTF-8'),
                'ip_address' => $request->ip(),
                'user_agent' => $request->userAgent()
            ];

            // 6. Cek duplikat pesan dalam 10 menit terakhir
            $recentDuplicate = ContactMessage::where('ip_address', $request->ip())
                ->where('email', $cleanData['email'])
                ->where('message', $cleanData['message'])
                ->where('created_at', '>=', now()->subMinutes(10))
                ->exists();

            if ($recentDuplicate) {
                return back()->with('error', 'Pesan serupa sudah dikirim baru-baru ini.');
            }

            // 7. Simpan ke database
            ContactMessage::create($cleanData);

            // 8. Update rate limiting counters
            Cache::put($ipKey . '_minute',
                Cache::get($ipKey . '_minute', 0) + 1, 60); // 1 menit
            Cache::put($ipKey . '_hour',
                Cache::get($ipKey . '_hour', 0) + 1, 3600); // 1 jam

            // 9. Log aktivitas sukses
            Log::info('Contact form submitted successfully', [
                'ip' => $request->ip(),
                'email' => $cleanData['email']
            ]);

            return back()->with('success', 'Pesan Anda berhasil dikirim! Kami akan menghubungi Anda segera.');

        } catch (\Exception $e) {
            Log::error('Contact form error: ' . $e->getMessage(), [
                'ip' => $request->ip(),
                'input' => $request->except(['_token', 'honeypot'])
            ]);

            return back()->with('error', 'Terjadi kesalahan sistem. Silakan coba lagi nanti.');
        }
    }
}
