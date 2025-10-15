@extends('layouts.app')
@section('title', 'Home')

@section('content')
<section class="py-16 bg-gray-50 fade-in">
    <div class="container mx-auto px-6">
        <!-- Judul -->
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">
            Tentang Paskibra SMKN 6 Jember
        </h2>

        <!-- Konten -->
        <div class="flex flex-col md:flex-row items-center justify-center gap-12 bg-white rounded-2xl shadow-lg p-10 max-w-5xl mx-auto">
            <!-- Logo -->
            <div class="flex-shrink-0 lazy-image-container">
                <div class="image-placeholder"><div class="placeholder-spinner"></div></div>
                <img class="lazy-image w-60 md:w-72" data-src="{{ asset('image/blud.png') }}" alt="Logo Paskibra">
            </div>

            <!-- Info -->
            <div class="text-center md:text-left">
                <h3 class="text-2xl font-bold text-gray-800 mb-2">
                    Paskibra SMKN 6 Jember (Pasknam)
                </h3>
                <p class="text-gray-600 mb-6">
                    Ekstrakurikuler Baris Berbaris di SMKN 6 Jember
                </p>

                <div class="space-y-3">
                    <div class="flex items-center gap-3 bg-gray-100 px-4 py-2 rounded-lg shadow-sm hover:shadow-md transition">
                        <i class="fas fa-user text-blue-600"></i>
                        <span class="font-medium text-gray-700">Pasknam</span>
                    </div>

                    <div class="flex items-center gap-3 bg-gray-100 px-4 py-2 rounded-lg shadow-sm hover:shadow-md transition">
                        <i class="fab fa-instagram text-pink-500"></i>
                        <span class="font-medium text-gray-700">@pasknam.jember</span>
                    </div>

                    <div class="flex items-center gap-3 bg-gray-100 px-4 py-2 rounded-lg shadow-sm hover:shadow-md transition">
                        <i class="fas fa-phone text-green-500"></i>
                        <span class="font-medium text-gray-700">0336441347</span>
                    </div>

                    <div class="flex items-center gap-3 bg-gray-100 px-4 py-2 rounded-lg shadow-sm hover:shadow-md transition">
                        <i class="fas fa-map-marker-alt text-red-500"></i>
                        <span class="font-medium text-gray-700">Jl. PB. Sudirman No. 114 Tanggul - Jember</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<h2 class="text-center text-3xl font-bold mb-10 fade-in">Postingan</h2>
<div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3 fade-in">
    @for ($i = 0; $i < 6; $i++)
    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300 lazy-image-container">
        <div class="image-placeholder"><div class="placeholder-spinner"></div></div>
        <img class="lazy-image w-full h-48 object-cover" data-src="{{ asset('image/contoh.jpg') }}" alt="Postingan">
        <div class="p-5">
            <h3 class="text-lg font-bold text-gray-800 mb-2">SMK 6 Juara Basket Putra</h3>
            <p class="text-gray-600 text-sm mb-4">
                Tim basket putra SMKN 6 Jember meraih juara pertama pada turnamen antar sekolah dengan penuh semangat.
            </p>
            <a href="#"
               class="inline-block bg-blue-600 text-white text-sm font-semibold px-4 py-2 rounded-lg hover:bg-blue-700 transition">
               Selengkapnya
            </a>
        </div>
    </div>
    @endfor
</div>
<br>
@endsection
