@extends('layouts.app')

@section('title', 'Pembayaran Berhasil')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md p-8 space-y-6 bg-white rounded-2xl shadow-lg text-center">
        
        <!-- Ikon Sukses -->
        <div class="text-green-500">
            <svg class="w-24 h-24 mx-auto animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
        </div>
        
        <!-- Konten Teks -->
        <div class="space-y-2">
            <h1 class="text-3xl font-bold text-gray-800">Pembayaran Berhasil!</h1>
            <p class="text-gray-600">
                Terima kasih telah menyelesaikan pembayaran Anda. Pesanan Anda sedang kami proses dan detailnya akan segera kami kirimkan melalui email.
            </p>
        </div>

        <!-- Detail Pesanan (Contoh) -->
        <div class="p-4 bg-gray-50 rounded-lg border border-gray-200 text-left text-sm">
            <p class="flex justify-between"><span>Status:</span> <span class="font-medium text-green-600">Selesai</span></p>
            <p class="flex justify-between mt-2"><span>Waktu:</span> <span class="font-medium text-gray-700">{{ now()->format('d M Y, H:i') }}</span></p>
        </div>

        <!-- Tombol Aksi -->
        <div class="pt-4">
            <a href="/"
               class="inline-block w-full px-6 py-3 text-lg font-semibold text-white bg-blue-600 rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-transform transform hover:scale-105">
                Kembali ke Beranda
            </a>
        </div>

    </div>
</div>
@endsection
