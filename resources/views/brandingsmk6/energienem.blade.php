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
            height: 70vh;
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
    <section class="h-screen bg-cover bg-center flex items-center justify-center text-black"
        style="background-image: url('image/energienem/hero.png'); width:100%; height:110vh; background-size:cover;">
        <!-- Teks -->
        <div class="flex-1 mb-10 md:mb-0 ml-20">
            <h1 class="text-4xl md:text-1xl font-bold mb-5">Menyegarkan Hari, Mengalirkan <br>
                Semangat Bersama Energi Enem
            </h1>
            <p class="text-lg md:text-x mb-7">
                Batik Enem — harmoni antara sejarah dan inovasi. Setiap motif <br>
                membawa cerita masa lalu yang diolah menjadi gaya masa <br>
                kini, menciptakan identitas baru bagi karya batik lokal. <br>
            </p>
            <a href="#" class="btn" style="background color">
                Jelajahi Produk
            </a>
        </div>
        </div>
    </section><br><br><br>
    <section class="hero-batik">
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
    <br><br><br>
    <section>
        <h2 class="text-3xl font-bold p-10 text-[#3C71F8]">Produk</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 px-6 mb-10">
            @forelse ($products as $product)
                <div class="max-w-sm rounded-lg overflow-hidden shadow-lg group">
                    <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-lg mb-2">{{ $product->name }}</h3>
                        <p class="text-gray-700 text-base mb-4">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                        <a href="{{ route('product.show', $product) }}"
                            class="block w-full text-center bg-orange-600 text-white font-bold py-2 px-4 rounded-lg hover:bg-orange-700 transition">
                            Lihat Detail
                        </a>
                    </div>
                </div>
            @empty
                <p class="col-span-4 text-center text-gray-500">Produk untuk kategori ini belum tersedia.</p>
            @endforelse
        </div>
    </section>
    <section class="bg-gradient-to-r from-[#3C71F8] to-[#24437C] py-10 px-6 md:px-16" style="height:60vh;">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between gap-8">

            <!-- Gambar kiri -->
            <div class="w-full md:w-1/2 flex justify-center -mt-8">
                <img src="{{ asset('image/energienem/ctaenergi.png') }}" alt="Produk KKBT"
                    class="rounded-2xl w-full max-w-[400px] h-[372px] object-contain">
            </div>


            <!-- Teks kanan -->
            <div class="w-full md:w-1/2 text-white space-y-4">
                <h2 class="text-2xl md:text-3xl font-bold leading-snug">
                    Tertarik Dengan <br>
                    Produk Energi Enem?, Yuk Beli Sekarang
                </h2>
                <p class="text-sm md:text-base leading-relaxed">
                    Dapatkan produk berkualitas dengan harga bersahabat. Klik tombol di bawah
                    untuk langsung chat kami via WhatsApp dan lakukan pemesanan dengan mudah!
                </p>
                <a href="https://wa.me/6281234567890"
                    class="inline-flex items-center gap-2 bg-white text-green-600 font-semibold px-5 py-2.5 rounded-full shadow-md hover:bg-gray-100 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5 h-5" viewBox="0 0 24 24">
                        <path
                            d="M20.52 3.48A11.86 11.86 0 0 0 12.05 0C5.49 0 .07 5.37.07 12c0 2.11.55 4.17 1.6 6L0 24l6.26-1.63a12 12 0 0 0 5.78 1.47h.01c6.56 0 11.9-5.37 11.9-12 0-3.19-1.27-6.18-3.43-8.36ZM12.05 22c-1.78 0-3.52-.47-5.05-1.37l-.36-.21-3.72.97 1-3.63-.24-.37a9.9 9.9 0 0 1-1.55-5.39c0-5.45 4.45-9.88 9.92-9.88 2.65 0 5.15 1.03 7.03 2.9a9.83 9.83 0 0 1 2.9 7 9.87 9.87 0 0 1-9.93 9.98Zm5.45-7.4c-.3-.15-1.78-.88-2.05-.98-.28-.1-.47-.15-.67.15-.2.3-.77.98-.95 1.18-.17.2-.35.22-.65.07-.3-.15-1.28-.47-2.43-1.48a9.03 9.03 0 0 1-1.67-2.07c-.18-.3-.02-.46.13-.61.13-.13.3-.35.45-.52.15-.17.2-.3.3-.5.1-.2.05-.37-.02-.52-.07-.15-.67-1.63-.9-2.23-.23-.6-.48-.52-.67-.52h-.57c-.2 0-.52.07-.8.37-.27.3-1.05 1.02-1.05 2.47 0 1.45 1.08 2.84 1.23 3.03.15.2 2.12 3.25 5.12 4.55.72.31 1.28.5 1.72.65.72.23 1.38.2 1.9.12.58-.09 1.78-.73 2.03-1.43.25-.7.25-1.3.17-1.43-.07-.13-.27-.2-.57-.35Z" />
                    </svg>
                    Lanjutkan ke WhatsApp
                </a>
            </div>
        </div>
    </section>

@endsection
