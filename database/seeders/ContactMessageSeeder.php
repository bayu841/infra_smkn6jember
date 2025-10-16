<?php

namespace Database\Seeders;

use App\Models\ContactMessage;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactMessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Kosongkan tabel terlebih dahulu
        DB::table('contact_messages')->truncate();

        $messages = [
            [
                'name' => 'John Doe',
                'email' => 'john.doe@example.com',
                'phone' => '081234567890',
                'message' => 'Halo, saya tertarik dengan informasi lebih lanjut tentang sekolah ini.',
                'ip_address' => '192.168.1.100',
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36',
                'status' => 'read',
                'created_at' => now()->subDays(2),
                'updated_at' => now()->subDays(1),
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane.smith@example.com',
                'phone' => '082345678901',
                'message' => 'Apakah ada program beasiswa untuk siswa berprestasi?',
                'ip_address' => '192.168.1.101',
                'user_agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36',
                'status' => 'unread',
                'created_at' => now()->subHours(5),
                'updated_at' => now()->subHours(5),
            ],
            [
                'name' => 'Budi Santoso',
                'email' => 'budi.santoso@example.com',
                'phone' => '083456789012',
                'message' => 'Saya ingin mendaftar untuk tahun ajaran depan, kapan pendaftaran dibuka?',
                'ip_address' => '192.168.1.102',
                'user_agent' => 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36',
                'status' => 'replied',
                'created_at' => now()->subDays(1),
                'updated_at' => now()->subHours(3),
            ],
        ];

        foreach ($messages as $message) {
            ContactMessage::create($message);
        }

        $this->command->info('Sample contact messages created successfully.');
    }
}
