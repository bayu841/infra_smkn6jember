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
            background: linear-gradient(to right, #3C71F8, #24437C);
        }

        :root {
            --orange: #3C71F8;
            --orange-dark: #24437C;
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
            background: linear-gradient(to right, #3C71F8, #24437C);
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
<section class="h-screen w-full flex items-center justify-start text-black bg-cover bg-left"
         style="background-image: url('{{ asset('image/energienem/hero.png') }}'); height: 110vh;">
    <!-- Teks -->
    <div class="ml-6 md:ml-20 flex-1 mb-10 md:mb-0">
        <h1 class="text-4xl md:text-4xl font-bold mb-5 leading-snug">
            Menyegarkan Hari, Mengalirkan <br>
            Semangat Bersama Energi Enem
        </h1>
        <p class="text-lg md:text-lg mb-7 leading-relaxed">
            Batik Enem — harmoni antara sejarah dan inovasi. Setiap motif <br>
            membawa cerita masa lalu yang diolah menjadi gaya masa <br>
            kini, menciptakan identitas baru bagi karya batik lokal.
        </p>
        <a href="#"
           class="inline-block px-6 py-3 font-bold text-white rounded-md bg-gradient-to-r from-[#3C71F8] to-[#24437C] hover:opacity-90 transition">
            Jelajahi Produk
        </a>
    </div>
</section>


    <section class="hero-batik mt-12">
        <div class="hero-batik__image">
            <img src="{{ asset('image/home/energienem.png') }}" alt="Kegiatan membatik">
        </div>
        <div class="hero-batik__card">
            <div class="hero-batik__content">
                <h2>Apa itu Energi Enem?</h2>
                <p>
                    Energi Enem adalah unit usaha air minum yang dikelola oleh SMKN 6 Jember, berkomitmen menyediakan air
                    bersih dan sehat bagi siswa, guru, dan masyarakat. Dengan standar kualitas tinggi dan proses pengolahan
                    modern, Energi Enem memastikan setiap tetes air aman dikonsumsi serta mendukung program edukasi
                    kewirausahaan di sekolah.
                </p>
            </div>
        </div>
    </section>
    <section class="mt-12 px-4 sm:px-6 lg:px-16">
    <h2 class="text-3xl font-bold p-4 sm:p-10 text-[#3C71F8] text-center">Produk</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 sm:gap-8 mb-10">
        @forelse ($products as $product)
            <div class="w-full rounded-lg overflow-hidden shadow-lg group">
                <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}" class="w-full h-64 sm:h-72 md:h-64 lg:h-72 object-cover">
                <div class="p-4">
                    <h3 class="font-bold text-lg mb-2 text-center sm:text-left">{{ $product->name }}</h3>
                    <p class="text-gray-700 text-base mb-4 text-center sm:text-left">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                    <a href="{{ route('product.show', $product) }}"
                       class="block w-full text-center bg-[#3C71F8] text-white font-bold py-2 px-4 rounded-lg hover:bg-[#24437C] transition">
                        Lihat Detail
                    </a>
                </div>
            </div>
        @empty
            <p class="col-span-1 text-center text-gray-500">Produk untuk kategori ini belum tersedia.</p>
        @endforelse
    </div>
</section>

<section class="bg-gradient-to-r from-[#3C71F8] to-[#24437C] px-6 md:px-16 py-10 md:py-16 flex flex-col-reverse md:flex-row items-center justify-center min-h-screen">
    <!-- Gambar -->
    <div class="w-full md:w-1/2 flex justify-center md:justify-center mb-6 md:mb-0">
        <img src="{{ asset('image/energienem/ctaenergi.png') }}" alt="Produk Energi Enem"
             class="rounded-2xl w-full max-w-[400px] md:max-w-[500px] h-auto object-contain">
    </div>
    <!-- Teks -->
    <div class="w-full md:w-1/2 text-white space-y-4 flex flex-col justify-center items-center text-center md:text-center">
        <h2 class="text-xl sm:text-2xl md:text-3xl font-bold leading-snug">
            Tertarik dengan <br>
            Produk Energi Enem?<br>
            Yuk Beli Sekarang!
        </h2>
        <p class="text-sm sm:text-base md:text-base leading-relaxed">
            Dapatkan produk berkualitas dengan harga bersahabat. Klik tombol di bawah
            untuk langsung chat kami via WhatsApp dan lakukan pemesanan dengan mudah!
        </p>
        <a href="https://wa.me/6281234567890"
           class="inline-flex items-center gap-2 bg-white text-green-600 font-semibold px-5 py-2.5 rounded-full shadow-md hover:bg-gray-100 transition">
           Lanjutkan ke WhatsApp
        </a>
    </div>

</section>


@endsection
