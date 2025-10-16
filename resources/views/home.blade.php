@extends('layouts.app')
@section('title', 'Home')

@section('content')
    <style>
        body {
            background-color: #fdfdfd;
        }

        .btn {
            padding: 12px 20px;
            color: white;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            background: linear-gradient(to right, #3C71F8, #24437C);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: .5rem;
        }

        /* Brand bar */
        .brand {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto;
            padding: 10px 10px;
            background-color: rgb(255, 255, 255);
            width: 950px;
            margin-top: -2.5rem;
            border-radius: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            height: 12vh;
            position: relative;
            z-index: 20;

        }

        .brand img {
            width: 1500px;
            margin: 6px;
        }

        .major {
            background-image: url('image/home/bgjurusan.png');
        }

        /* About offset */
        .about {
            margin-left: 6rem;
            margin-top: 3rem;
        }

        @media (max-width: 1024px) {
            .about {
                margin-left: 0;
                padding: 0 1rem;
            }
        }

        /* Profile cards */
        .profile-a {
            border-radius: 60px 0 0 0;
        }

        .card,
        .card-1 {
            width: 100%;
            max-width: 300px;
            height: auto;
            min-height: 320px;
            border-radius: 20px;
            margin-left: 5rem;
            margin-top: 2rem;
        }

        .card {
            background-color: #24437C;
        }

        .card-1 {
            background-color: #EFEFEF;
        }

        .card p,
        .card-1 p {
            padding: 24px;
            padding-top: 6rem;
        }

        .card p {
            color: #fff;
        }

        .card-1 p {
            color: #000;
        }

        .red-box {
            margin-top: -2rem;
            height: 15vh;
            background-color: #1e6891;
        }

        .card-profile {
            margin-right: 8rem;
        }

        @media (max-width: 1024px) {

            .card,
            .card-1 {
                margin-left: 0;
            }

            .card-profile {
                margin-right: 0;
                margin-top: 1rem;
            }
        }

        .title-box {
            background: linear-gradient(to right, #3C71F8, #24437C);
        }

        /* Hero and section backgrounds */
        .fasility {
            background-image: url('image/home/eskul.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            width: 100%;
        }

        .text-major {
            margin-top: 14rem;
        }

        @media (max-width: 640px) {
            .text-major {
                margin-top: 10rem;
            }
        }

        .study {
            background-image: url('image/rpl/pemrpl.png');
            background-size: cover;
            background-position: center;
        }

        .study h2 {
            padding-top: 13rem;
        }

        .class {
            margin-left: 5rem;
        }

        /* Teacher grid */
        .teacher {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            max-width: 1000px;
            margin: 0 auto;
        }

        .card-teacher1 {
            width: 100%;
            max-width: 260px;
            height: auto;
            min-height: 380px;
            border-radius: 10px;
            margin-bottom: 2rem;
            position: relative;
            overflow: hidden;
        }

        @media (max-width: 1024px) {
            .teacher {
                grid-template-columns: repeat(2, 1fr);
                padding: 0 1rem;
            }
        }

        @media (max-width: 640px) {
            .teacher {
                grid-template-columns: 1fr;
            }
        }

        /* Utilities */
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        .btn-grad {
            background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 50%, #0ea5e9 100%);
        }

        .card-grad-1 {
            background: linear-gradient(135deg, #e0e7ff 0%, #fff 35%);
        }

        .card-grad-2 {
            background: linear-gradient(135deg, #dbeafe 0%, #fff 35%);
        }

        .card-grad-3 {
            background: linear-gradient(135deg, #e0f2fe 0%, #fff 35%);
        }

        .fade-in {
            animation: fade .4s ease-out;
        }

        @keyframes fade {
            from {
                opacity: .6;
                transform: translateY(6px)
            }

            to {
                opacity: 1;
                transform: translateY(0)
            }
        }

        /* Lazy image placeholder */
        .lazy-image-container {
            position: relative;
            display: block;
            overflow: hidden;
        }

        .image-placeholder {
            position: absolute;
            inset: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(0, 0, 0, 0.04);
        }

        .placeholder-spinner {
            width: 28px;
            height: 28px;
            border: 3px solid #cbd5e1;
            border-top-color: #3C71F8;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            to {
                transform: rotate(360deg)
            }
        }

        .lazy-image {
            opacity: 0;
            transition: opacity .4s ease;
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .lazy-image.loaded {
            opacity: 1;
        }

        /* Responsive fixes for hero section */
        .hero-wrap {
            width: 100%;
            min-height: 70vh;
            height: auto;
            display: flex;
            align-items: center;
            justify-content: center;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .hero-content {
            width: 100%;
            max-width: 1200px;
            padding: 0 1rem;
            display: flex;
            gap: 1.5rem;
        }

        .hero-text {
            flex: 1 1 auto;
        }

        @media (min-width: 1024px) {
            .hero-wrap {
                min-height: 100vh;
            }

            .hero-content {
                padding-left: 2rem;
                padding-right: 2rem;
            }
        }

        @media (max-width: 768px) {
            .brand {
                grid-template-columns: repeat(5, minmax(0, 1fr));
                border-radius: 14px;
                margin-top: -2rem;
            }
        }

        @media (max-width: 480px) {
            .brand {
                grid-template-columns: repeat(4, minmax(0, 1fr));
                gap: 10px;
                padding: 10px;
            }

            .brand img {
                width: 44px;
                height: 44px;
            }
        }

        /* Ekstrakurikuler track item width on mobile */
        .eskul-slide {
            width: 100%;
            max-width: 850px;
            height: auto;
        }

        .eskul-figure {
            aspect-ratio: 4/5;
            width: 100%;
        }

        @media (min-width: 1024px) {
            .eskul-figure {
                height: 50vh;
                aspect-ratio: auto;
            }
        }

        /* Footer contact section */
        .footer-hero {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        /* Fix for excessive vh heights that break on mobile address bar */
        .min-h-110vh {
            min-height: 110svh;
        }
    </style>


    <section
        class="relative h-[100vh] flex flex-col lg:flex-row items-center justify-between px-8 lg:px-20 py-16 bg-[#D7DEFF]/10 overflow-hidden ">

        <!-- Bagian Kiri -->
        <div class="lg:w-1/2 space-y-6 z-10">
            <h1 class="text-4xl sm:text-5xl font-extrabold leading-tight text-slate-900">
                <span class="text-[#5978ff]">Jelajahi</span> Pengetahuanmu,<br>
                Mulai Langkahmu di<br>
                <span class="text-[#5978ff]">SMKN 6 Jember</span>
            </h1>

            <p class="text-slate-700 text-lg leading-relaxed max-w-md">
                SMKN 6 Jember menghadirkan lingkungan belajar yang kreatif, modern, dan berorientasi pada dunia industri.
                Wujudkan potensi terbaikmu bersama kami.
            </p>

            <div class="flex items-center gap-5 pt-4">
                <a href="#"
                    class="bg-[#5978ff] hover:bg-[#4966e6] text-white font-semibold py-3 px-6 rounded-lg shadow-lg transition-all duration-300">
                    Kenali Lebih Dekat
                </a>
                <a href="https://www.youtube.com/@smknegeri6jember"
                    class="bg-white text-red-500 hover:bg-red-500 hover:text-white transition-all duration-300 rounded-full p-4 shadow-lg inline-flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6" viewBox="0 0 24 24">
                        <path d="M8 5v14l11-7z" />
                    </svg>
                </a>

            </div>
        </div>

        <!-- Bagian Kanan (Gambar Siswi) -->
        <div class="lg:w-1/2 flex justify-center relative z-10 mt-10 lg:mt-0">
            <img src="{{ asset('image/home/siswi.png') }}" alt="Siswi SMKN 6 Jember"
                class="w-[980px] sm:w-[980px] md:w-[980px] lg:w-[980px] pt-20 drop-shadow-2xl relative z-10 mt-20">
        </div>
        <!-- Layer diagonal dekoratif -->
        <div
            class="absolute -top-20 left-[600px] w-[80%] h-[1400px] bg-gradient-to-b from-[#fff] to-[#5170FF] -rotate-[8deg] origin-top-left z-0">
        </div>
    </section>

    <div class="brand">
        <img src="{{ asset('image/logooo.png') }}" alt="">
    </div>

    <br><br><br>

    <section class="about">
        <div class="flex flex-col md:flex-row items-start justify-between px-4 md:px-12 py-10 gap-6 md:gap-1 md:ml-10">
            <!-- Bagian kiri (teks) -->
            <div class="md:w-1/2 space-y-1">
                <p class="text-blue-500 font-semibold text-sm">Tentang Kami</p>
                <h2 class="text-2xl font-bold">
                    SMKN 6 Jember <br> Sekolah Pusat Keunggulan
                </h2>
                <p class="text-gray-700">
                    Video Profil SMKN 6 Jember mengajak penonton mengenal <br>
                    lebih dekat sekolah yang penuh cerita dan prestasi. Dari sejarah yang
                    membentuk jati diri, berlanjut pada visi dan misi yang menjadi arah masa depan.
                </p>
                <button onclick="openVideoModal()" class="bg-red-500 text-white text-sm px-3 py-2 rounded-md btn z-80">
                    Tonton Video Profil
                </button>
            </div>

            <!-- Bagian kanan (ilustrasi kotak) -->
            <div class="relative w-full max-w-xs sm:max-w-sm md:w-64 h-full card-profile mx-auto md:mx-0">
                <!-- Card Utama -->
                <div class="bg-gray-300 w-full h-80 rounded-bl-xl overflow-hidden relative bg-cover bg-center"
                    style="background-image: url('{{ asset('image/home/kepalasekolah.png') }}');">
                    <div
                        class="absolute bottom-0 left-0 bg-red-500 text-white text-sm font-bold px-4 py-2 rounded-tr-lg title-box">
                        Kepala Sekolah
                    </div>
                </div>

                <!-- Dekorasi -->
                <div class="absolute top-0 right-0 bg-red-500 w-12 h-16 sm:w-16 sm:h-20 rounded-lg red-box"></div>
                <div class="absolute top-1/3 -right-4 sm:-right-5 flex flex-col gap-2">
                    @for ($i = 0; $i < 5; $i++)
                        <span class="w-3 h-3 bg-blue-300 rounded-full"></span>
                    @endfor
                </div>
                <div class="absolute -bottom-5 right-6 flex gap-2">
                    @for ($i = 0; $i < 4; $i++)
                        <span class="w-3 h-3 bg-blue-300 rounded-full"></span>
                    @endfor
                </div>
            </div>
        </div>

        <!-- Modal Video -->
        <div id="videoModal"
            class="fixed inset-0 bg-black/70 hidden items-center justify-center z-50 transition-all duration-300">
            <div class="bg-white rounded-xl overflow-hidden shadow-lg w-[90%] max-w-3xl relative">
                <button onclick="closeVideoModal()"
                    class="absolute top-2 right-2 text-white bg-red-500 hover:bg-red-600 rounded-full p-2 z-10">
                    ✕
                </button>
                <div class="aspect-video">
                    <iframe id="videoFrame" class="w-full h-full" src="" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>
    </section>

    <br><br><br>
    <!-- Slider Section -->
    <div class="major">
        <section class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-10" id="jurusan">
            <!-- Text Section (sudah diperbaiki) -->
            <div class="mb-6 text-center sm:text-left">
                <p class="text-primary font-semibold text-blue-600 break-words text-balance">
                    Jurusan di sekolah
                </p>
                <h2 class="text-2xl sm:text-3xl font-bold leading-tight mt-2 break-words text-balance">
                    Pilih Jurusan Sesuai Minat Anda
                </h2>
            </div>

            <div class="relative">
                <button id="btnPrev"
                    class="hidden sm:grid absolute -left-2 sm:-left-4 top-1/2 -translate-y-1/2 z-10 size-11 sm:size-12 place-items-center rounded-full bg-blue-600 shadow ring-1 ring-slate-200 hover:ring-blue-500/40 hover:shadow-md transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5 text-white" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2">
                        <path d="M15 18l-6-6 6-6" />
                    </svg>
                </button>

                <button id="btnNext"
                    class="hidden sm:grid absolute -right-2 sm:-right-4 top-1/2 -translate-y-1/2 z-10 size-11 sm:size-12 place-items-center rounded-full bg-blue-600 text-white shadow ring-1 ring-slate-200 hover:ring-blue-500/40 hover:shadow-md transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5 text-white" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2">
                        <path d="M9 6l6 6-6 6" />
                    </svg>
                </button>
                <div id="track"
                    class="no-scrollbar overflow-x-auto scroll-smooth snap-x snap-mandatory flex gap-6 sm:gap-8 pb-3">
                    <!-- Slide 1 -->
                    <article
                        class="min-w-[85%] sm:min-w-[46%] lg:min-w-[31%] snap-start rounded-2xl bg-white shadow ring-1 ring-slate-100 fade-in">
                        <div class="card-grad-1 rounded-t-2xl overflow-hidden">
                            <div class="h-48 sm:h-60 lazy-image-container">
                                <div class="image-placeholder">
                                    <div class="placeholder-spinner"></div>
                                </div>
                                <img class="lazy-image w-full h-full object-cover" data-src="image/home/rpl.png"
                                    alt="Rekayasa Perangkat Lunak">
                                <div class="-mt-5 px-5">
                                    <span
                                        class="inline-block px-4 py-2 rounded-full bg-red-600 text-white text-sm font-semibold shadow text-major">
                                        Rekayasa Perangkat Lunak
                                    </span>
                                </div>
                            </div>
                            <div class="p-5 sm:p-6">
                                <p class="text-slate-700 leading-relaxed mt-4 break-words whitespace-normal"> Jurusan RPL
                                    adalah
                                    jurusan yang mempelajari perancangan, pembuatan, dan pengelolaan perangkat lunak, mulai
                                    dari aplikasi
                                    hingga sistem komputer, untuk mendukung kebutuhan teknologi dan solusi digital.
                                </p>
                            </div>
                            <div class="p-5 sm:p-6 -mt-2">
                                <a href="/rpl"
                                    class="btn-grad w-full inline-flex items-center justify-center gap-2 text-white font-semibold py-3 rounded-xl transition hover:opacity-95">
                                    Selengkapnya
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M5 12h14M12 5l7 7-7 7" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </article>

                    <!-- Slide 2 -->
                    <article
                        class="min-w-[85%] sm:min-w-[46%] lg:min-w-[31%] snap-start rounded-2xl bg-white shadow ring-1 ring-slate-100 fade-in">
                        <div class="card-grad-1 rounded-t-2xl overflow-hidden">
                            <div class="h-48 sm:h-60 lazy-image-container">
                                <div class="image-placeholder">
                                    <div class="placeholder-spinner"></div>
                                </div>
                                <img class="lazy-image w-full h-full object-cover" data-src="image/home/bd.png"
                                    alt="Bisnis Digital">
                                <div class="-mt-5 px-5">
                                    <span
                                        class="inline-block px-4 py-2 rounded-full bg-orange-600 text-white text-sm font-semibold shadow text-major">
                                        Bisnis Digital
                                    </span>
                                </div>
                            </div>
                            <div class="p-5 sm:p-6">
                                <p class="text-slate-700 leading-relaxed mt-4 break-words whitespace-normal"> Jurusan
                                    BD (Bisnis Digital)
                                    SMK 6 Jember mempelajari strategi pemasaran online, manajemen e-commerce, dan
                                    pengelolaan bisnis digital untuk mengembangkan kemampuan berwirausaha di era modern.
                                </p>
                            </div>
                            <div class="p-5 sm:p-6 -mt-2">
                                <a href="/bd"
                                    class="btn-grad w-full inline-flex items-center justify-center gap-2 text-white font-semibold py-3 rounded-xl transition hover:opacity-95">
                                    Selengkapnya
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M5 12h14M12 5l7 7-7 7" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </article>

                    <!-- Slide 3 -->
                    <article
                        class="min-w-[85%] sm:min-w-[46%] lg:min-w-[31%] snap-start rounded-2xl bg-white shadow ring-1 ring-slate-100 fade-in">
                        <div class="card-grad-1 rounded-t-2xl overflow-hidden">
                            <div class="h-48 sm:h-60 lazy-image-container">
                                <div class="image-placeholder">
                                    <div class="placeholder-spinner"></div>
                                </div>
                                <img class="lazy-image w-full h-full object-cover" data-src="image/home/akl.png"
                                    alt="Akuntansi">
                                <div class="-mt-5 px-5">
                                    <span
                                        class="inline-block px-4 py-2 rounded-full bg-green-600 text-white text-sm font-semibold shadow text-major">
                                        Akuntansi
                                    </span>
                                </div>
                            </div>
                            <div class="p-5 sm:p-6">
                                <p class="text-slate-700 leading-relaxed mt-4 break-words whitespace-normal"> Jurusan
                                    Akuntansi Keuangan Lembaga di
                                    SMK 6 Jember mempelajari pencatatan, pengelolaan, dan pelaporan keuangan untuk mendukung
                                    pengambilan keputusan bisnis yang tepat dan akurat.
                                </p>
                            </div>
                            <div class="p-5 sm:p-6 -mt-2">
                                <a href="/akl"
                                    class="btn-grad w-full inline-flex items-center justify-center gap-2 text-white font-semibold py-3 rounded-xl transition hover:opacity-95">
                                    Selengkapnya
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M5 12h14M12 5l7 7-7 7" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </article>

                    <article
                        class="min-w-[85%] sm:min-w-[46%] lg:min-w-[31%] snap-start rounded-2xl bg-white shadow ring-1 ring-slate-100 fade-in">
                        <div class="card-grad-1 rounded-t-2xl overflow-hidden">
                            <div class="h-48 sm:h-60 lazy-image-container">
                                <div class="image-placeholder">
                                    <div class="placeholder-spinner"></div>
                                </div>
                                <img class="lazy-image w-full h-full object-cover" data-src="image/home/mp.png"
                                    alt="Manajemen Perkantoran">
                                <div class="-mt-5 px-5">
                                    <span
                                        class="inline-block px-4 py-2 rounded-full bg-red-600 text-white text-sm font-semibold shadow text-major">
                                        Manajemen Perkantoran
                                    </span>
                                </div>
                            </div>
                            <div class="p-5 sm:p-6 ">
                                <p class="text-slate-900 leading-relaxed mt-4 break-words whitespace-normal">Jurusan
                                    Perkantoran
                                    SMK 6 Jember mempelajari manajemen administrasi, pengelolaan dokumen, komunikasi bisnis,
                                    dan penggunaan teknologi perkantoran untuk mendukung kelancaran operasional perusahaan.
                                </p>
                            </div>
                            <div class="p-5 sm:p-6 -mt-2">
                                <a href="/mp"
                                    class="btn-grad w-full inline-flex items-center justify-center gap-2 text-white font-semibold py-3 rounded-xl transition hover:opacity-95">
                                    Selengkapnya
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M5 12h14M12 5l7 7-7 7" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </article>

                    <article
                        class="min-w-[85%] sm:min-w-[46%] lg:min-w-[31%] snap-start rounded-2xl bg-white shadow ring-1 ring-slate-100 fade-in">
                        <div class="card-grad-1 rounded-t-2xl overflow-hidden">
                            <div class="h-48 sm:h-60 lazy-image-container">
                                <div class="image-placeholder">
                                    <div class="placeholder-spinner"></div>
                                </div>
                                <img class="lazy-image w-full h-full object-cover" data-src="image/home/dkv.png"
                                    alt="Rekayasa Perangkat Lunak">
                                <div class="-mt-5 px-5">
                                    <span
                                        class="inline-block px-4 py-2 rounded-full bg-red-600 text-white text-sm font-semibold shadow text-major">
                                        Desain Komunikasi Visual
                                    </span>
                                </div>
                            </div>
                            <div class="p-5 sm:p-6">
                                <p class="text-slate-700 leading-relaxed mt-4 break-words whitespace-normal"> Jurusan
                                    DKV
                                    SMK 6 Jember mempelajari seni dan teknologi visual untuk komunikasi, mulai dari desain
                                    grafis, ilustrasi, hingga media digital, guna menciptakan karya kreatif yang efektif dan
                                    menarik.
                                </p>
                            </div>
                            <div class="p-5 sm:p-6 -mt-2">
                                <a href="/dkv"
                                    class="btn-grad w-full inline-flex items-center justify-center gap-2 text-white font-semibold py-3 rounded-xl transition hover:opacity-95">
                                    Selengkapnya
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M5 12h14M12 5l7 7-7 7" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </article>

                    <article
                        class="min-w-[85%] sm:min-w-[46%] lg:min-w-[31%] snap-start rounded-2xl bg-white shadow ring-1 ring-slate-100 fade-in">
                        <div class="card-grad-1 rounded-t-2xl overflow-hidden">
                            <div class="h-48 sm:h-60 lazy-image-container">
                                <div class="image-placeholder">
                                    <div class="placeholder-spinner"></div>
                                </div>
                                <img class="lazy-image w-full h-full object-cover" data-src="image/home/kkbt.png"
                                    alt="Rekayasa Perangkat Lunak">
                                <div class="-mt-5 px-5">
                                    <span
                                        class="inline-block px-4 py-2 rounded-full bg-red-600 text-white text-sm font-semibold shadow text-major">
                                        Kriya Kreativ Batik Dan Tekstil
                                    </span>
                                </div>
                            </div>
                            <div class="p-5 sm:p-6">
                                <p class="text-slate-700 leading-relaxed mt-4 break-words whitespace-normal"> Jurusan
                                    KBT Batik
                                    SMK 6 Jember mempelajari teknik pembuatan dan desain batik, mulai dari pemilihan motif,
                                    pewarnaan, hingga proses produksi, untuk mendukung kreativitas dan industri kerajinan
                                    tradisional.
                                </p>
                            </div>
                            <div class="p-5 sm:p-6 -mt-2">
                                <a href="/kkbt"
                                    class="btn-grad w-full inline-flex items-center justify-center gap-2 text-white font-semibold py-3 rounded-xl transition hover:opacity-95">
                                    Selengkapnya
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M5 12h14M12 5l7 7-7 7" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </article>
                </div>
            </div>

            <div class="mt-6 flex items-center justify-center gap-2" id="dots"></div>
        </section>
    </div>
    <br><br>
    <section class="max-w-7xl mx-auto px-4 py-10">
        <!-- Judul -->
        <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center lg:text-left">
            Video Terbaru
        </h2>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 items-start">
            <!-- Kolom kiri: 4 video kecil -->
            <div class="lg:col-span-2 grid grid-cols-1 sm:grid-cols-2 gap-6">
                <!-- Video 1 -->
                <div class="rounded-2xl overflow-hidden shadow-md hover:shadow-lg transition">
                    <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/fFwkBj56KiI" title="Video 1"
                        frameborder="0" allowfullscreen></iframe>
                </div>

                <!-- Video 2 -->
                <div class="rounded-2xl overflow-hidden shadow-md hover:shadow-lg transition">
                    <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/Wxj_1LRimek" title="Video 2"
                        frameborder="0" allowfullscreen></iframe>
                </div>

                <!-- Video 3 -->
                <div class="rounded-2xl overflow-hidden shadow-md hover:shadow-lg transition">
                    <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/bLPIP9V1rSo" title="Video 3"
                        frameborder="0" allowfullscreen></iframe>
                </div>

                <!-- Video 4 -->
                <div class="rounded-2xl overflow-hidden shadow-md hover:shadow-lg transition">
                    <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/etxDTQhUQNk" title="Video 4"
                        frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="rounded-2xl overflow-hidden shadow-md hover:shadow-lg transition">
                    <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/OUZ6IDDucdM" title="Video 4"
                        frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="rounded-2xl overflow-hidden shadow-md hover:shadow-lg transition">
                    <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/LqAXo9EI7bw" title="Video 4"
                        frameborder="0" allowfullscreen></iframe>
                </div>
            </div>

            <!-- Kolom kanan: IG + TikTok -->
            <div class="flex flex-col gap-6">
                <!-- IG -->
                <div
                    class="rounded-2xl overflow-hidden shadow-md hover:shadow-lg transition bg-white flex justify-center items-center h-80">
                    <blockquote class="instagram-media w-full h-full"
                        data-instgrm-permalink="https://www.instagram.com/smkn6jember_sixma.official/"
                        data-instgrm-version="14" style="max-width: 100%; min-width: 100%; margin: 0;"></blockquote>
                    <script async src="//www.instagram.com/embed.js"></script>
                </div>

                <!-- TikTok -->
                <div class="rounded-2xl overflow-hidden shadow-md hover:shadow-lg transition bg-white p-2">
                    <blockquote class="tiktok-embed" cite="https://www.tiktok.com/@smkn6jemberkeren"
                        data-unique-id="smkn6jemberkeren" data-embed-type="creator"
                        style="max-width: 780px; min-width: 288px; margin: auto;">
                        <section>
                            <a target="_blank" href="https://www.tiktok.com/@smkn6jemberkeren?refer=creator_embed">
                                @smkn6jemberkeren
                            </a>
                        </section>
                    </blockquote>
                    <script async src="https://www.tiktok.com/embed.js"></script>
                </div>
    </section>

    <br><br><br>
    <!-- Berita dan Pengumuman -->
    <main class="container mx-auto px-4 py-8">
        <div class="mb-8 text-center md:text-left">
            <h2 class="text-3xl font-bold text-gray-800 mb-2">Info Terbaru SMK 6 </h2>
            <p class="text-gray-600">Informasi terkini seputar kegiatan sekolah dan prestasi siswa</p>
        </div>

        @if ($beritas->count() > 0)
            <div class="container flex flex-col lg:flex-row gap-8">
                <!-- Kiri -->
                <div class="lg:w-2/3 bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="lazy-image-container w-full" style="aspect-ratio: 16/9;">
                        <div class="image-placeholder">
                            <div class="placeholder-spinner"></div>
                        </div>
                        <img class="lazy-image w-full h-full object-cover"
                            data-src="{{ Storage::url('berita/' . $beritas[0]->image) }}" alt="{{ $beritas[0]->title }}">
                    </div>
                    <div class="des p-6">
                        <div class="flex justify-between items-center mb-3">
                            <span
                                class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded">Terbaru</span>
                            <span class="text-gray-500 text-sm">{{ $beritas[0]->created_at->format('d M Y') }}</span>
                        </div>
                        <h1 class="text-2xl md:text-3xl font-bold text-gray-800 mb-4">{{ $beritas[0]->title }}</h1>
                        <div class="text-gray-600 mb-6">
                            {!! Str::limit($beritas[0]->content, 300) !!}
                        </div>
                        <a href="{{ route('berita.show', $beritas[0]) }}"
                            class="text-blue-600 font-medium hover:text-blue-800 inline-flex items-center">
                            Baca selengkapnya <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>

                <!-- Kanan -->
                <div class="lg:w-1/3 flex flex-col gap-6">
                    @if (isset($beritas[1]))
                        <div
                            class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:shadow-lg hover:-translate-y-1">
                            <div class="w-full" style="aspect-ratio: 16/9;">
                                <img class="w-full h-full object-cover"
                                    src="{{ Storage::url('berita/' . $beritas[1]->image) }}"
                                    alt="{{ $beritas[1]->title }}">
                            </div>
                            <div class="p-5">
                                <div class="flex justify-between items-center mb-3">
                                    <span
                                        class="bg-green-100 text-green-800 text-xs font-semibold px-2.5 py-0.5 rounded">Kegiatan</span>
                                    <span
                                        class="text-gray-500 text-sm">{{ $beritas[1]->created_at->format('d M Y') }}</span>
                                </div>
                                <h3 class="text-lg font-bold text-gray-800 mb-2">{{ $beritas[1]->title }}</h3>
                                <a href="{{ route('berita.show', $beritas[1]) }}"
                                    class="text-blue-600 font-medium hover:text-blue-800 inline-flex items-center mt-4">
                                    Baca selengkapnya <i class="fas fa-arrow-right ml-2"></i>
                                </a>
                            </div>
                        </div>
                    @endif
                    @if (isset($beritas[2]))
                        <div
                            class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:shadow-lg hover:-translate-y-1">
                            <div class="w-full" style="aspect-ratio: 16/9;">
                                <img class="w-full h-full object-cover"
                                    src="{{ Storage::url('berita/' . $beritas[2]->image) }}"
                                    alt="{{ $beritas[2]->title }}">
                            </div>
                            <div class="p-5">
                                <div class="flex justify-between items-center mb-3">
                                    <span
                                        class="bg-purple-100 text-purple-800 text-xs font-semibold px-2.5 py-0.5 rounded">Kompetisi</span>
                                    <span
                                        class="text-gray-500 text-sm">{{ $beritas[2]->created_at->format('d M Y') }}</span>
                                </div>
                                <h3 class="text-lg font-bold text-gray-800 mb-2">{{ $beritas[2]->title }}</h3>
                                <a href="{{ route('berita.show', $beritas[2]) }}"
                                    class="text-blue-600 font-medium hover:text-blue-800 inline-flex items-center mt-4">
                                    Baca selengkapnya <i class="fas fa-arrow-right ml-2"></i>
                                </a>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
            <div class="text-center mt-10">
                <a href="{{ route('berita.index') }}" class="btn">Lihat Semua Berita</a>
            </div>
        @else
            <div class="text-center py-10">
                <p class="text-gray-500">Belum ada berita untuk ditampilkan.</p>
            </div>
        @endif
    </main>

    <section class="bg-[#4B6BFF] py-16 px-4 md:px-10 lg:px-16">
        <div class="max-w-7xl mx-auto">
            <!-- Header + Tombol -->
            <div class="flex flex-col lg:flex-row items-center justify-between text-center lg:text-left mb-12">
                <div>
                    <h2 class="text-3xl lg:text-4xl font-bold text-white mb-3">Produk Sekolah</h2>
                    <p class="text-white/90 max-w-2xl mx-auto lg:mx-0">
                        Karya unggulan dari siswa SMKN 6 Jember yang mencerminkan kreativitas, inovasi, dan semangat
                        wirausaha muda.
                    </p>
                </div>

                <a href="/branding"
                    class="mt-6 lg:mt-0 flex items-center gap-2 px-5 py-2.5 text-white font-bold border border-white rounded-full hover:bg-white hover:text-[#4B6BFF] transition duration-300">
                    Lihat Semua Produk
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                </a>
            </div>

            <!-- Grid Produk -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Kartu 1 -->
                <div
                    class="bg-white rounded-3xl shadow-md p-6 flex flex-col transition hover:-translate-y-2 hover:shadow-xl duration-300">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-1">Energi Enem</h3>
                        <p class="text-gray-500 text-sm mb-4">Air minum sehat hasil produksi oleh Depo SMKN 6 Jember</p>
                        <div class="rounded-2xl overflow-hidden">
                            <img src="{{ asset('image/home/energienem.png') }}" alt="Energi Enem"
                                class="w-full h-56 object-cover">
                        </div>
                    </div>
                    <div class="flex justify-end mt-4">
                        <a href="/energienem"
                            class="bg-blue-100 hover:bg-blue-600 hover:text-white text-blue-600 p-3 rounded-full transition inline-flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Kartu 2 -->
                <div
                    class="bg-white rounded-3xl shadow-md p-6 flex flex-col transition hover:-translate-y-2 hover:shadow-xl duration-300">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-1">Batik Enem</h3>
                        <p class="text-gray-500 text-sm mb-4">Batik karya siswa SMKN 6 Jember yang memadukan tradisi dan
                            gaya modern.</p>
                        <div class="rounded-2xl overflow-hidden">
                            <img src="{{ asset('image/home/batikenem.png') }}" alt="Batik Enem"
                                class="w-full h-56 object-cover">
                        </div>
                    </div>
                    <div class="flex justify-end mt-4">
                        <a href="/batikenem"
                            class="bg-blue-100 hover:bg-blue-600 hover:text-white text-blue-600 p-3 rounded-full transition inline-flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Kartu 3 -->
                <div
                    class="bg-white rounded-3xl shadow-md p-6 flex flex-col transition hover:-translate-y-2 hover:shadow-xl duration-300">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-1">Studio Enem</h3>
                        <p class="text-gray-500 text-sm mb-4">Studio foto kreatif karya <br>
                            siswa SMKN 6 Jember.</p>
                        <div class="rounded-2xl overflow-hidden">
                            <img src="{{ asset('image/home/studioenem.png') }}" alt="Studio Enem"
                                class="w-full h-56 object-cover">
                        </div>
                    </div>
                    <div class="flex justify-end mt-4">
                        <a href="/studioenem"
                            class="bg-blue-100 hover:bg-blue-600 hover:text-white text-blue-600 p-3 rounded-full transition inline-flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <br><br><br><br>

    <section class="fasility bg-slate-900 px-4 md:px-10 py-16 md:py-20">
        <div class="flex flex-col lg:flex-row items-start gap-10">
            <!-- Teks -->
            <div class="lg:w-1/3 ml-0 md:ml-5" style="margin-top: 6.5rem;">
                <h2 class="text-white text-3xl font-bold mb-4">Ekstrakurikuler</h2>
                <p class="text-white leading-relaxed">
                    SMKN 6 Jember menyediakan berbagai ekstrakurikuler yang mendukung bakat,
                    minat, prestasi, serta membentuk karakter disiplin, mandiri, dan kreatif siswa.
                </p>
            </div>

            <!-- Slider -->
            <div class="relative lg:w-2/3 -mt-2">
                <div id="track2"
                    class="flex gap-4 px-2 py-2 overflow-x-auto snap-x snap-mandatory scroll-smooth no-scrollbar">
                    <!-- Slide 1 -->
                    <div class="shrink-0 eskul-slide snap-start">
                        <div class="grid grid-cols-2 gap-3">
                            <figure
                                class="relative col-span-2 sm:col-span-1 rounded-xl overflow-hidden shadow group eskul-figure">
                                <img src="{{ asset('image/eskul/paskib.png') }}" alt="Paskibraka"
                                    class="w-full h-full object-cover transition duration-500 group-hover:scale-105" />
                                <div
                                    class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition duration-500 flex items-center justify-center">
                                    <span class="text-white text-xl font-semibold">Paskibraka</span>
                                </div>
                            </figure>
                            <figure
                                class="relative col-span-2 sm:col-span-1 rounded-xl overflow-hidden shadow group eskul-figure">
                                <img src="{{ asset('image/eskul/pmr.png') }}" alt="PMR"
                                    class="w-full h-full object-cover transition duration-500 group-hover:scale-105" />
                                <div
                                    class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition duration-500 flex items-center justify-center">
                                    <span class="text-white text-xl font-semibold">Palang Merah Remaja</span>
                                </div>
                            </figure>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="shrink-0 eskul-slide snap-start">
                        <div class="grid grid-cols-2 gap-3">
                            <figure
                                class="relative col-span-2 sm:col-span-1 rounded-xl overflow-hidden shadow group eskul-figure">
                                <img src="{{ asset('image/eskul/tari.png') }}" alt="Sanggar Tari"
                                    class="w-full h-full object-cover transition duration-500 group-hover:scale-105" />
                                <div
                                    class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition duration-500 flex items-center justify-center">
                                    <span class="text-white text-xl font-semibold">Sanggar Tari</span>
                                </div>
                            </figure>
                            <figure
                                class="relative col-span-2 sm:col-span-1 rounded-xl overflow-hidden shadow group eskul-figure">
                                <img src="{{ asset('image/eskul/merpatiputih.png') }}" alt="Marching Band"
                                    class="w-full h-full object-cover transition duration-500 group-hover:scale-105" />
                                <div
                                    class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition duration-500 flex items-center justify-center">
                                    <span class="text-white text-xl font-semibold">Merpati Putih</span>
                                </div>
                            </figure>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="shrink-0 eskul-slide snap-start">
                        <div class="grid grid-cols-2 gap-3">
                            <figure
                                class="relative col-span-2 sm:col-span-1 rounded-xl overflow-hidden shadow group eskul-figure">
                                <img src="{{ asset('image/eskul/pencakorganisasi.png') }}" alt="Hadroh"
                                    class="w-full h-full object-cover transition duration-500 group-hover:scale-105" />
                                <div
                                    class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition duration-500 flex items-center justify-center">
                                    <span class="text-white text-xl font-semibold">Pencak Organisasi</span>
                                </div>
                            </figure>
                            <figure
                                class="relative col-span-2 sm:col-span-1 rounded-xl overflow-hidden shadow group eskul-figure">
                                <img src="{{ asset('image/eskul/renang.jpg') }}" alt="Osis"
                                    class="w-full h-full object-cover transition duration-500 group-hover:scale-105" />
                                <div
                                    class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition duration-500 flex items-center justify-center">
                                    <span class="text-white text-xl font-semibold">Renang</span>
                                </div>
                            </figure>
                        </div>
                    </div>

                    <!-- Slide 4 -->
                    <div class="shrink-0 eskul-slide snap-start">
                        <div class="grid grid-cols-2 gap-3">
                            <figure
                                class="relative col-span-2 sm:col-span-1 rounded-xl overflow-hidden shadow group eskul-figure">
                                <img src="{{ asset('image/eskul/hadroh.png') }}" alt="Sanggar Tari"
                                    class="w-full h-full object-cover transition duration-500 group-hover:scale-105" />
                                <div
                                    class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition duration-500 flex items-center justify-center">
                                    <span class="text-white text-xl font-semibold">Hadroh</span>
                                </div>
                            </figure>
                            <figure
                                class="relative col-span-2 sm:col-span-1 rounded-xl overflow-hidden shadow group eskul-figure">
                                <img src="{{ asset('image/eskul/marchingband.png') }}" alt="Marching Band"
                                    class="w-full h-full object-cover transition duration-500 group-hover:scale-105" />
                                <div
                                    class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition duration-500 flex items-center justify-center">
                                    <span class="text-white text-xl font-semibold">Merching Band</span>
                                </div>
                            </figure>
                        </div>
                    </div>
                    <!-- Slide 5 -->
                    <div class="shrink-0 eskul-slide snap-start">
                        <div class="grid grid-cols-2 gap-3">
                            <figure
                                class="relative col-span-2 sm:col-span-1 rounded-xl overflow-hidden shadow group eskul-figure">
                                <img src="{{ asset('image/eskul/panah.png') }}" alt="Sanggar Tari"
                                    class="w-full h-full object-cover transition duration-500 group-hover:scale-105" />
                                <div
                                    class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition duration-500 flex items-center justify-center">
                                    <span class="text-white text-xl font-semibold">Panahan</span>
                                </div>
                            </figure>
                            <figure
                                class="relative col-span-2 sm:col-span-1 rounded-xl overflow-hidden shadow group eskul-figure">
                                <img src="{{ asset('image/eskul/paduansuara.jpg') }}" alt="Marching Band"
                                    class="w-full h-full object-cover transition duration-500 group-hover:scale-105" />
                                <div
                                    class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition duration-500 flex items-center justify-center">
                                    <span class="text-white text-xl font-semibold">Paduan Suara</span>
                                </div>
                            </figure>
                        </div>
                    </div>
                    <!-- Slide 6 -->
                    <div class="shrink-0 eskul-slide snap-start">
                        <div class="grid grid-cols-2 gap-3">
                            <figure
                                class="relative col-span-2 sm:col-span-1 rounded-xl overflow-hidden shadow group eskul-figure">
                                <img src="{{ asset('image/eskul/futsal.png') }}" alt="Sanggar Tari"
                                    class="w-full h-full object-cover transition duration-500 group-hover:scale-105" />
                                <div
                                    class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition duration-500 flex items-center justify-center">
                                    <span class="text-white text-xl font-semibold">Futsal</span>
                                </div>
                            </figure>
                            <figure
                                class="relative col-span-2 sm:col-span-1 rounded-xl overflow-hidden shadow group eskul-figure">
                                <img src="{{ asset('image/eskul/voli.jpg') }}" alt="Marching Band"
                                    class="w-full h-full object-cover transition duration-500 group-hover:scale-105" />
                                <div
                                    class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition duration-500 flex items-center justify-center">
                                    <span class="text-white text-xl font-semibold">Voli</span>
                                </div>
                            </figure>
                        </div>
                    </div>
                    <!-- Slide 5 -->
                    <div class="shrink-0 eskul-slide snap-start">
                        <div class="grid grid-cols-2 gap-3">
                            <figure
                                class="relative col-span-2 sm:col-span-1 rounded-xl overflow-hidden shadow group eskul-figure">
                                <img src="{{ asset('image/eskul/basket.png') }}" alt="Sanggar Tari"
                                    class="w-full h-full object-cover transition duration-500 group-hover:scale-105" />
                                <div
                                    class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition duration-500 flex items-center justify-center">
                                    <span class="text-white text-xl font-semibold">Basket</span>
                                </div>
                            </figure>
                            <figure
                                class="relative col-span-2 sm:col-span-1 rounded-xl overflow-hidden shadow group eskul-figure">
                                <img src="{{ asset('image/eskul/englishclub.jpg') }}" alt="Marching Band"
                                    class="w-full h-full object-cover transition duration-500 group-hover:scale-105" />
                                <div
                                    class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition duration-500 flex items-center justify-center">
                                    <span class="text-white text-xl font-semibold">English Club</span>
                                </div>
                            </figure>
                        </div>
                    </div>

                </div>
                <div class="mt-4 flex items-center justify-center gap-2" id="dots2"></div>
            </div>
        </div>
    </section>

    <section class="bg-gray-50 py-16">
        <div class="max-w-5xl mx-auto text-center px-4">
            <h2 class="text-3xl font-bold text-gray-800 mb-8">Tracer Study</h2>

            <div class="flex flex-col md:flex-row items-center justify-center gap-10">
                <div class="w-80 h-80 bg-white p-4 rounded-xl shadow">
                    <canvas id="tracerChart"></canvas>
                </div>

                <div class="text-left space-y-4">
                    <div class="flex items-center space-x-3">
                        <div class="w-6 h-6 rounded-full bg-cyan-300"></div>
                        <p class="font-semibold text-gray-700">Siswa bekerja : <span class="font-normal">62,5%</span></p>
                    </div>
                    <div class="flex items-center space-x-3">
                        <div class="w-6 h-6 rounded-full bg-cyan-500"></div>
                        <p class="font-semibold text-gray-700">Siswa melanjutkan : <span class="font-normal">25%</span>
                        </p>
                    </div>
                    <div class="flex items-center space-x-3">
                        <div class="w-6 h-6 rounded-full bg-cyan-700"></div>
                        <p class="font-semibold text-gray-700">Siswa wirausaha : <span class="font-normal">12,5%</span>
                        </p>
                    </div>
                </div>
            </div><br>
            <p>
                Data ini setiap tahun akan berubah sesuai dengan website ini
                <a href="https://tracervokasi.kemendikdasmen.go.id/" target="_blank"
                    class="text-blue-600 hover:underline">
                    https://tracervokasi.kemendikdasmen.go.id/
                </a>.
            </p>

            {{-- <div class="mt-10">
                <a href="#"
                    class="px-6 py-2.5 rounded-lg bg-gradient-to-r from-blue-600 to-blue-900 text-white font-semibold hover:opacity-90 transition">
                    Selengkapnya
                </a>
            </div> --}}
        </div>

        <br><br>

        <section
            class="bg-[#F4F5F7] rounded-3xl p-8 md:p-12 flex flex-col md:flex-row items-center gap-10 max-w-8xl mx-auto shadow-md h-[100vh]">

            <!-- Bagian kiri (gambar + kartu layanan) -->
            <div class="relative ml-10">
                <div class="bg-pink-200 rounded-tr-[50px] rounded-bl-[50px] overflow-hidden">
                    <img src="{{ asset('image/home/bk.png') }}" alt="Konseling"
                        class="w-80 md:w-96 h-[460px] object-cover" />
                </div>

                <!-- 3 kartu kecil di sisi kanan -->
                <div class="absolute top-1/4 -right-44 space-y-3">
                    <div class="flex items-center gap-3 bg-white shadow-md rounded-xl px-4 py-2 w-52">
                        <div class="bg-blue-600 text-white p-2 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M5.121 17.804A9 9 0 1118.879 4.196 9 9 0 015.121 17.804z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <span class="font-semibold text-gray-700">Konseling Pribadi</span>
                    </div>

                    <div class="flex items-center gap-3 bg-white shadow-md rounded-xl px-4 py-2 w-52">
                        <div class="bg-blue-600 text-white p-2 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12h6m-3-3v6m9-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <span class="font-semibold text-gray-700">Bimbingan Karier</span>
                    </div>

                    <div class="flex items-center gap-3 bg-white shadow-md rounded-xl px-4 py-2 w-52">
                        <div class="bg-blue-600 text-white p-2 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17 20h5V4H2v16h5m10 0v-2a2 2 0 00-2-2H9a2 2 0 00-2 2v2h10z" />
                            </svg>
                        </div>
                        <span class="font-semibold text-gray-700">Konseling Sosial</span>
                    </div>
                </div>
            </div>

            <!-- Bagian kanan (teks) -->
            <div class="max-w-xl text-center md:text-left ml-40"">
                <p class="text-blue-600 font-semibold">Bimbingan Konseling</p>
                <h2 class="text-1xl md:text-2xl font-bold text-gray-900 mt-2 leading-snug">
                    Kamu Lagi ada Masalah?<br>
                    Yuk, <span class="text-white bg-blue-600 px-1 py-1 rounded-full text-lg ">konsultasi sekarang!</span>
                </h2>
                <p class="text-gray-700 mt-5 leading-relaxed">
                    Saat kamu merasa bingung, tertekan, atau butuh teman bicara, konselor siap membantu.
                    Jangan pendam sendiri, yuk ceritakan masalahmu agar bisa menemukan solusi bersama
                    dengan cara yang sehat dan tepat.
                </p>
                <a href="https://wa.me/6285806541124" target="_blank">
                    <button
                        class="mt-7 bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-xl font-semibold transition shadow-md">
                        Konsultasi Sekarang
                    </button>
                </a>

            </div>

        </section>

        <!-- Footer contact -->
        <section
            class="w-full flex flex-col lg:flex-row items-center justify-between px-8 lg:px-20 py-12
                bg-[url('/image/home/footer.png')] bg-cover bg-center bg-no-repeat h-full "
            style="height: 120vh; margin-bottom:-4rem;">
            <!-- Bagian Kiri -->
            <div class="w-full lg:w-1/2 flex flex-col items-center lg:items-start text-center lg:text-left">
                <h2 class="relative -top-40 text-2xl lg:text-3xl font-bold text-gray-900 leading-snug mb-6">
                    Bergabunglah bersama <br />
                    kami dan wujudkan masa depan mu
                </h2>
                <div class="relative">
                    <!-- Background bentuk oval -->
                    <div
                        class="absolute -z-10 bg-gradient-to-r from-blue-500 to-blue-700 rounded-full w-[400px] h-[2    50px] top-10 left-1/2 -translate-x-1/2 lg:left-0 lg:translate-x-0">
                    </div>
                </div>
            </div>

            <!-- Bagian Kanan -->
            <div class="w-full lg:w-1/2 mt-10 lg:mt-0 bg-white p-8 shadow-lg rounded-2xl">
                <h3 class="text-2xl font-bold text-blue-900 mb-6" id="kontak    ">Ada Pertanyaan? Hubungi Kami</h3>

                <form id="contactForm" action="#" method="POST" class="space-y-4">
                    <input type="text" id="name" placeholder="Nama"
                        class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                    <input type="email" id="email" placeholder="Email"
                        class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                    <input type="tel" id="phone" placeholder="No Telepon"
                        class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                    <textarea id="message" rows="4" placeholder="Pesan"
                        class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                    <button type="submit"
                        class="w-full bg-gradient-to-r from-blue-500 to-blue-700 text-white font-semibold py-3 rounded-xl hover:opacity-90 transition">
                        Kirim Pesan
                    </button>
                </form>
            </div>
        </section>

    </section>

    <!-- Chart.js CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        function openVideoModal() {
            const modal = document.getElementById('videoModal');
            const frame = document.getElementById('videoFrame');
            frame.src = "https://www.youtube.com/embed/ubqR8YJGiSQ?autoplay=1"; // ID video dari tombol
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }

        function closeVideoModal() {
            const modal = document.getElementById('videoModal');
            const frame = document.getElementById('videoFrame');
            frame.src = ""; // Hentikan video
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }
        // Lazy-load images with IntersectionObserver
        (function() {
            const imgs = document.querySelectorAll('img.lazy-image');
            if (!('IntersectionObserver' in window)) {
                imgs.forEach(img => {
                    img.src = img.dataset.src || img.getAttribute('data-src');
                    img.classList.add('loaded');
                });
                return;
            }
            const onIntersect = entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        const src = img.dataset.src || img.getAttribute('data-src');
                        if (src) {
                            img.src = src;
                            img.onload = () => {
                                img.classList.add('loaded');
                                const ph = img.closest('.lazy-image-container')?.querySelector(
                                    '.image-placeholder');
                                if (ph) ph.style.display = 'none';
                            };
                        }
                        observer.unobserve(img);
                    }
                });
            };
            const observer = new IntersectionObserver(onIntersect, {
                rootMargin: '200px 0px'
            });
            imgs.forEach(img => observer.observe(img));
        })();

        document.addEventListener("DOMContentLoaded", () => {
            // SLIDER 1
            const track = document.getElementById('track');
            const btnPrev = document.getElementById('btnPrev');
            const btnNext = document.getElementById('btnNext');
            const dotsWrap = document.getElementById('dots');
            const slides = () => Array.from(track.children);

            const getCardWidth = () => {
                if (slides().length === 0) return 0;
                const slide = slides()[0];
                const slideWidth = slide.getBoundingClientRect().width;
                const style = window.getComputedStyle(track);
                const gap = parseInt(style.gap) || 0;
                return slideWidth + gap;
            };

            function scrollByCards(direction = 1) {
                const cardWidth = getCardWidth();
                if (cardWidth === 0) return;
                track.scrollBy({
                    left: direction * cardWidth,
                    behavior: "smooth"
                });
            }

            function getVisibleCardsCount() {
                if (slides().length === 0) return 1;
                const trackWidth = track.getBoundingClientRect().width;
                const cardWidth = getCardWidth();
                return Math.max(1, Math.floor(trackWidth / cardWidth));
            }

            function pagesCount() {
                const slideCount = slides().length;
                const visibleCards = getVisibleCardsCount();
                return Math.max(1, Math.ceil(slideCount / visibleCards));
            }

            function updateDots() {
                dotsWrap.innerHTML = "";
                const pageCount = pagesCount();

                for (let i = 0; i < pageCount; i++) {
                    const dot = document.createElement("button");
                    dot.className =
                        "size-2.5 sm:size-3 rounded-full bg-slate-300 data-[active=true]:bg-blue-600 transition";
                    dot.dataset.index = i;
                    dot.addEventListener("click", () => {
                        const cardWidth = getCardWidth();
                        const visibleCards = getVisibleCardsCount();
                        track.scrollTo({
                            left: i * cardWidth * visibleCards,
                            behavior: "smooth"
                        });
                    });
                    dotsWrap.appendChild(dot);
                }
                setActiveDot();
            }

            function setActiveDot() {
                const pageCount = pagesCount();
                if (pageCount === 0) return;
                const maxScroll = track.scrollWidth - track.clientWidth;
                const scrollPosition = track.scrollLeft;
                let activePage;
                if (maxScroll <= 0) {
                    activePage = 0;
                } else {
                    const scrollPercentage = scrollPosition / maxScroll;
                    activePage = Math.min(pageCount - 1, Math.round(scrollPercentage * (pageCount - 1)));
                }
                [...dotsWrap.children].forEach((dot, i) => {
                    dot.dataset.active = i === activePage;
                });
            }

            btnPrev?.addEventListener("click", () => scrollByCards(-1));
            btnNext?.addEventListener("click", () => scrollByCards(1));

            // Swipe support
            let touchStartX = 0,
                touchEndX = 0;
            track.addEventListener('touchstart', e => touchStartX = e.changedTouches[0].screenX, {
                passive: true
            });
            track.addEventListener('touchend', e => {
                touchEndX = e.changedTouches[0].screenX;
                const diff = touchStartX - touchEndX;
                if (Math.abs(diff) > 50) scrollByCards(diff > 0 ? 1 : -1);
            }, {
                passive: true
            });

            window.addEventListener("resize", () => setTimeout(updateDots, 200));
            track.addEventListener("scroll", () => setTimeout(setActiveDot, 50), {
                passive: true
            });
            updateDots();

            // SLIDER 2 - AUTO SCROLL
            const track2 = document.getElementById('track2');
            const dotsWrap2 = document.getElementById('dots2');

            const slides2 = () => Array.from(track2.children);
            // Clone once for loop effect (desktop)
            if (slides2().length && track2.dataset.cloned !== 'true') {
                slides2().forEach(slide => {
                    const clone = slide.cloneNode(true);
                    track2.appendChild(clone);
                });
                track2.dataset.cloned = 'true';
            }

            let scrollAmount = 0;
            let speed = 0.6; // smoother on mobile

            function autoScroll() {
                // Pause on user interaction
                if (isPointerDown) return requestAnimationFrame(autoScroll);

                scrollAmount += speed;
                const half = track2.scrollWidth / 2;
                if (scrollAmount >= half) scrollAmount = 0;
                track2.scrollLeft = scrollAmount;
                requestAnimationFrame(autoScroll);
            }

            // Allow drag to scroll for better UX
            let isPointerDown = false,
                startX = 0,
                startLeft = 0;
            track2.addEventListener('pointerdown', e => {
                isPointerDown = true;
                startX = e.clientX;
                startLeft = track2.scrollLeft;
                track2.setPointerCapture(e.pointerId);
            });
            track2.addEventListener('pointermove', e => {
                if (!isPointerDown) return;
                const dx = e.clientX - startX;
                track2.scrollLeft = startLeft - dx;
                scrollAmount = track2.scrollLeft; // sync
            });
            track2.addEventListener('pointerup', e => {
                isPointerDown = false;
                track2.releasePointerCapture(e.pointerId);
            });
            track2.addEventListener('mouseleave', () => {
                isPointerDown = false;
            });

            // Dots 2
            function updateDots2() {
                if (!dotsWrap2) return;
                dotsWrap2.innerHTML = "";
                const pageCount = slides2().length / 2;
                for (let i = 0; i < pageCount; i++) {
                    const dot = document.createElement("button");
                    dot.className =
                        "size-2.5 sm:size-3 rounded-full bg-slate-300 data-[active=true]:bg-blue-600 transition";
                    dot.dataset.index = i;
                    dot.addEventListener("click", () => {
                        const target = i * (track2.scrollWidth / 2) / pageCount;
                        track2.scrollTo({
                            left: target,
                            behavior: "smooth"
                        });
                        scrollAmount = target;
                    });
                    dotsWrap2.appendChild(dot);
                }
                setActiveDot2();
            }

            function setActiveDot2() {
                if (!dotsWrap2) return;
                const pageCount = slides2().length / 2;
                if (pageCount === 0) return;
                const maxScroll = track2.scrollWidth / 2 - track2.clientWidth;
                const scrollPosition = track2.scrollLeft;
                let activePage;
                if (maxScroll <= 0) {
                    activePage = 0;
                } else {
                    const scrollPercentage = scrollPosition / maxScroll;
                    activePage = Math.min(pageCount - 1, Math.round(scrollPercentage * (pageCount - 1)));
                }
                [...dotsWrap2.children].forEach((dot, i) => {
                    dot.dataset.active = i === activePage;
                });
            }

            window.addEventListener("resize", () => setTimeout(updateDots2, 200));
            track2.addEventListener("scroll", () => setTimeout(setActiveDot2, 50), {
                passive: true
            });
            updateDots2();
            autoScroll();

            // FORM
            const form = document.getElementById('contactForm');
            form?.addEventListener('submit', function(e) {
                e.preventDefault();
                const name = document.getElementById('name')?.value?.trim();
                const email = document.getElementById('email')?.value?.trim();
                const phone = document.getElementById('phone')?.value?.trim();
                const message = document.getElementById('message')?.value?.trim();

                if (!name || !email || !message) {
                    showNotification('Harap isi semua field yang diperlukan', 'error');
                    return;
                }
                showNotification('Pesan Anda telah berhasil dikirim!', 'success');
                form.reset();
            });

            function showNotification(message, type) {
                const notification = document.createElement('div');
                notification.className =
                    `fixed top-4 right-4 px-6 py-3 rounded-lg shadow-lg text-white ${type === 'success' ? 'bg-green-500' : 'bg-red-500'} transform transition-transform duration-300 translate-x-full z-50`;
                notification.textContent = message;
                document.body.appendChild(notification);
                setTimeout(() => notification.classList.remove('translate-x-full'), 10);
                setTimeout(() => {
                    notification.classList.add('translate-x-full');
                    setTimeout(() => document.body.removeChild(notification), 300);
                }, 3000);
            }

            // TRACER CHART - Fixed initialization
            const tracerCtx = document.getElementById('tracerChart');
            if (tracerCtx) {
                // Check if Chart is loaded
                if (typeof Chart !== 'undefined') {
                    new Chart(tracerCtx, {
                        type: 'pie',
                        data: {
                            labels: ['Siswa Bekerja', 'Siswa Melanjutkan', 'Siswa Wirausaha'],
                            datasets: [{
                                data: [62.5, 25, 12.5],
                                backgroundColor: ['#67e8f9', '#06b6d4', '#0891b2'],
                                borderWidth: 1
                            }]
                        },
                        options: {
                            responsive: true,
                            maintainAspectRatio: false,
                            plugins: {
                                legend: {
                                    position: 'bottom',
                                    labels: {
                                        color: '#374151',
                                        font: {
                                            size: 14
                                        },
                                        padding: 20
                                    }
                                },
                                tooltip: {
                                    callbacks: {
                                        label: function(context) {
                                            let label = context.label || '';
                                            if (label) {
                                                label += ': ';
                                            }
                                            label += context.parsed + '%';
                                            return label;
                                        }
                                    }
                                }
                            }
                        }
                    });
                } else {
                    console.error('Chart.js library not loaded');
                }
            }
        });
    </script>
@endsection
