@extends('layouts.app')

@section('title', 'Detail Produk')

@section('content')
<section class="py-12 bg-gray-50">
    <div class="container mx-auto px-6">

        <!-- Gambar utama produk -->
        <div class="bg-white rounded-2xl shadow overflow-hidden mb-8">
            <img src="{{ asset('images/produk/batik-enem.jpg') }}" alt="Batik Enem"
                 class="w-full h-[420px] object-cover">
        </div>

        <!-- Thumbnail gambar tambahan -->
        <div class="flex gap-4 justify-center mb-10">
            <button class="w-28 h-24 overflow-hidden rounded-lg border border-gray-200 hover:opacity-80 transition">
                <img src="{{ asset('images/produk/thumb1.jpg') }}" class="object-cover w-full h-full" alt="">
            </button>
            <button class="w-28 h-24 overflow-hidden rounded-lg border border-gray-200 hover:opacity-80 transition">
                <img src="{{ asset('images/produk/thumb2.jpg') }}" class="object-cover w-full h-full" alt="">
            </button>
            <button class="w-28 h-24 overflow-hidden rounded-lg border border-gray-200 hover:opacity-80 transition">
                <img src="{{ asset('images/produk/thumb3.jpg') }}" class="object-cover w-full h-full" alt="">
            </button>
            <button class="w-28 h-24 overflow-hidden rounded-lg border border-gray-200 hover:opacity-80 transition">
                <img src="{{ asset('images/produk/thumb4.jpg') }}" class="object-cover w-full h-full" alt="">
            </button>
        </div>

        <!-- Detail Produk -->
        <div class="max-w-4xl mx-auto">
            <h3 class="text-2xl font-bold text-gray-800 mb-2">Rp 100.000</h3>
            <h1 class="text-xl font-semibold text-gray-700 mb-6">Batik Oambakoro - Tulis/Print By Batik Enem</h1>

            <h2 class="text-lg font-bold text-gray-800 mb-3">Deskripsi Produk:</h2>
            <div class="text-gray-600 leading-relaxed space-y-4 mb-8">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                   Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
                   eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>

                <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will
                   give you a complete account of the system...</p>
            </div>

            <!-- Tombol Aksi -->
            <div class="flex gap-3">
                <a href=""
                   class="px-6 py-2 rounded-lg border border-blue-600 text-blue-600 font-semibold hover:bg-blue-50 transition">
                    Kembali
                </a>
                <a href="#"
                   class="px-6 py-2 rounded-lg bg-blue-600 text-white font-semibold hover:bg-blue-700 transition">
                    Beli Sekarang
                </a>
            </div>
        </div>

    </div>
</section>
@endsection
