<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'message' => 'required|string',
            'g-recaptcha-response' => 'required',
        ]);

        // Verifikasi reCAPTCHA v3
        $response = Http::post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => config('recaptcha.secret'),
            'response' => $request->input('g-recaptcha-response'),
            'remoteip' => $request->ip(),
        ]);

        $body = json_decode((string)$response->getBody());

        if (!$body->success || $body->score < 0.5) { // Check success and score for reCAPTCHA v3
            return response()->json(['message' => 'Verifikasi reCAPTCHA gagal. Silakan coba lagi.'], 422);
        }

        ContactMessage::create($request->all());

        return response()->json(['message' => 'Pesan Anda berhasil dikirim!']);
    }
}
