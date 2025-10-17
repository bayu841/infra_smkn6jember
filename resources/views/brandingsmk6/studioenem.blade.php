@extends('layouts.app')
@section('title', 'Home')

@section('content')
    <style>
        .btn {
            padding: 12px 20px;
            color: white;
            font-weight: bold;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            background: linear-gradient(to right, #4C4C50, #2A292D);
        }

        :root {
            --orange: #4C4C50;
            --orange-dark: #2A292D;
            --text: #ffffff;
            --card-radius: 50px 50px 52px 0px;
            --shadow: 0 24px 48px -16px rgba(0, 0, 0, .35);
        }

        .hero-batik {
            position: relative;
            max-width: 1200px;
            margin: 40px auto;
            padding: 0 16px;
            border-radius: 32px;
        }

        .hero-batik__image {
            overflow: hidden;
            border-radius: 32px;
        }

        .hero-batik__image img {
            display: block;
            width: 700px;
            height: clamp(320px, 55vw, 560px);
            object-fit: cover;
            border-radius: 32px;
        }

        .hero-batik__card {
            position: absolute;
            inset: auto 16px 16px auto;
            transform: translateY(-12%);
            max-width: 520px;
            width: min(92vw, 520px);
            background: linear-gradient(to right, #4C4C50, #2A292D);
            color: var(--text);
            border-radius: var(--card-radius);
            box-shadow: var(--shadow);
            height: 80vh;
        }

        .hero-batik__content {
            padding: clamp(70px, 3.5vw, 32px);
        }

        .hero-batik__content h2 {
            margin: 0 0 12px;
            font-size: clamp(22px, 3.2vw, 32px);
            line-height: 1.2;
            font-weight: 800;
            letter-spacing: .2px;
        }

        .hero-batik__content p {
            margin: 0;
            font-size: clamp(14px, 1.3vw, 17px);
            line-height: 1.7;
            color: rgba(255, 255, 255, .95);
        }



        /* Responsif: letakkan kartu di bawah pada layar kecil */
        @media (max-width: 640px) {
            .hero-batik__card {
                position: relative;
                inset: auto;
                transform: none;
                margin-top: 16px;
                width: 100%;
                max-width: none;
                border-radius: 32px;
            }

            .hero-batik {
                margin: 24px auto;
            }
        }
    </style>
    <section class="h-screen w-full bg-cover bg-left md:bg-center flex items-center justify-center text-black"
         style="background-image: url('{{ asset('image/dkv/herodkv.png') }}'); height:110vh;">
    <!-- Teks -->
    <div class="flex-1 mb-10 md:mb-0 mx-4 md:ml-40 text-center md:text-left">
        <h1 class="text-4xl md:text-5xl font-bold mb-5">
            Studio Enem, Kreatif, Terampil <br>
            Profesional
        </h1>
        <p class="text-lg md:text-xl mb-7 leading-relaxed">
            Studio Enem adalah tim media kreatif SMKN 6 Jember <br>
            yang berfokus pada produksi desain, foto, dan video. <br>
            Dengan semangat kolaborasi, Studio Enem menjadi <br>
            wadah bagi siswa untuk mengasah kemampuan di bidang <br>
            multimedia, dokumentasi, dan publikasi sekolah.
        </p>
        <a href="#"
           class="inline-block bg-gradient-to-r from-[#3C71F8] to-[#24437C] text-white font-bold py-3 px-6 rounded-lg hover:opacity-90 transition">
           Jelajahi Produk
        </a>
    </div>
</section>

    <br><br><br>
    <section class="hero-batik">
        <div class="hero-batik__image">
            <img src="{{ asset('image/studioenem/about.png') }}" alt="Kegiatan membatik">
        </div>
        <div class="hero-batik__card">
            <div class="hero-batik__content">
                <h2>Apa itu Studio Enem?</h2>
                <p>
                    Studio Enem adalah studio kreatif yang fokus pada pengembangan produk unggulan berkualitas tinggi, mulai
                    dari kerajinan tangan hingga desain modern. Dengan mengedepankan kreativitas dan inovasi, Studio Enem
                    berkomitmen menghadirkan karya yang estetis, fungsional, dan bernilai tinggi bagi masyarakat. Setiap
                    produk dirancang dengan detail dan ketelitian untuk memastikan kepuasan pelanggan.
                </p>
            </div>
        </div>
    </section>
    <section class="mt-4">
    <h2 class="text-3xl font-bold p-10 text-[#2A292D] text-center md:text-left">Hasil Foto</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 px-6 mb-10">
        <div class="rounded-lg overflow-hidden shadow-lg">
            <img src="{{ asset('image/studioenem/foto1.jpg') }}" alt="Produk" class="w-full h-full object-cover">
        </div>
        <div class="rounded-lg overflow-hidden shadow-lg">
            <img src="{{ asset('image/studioenem/foto2.jpg') }}" alt="Produk" class="w-full h-full object-cover">
        </div>
        <div class="rounded-lg overflow-hidden shadow-lg">
            <img src="{{ asset('image/studioenem/foto3.jpg') }}" alt="Produk" class="w-full h-full object-cover">
        </div>
        <div class="rounded-lg overflow-hidden shadow-lg">
            <img src="{{ asset('image/studioenem/foto4.jpg') }}" alt="Produk" class="w-full h-full object-cover">
        </div>
    </div>
</section>
<br>
    <section class="mt-4">
    <h2 class="text-3xl font-bold p-10 text-[#2A292D] text-center md:text-left">Produk Unggulan</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 px-6 mb-10">
        @forelse ($products as $product)
            <div class="rounded-lg overflow-hidden shadow-lg group">
                <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}" class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300">
                <div class="p-4">
                    <h3 class="font-bold text-lg mb-2">{{ $product->name }}</h3>
                    <p class="text-gray-700 text-base mb-4">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                    <a href="{{ route('product.show', $product) }}"
                       class="block w-full text-center bg-[#4C4C50] text-white font-bold py-2 px-4 rounded-lg hover:bg-[#2A292D] transition">
                        Lihat Detail
                    </a>
                </div>
            </div>
        @empty
            <p class="col-span-4 text-center text-gray-500">Produk untuk kategori ini belum tersedia.</p>
        @endforelse
    </div>
</section>
<section class="bg-gradient-to-r from-[#4C4C50] to-[#2A292D] px-6 md:px-16 py-10 flex flex-col-reverse md:flex-row items-center md:items-start">
    <!-- Teks -->
    <div class="w-full md:w-1/2 text-white space-y-4 flex flex-col justify-center items-center md:items-start md:order-2 text-center md:text-left">
        <h2 class="text-2xl md:text-3xl font-bold leading-snug">
            Tertarik dengan <br>
            Jasa Studio Kami? <br>
            Yuk Pakai Jasa Foto Kami!
        </h2>
        <p class="text-sm md:text-base leading-relaxed">
            Dapatkan produk berkualitas dengan harga bersahabat. Klik tombol di bawah
            untuk langsung chat kami via WhatsApp dan lakukan pemesanan dengan mudah!
        </p>
        <a href="https://wa.me/6281234567890"
           class="inline-flex items-center gap-2 bg-white text-green-600 font-semibold px-5 py-2.5 rounded-full shadow-md hover:bg-gray-100 transition">
           Lanjutkan ke WhatsApp
        </a>
    </div>

    <!-- Gambar -->
    <div class="w-full md:w-1/2 flex justify-center md:justify-start mb-6 md:mb-0">
        <img src="{{ asset('image/studioenem/ctastudio.png') }}" alt="Produk Studio Enem"
             class="rounded-2xl w-full md:max-w-[420px] object-contain">
    </div>
</section>


@endsection
