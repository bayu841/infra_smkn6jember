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
            border-radius: 4px;
            cursor: pointer;
            background: linear-gradient(to right, #3C71F8, #24437C);
        }

        .brand {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto;
            padding: 10px 10px;
            background-color: rgb(255, 255, 255);
            width: 900px;
            margin-top: -3rem;
            border-radius: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            height: 12vh;
        }

        .brand img {
            width: 50px;
            margin: 6px;
        }

        .about {
            margin-left: 6rem;
            margin-top: 3rem;
        }

        .profile-a {
            border-radius: 60px 0px 0px 0px;
        }

        .card {
            background-color: #24437C;
            width: 300px;
            height: 40vh;
            border-radius: 20px;
            margin-left: 5rem;
            margin-top: 2rem;
        }

        .card-1 {
            background-color: #EFEFEF;
            width: 300px;
            height: 40vh;
            border-radius: 20px;
            margin-left: 5rem;
            margin-top: 2rem;
        }

        .card p {
            color: #fff;
            padding: 24px;
            padding-top: 6rem;
        }

        .card-1 p {
            color: #fff;
            padding: 24px;
            padding-top: 6rem;
            color: black
        }

        .red-box {
            margin-top: -2rem;
            height: 15vh;
            background-color: #1e6891;
        }

        .card-profile {
            margin-right: 8rem;
        }

        .title-box {
            background: linear-gradient(to right, #3C71F8, #24437C);
        }

        .fasility {
            background-image: url('image/home/eskul.png');
            height: 100vh;
            background-size: cover;
        }

        .text-major {
            margin-top: 14rem;
        }

        .study {
            background-image: url('image/rpl/pemrpl.png');
            height: 120vh;
        }

        .study h2 {
            padding-top: 13rem;
        }

        .class {
            margin-left: 5rem;
        }

        .teacher {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            max-width: 1000px;
            margin: 0 auto;
        }

        .card-teacher1 {
            width: 260px;
            height: 60vh;
            border-radius: 10px;
            margin-bottom: 2rem;
            position: relative;
            overflow: hidden;
        }

        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        /* Simple gradient helpers */
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

        /* Slide animation */
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
    </style>

    <section class="h-screen bg-cover bg-center flex items-center justify-center text-black"
        style="background-image: url('image/home/herohome.png'); width:100%; height:110vh; ">
        <!-- Teks -->
        <div class="flex-1 mb-10 md:mb-0 ml-40">
            <h1 class="text-4xl md:text-1xl font-bold mb-5">Selamat Datang
                di <h1 class="text-4xl md:text-1xl font-bold mb-5 text-blue-600" style="margin-top: -1rem">SMKN 6 Jember</h1>
            </h1>
            <p class="text-lg md:text-xl mb-7">
                Smk bisa,SMK Hebat, <br>
                SMK Negeri 6 Jember,Berenergi Untuk bisa hebat </p>
            <a href="#" class="btn" style="background color">
                Daftar Sekarang
            </a>
        </div>
        </div>
    </section>

    <div class="brand">
        <img src="{{ asset('image/logoinfra.png') }}" alt="">
        <img src="{{ asset('image/logokom.png') }}" alt="">
        <img src="{{ asset('image/logomaspion.png') }}" alt="">
        <img src="{{ asset('image/logoiqo.png') }}" alt="">
        <img src="{{ asset('image/logorpl.png') }}" alt="">
        <img src="{{ asset('image/logobd.png') }}" alt="">
        <img src="{{ asset('image/logoak.png') }}" alt="">
        <img src="{{ asset('image/logomp.png') }}" alt="">
        <img src="{{ asset('image/logodkv.png') }}" alt="">
        <img src="{{ asset('image/logokkbt.png') }}" alt="">
        <img src="{{ asset('image/brand1.png') }}" alt="">
        <img src="{{ asset('image/brand2.png') }}" alt="">
        <img src="{{ asset('image/brand3.png') }}" alt="">
        <img src="{{ asset('image/brand4.png') }}" alt="">
    </div>
    <br>
    <section class="about">
        <div class="flex flex-col md:flex-row items-start justify-between px-6 md:px-12 py-10 gap-1 ml-10">
            <!-- Bagian kiri (teks) -->
            <div class="md:w-1/2 space-y-1"><br><br>
                <p class="text-blue-500 font-semibold text-sm">Tentang Kami</p>
                <h2 class="text-2xl font-bold">SMKN 6 Jember <br>
                    Sekolah Pusat Sekolah</h2>
                <p class="text-gray-700">
                    Video Profil SMKN 6 Jember mengajak penonton mengenal <br>
                    lebih dekat sekolah yang penuh cerita dan prestasi. Dari sejarah yang
                    membentuk jati diri, berlanjut pada visi dan misi yang menjadi arah masa depan.
                </p><br>
                <a href="https://youtu.be/ubqR8YJGiSQ" class="bg-red-500 text-white text-sm px-3 py-2 rounded-md btn">
                    Tonton Video Profil
                </a>
            </div>

            <!-- Bagian kanan (ilustrasi kotak) -->
            <div class="relative w-64 h-80 card-profile">
                <!-- Card Utama -->
                <div class="bg-gray-300 w-full h-full rounded-bl-xl overflow-hidden relative bg-cover bg-center"
                    style="background-image: url('{{ asset('image/home/kepalasekolah.png') }}')">
                    <!-- Label bawah -->
                    <div
                        class="absolute bottom-0 left-0 bg-red-500 text-white text-sm font-bold px-4 py-2 rounded-tr-lg title-box">
                        Kepala Sekolah
                    </div>
                </div>

                <!-- Kotak merah kanan atas -->
                <div class="absolute top-0 right-0 bg-red-500 w-16 h-20 rounded-lg red-box"></div>

                <!-- Lingkaran dekorasi kanan -->
                <div class="absolute top-1/3 right-[-20px] flex flex-col gap-2">
                    <span class="w-3 h-3 bg-blue-300 rounded-full"></span>
                    <span class="w-3 h-3 bg-blue-300 rounded-full"></span>
                    <span class="w-3 h-3 bg-blue-300 rounded-full"></span>
                    <span class="w-3 h-3 bg-blue-300 rounded-full"></span>
                    <span class="w-3 h-3 bg-blue-300 rounded-full"></span>
                </div>

                <!-- Lingkaran dekorasi bawah -->
                <div class="absolute -bottom-5 right-6 flex gap-2">
                    <span class="w-3 h-3 bg-blue-300 rounded-full"></span>
                    <span class="w-3 h-3 bg-blue-300 rounded-full"></span>
                    <span class="w-3 h-3 bg-blue-300 rounded-full"></span>
                    <span class="w-3 h-3 bg-blue-300 rounded-full"></span>
                </div>
            </div>
        </div>
    </section>
    <br><br>

    <!-- Slider Section - Centered -->
    <section class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-10">
        <div class="mb-6 text-center">
            <p class="text-primary font-semibold text-start text-blue-600">Jurusan di sekolah</p>
            <h2 class="text-3xl sm:text-3xl font-bold leading-tight mt-2 text-start">
                Pilih Jurusan Sesuai Minat Anda
            </h2>
        </div>

        <!-- Slider wrapper - Centered -->
        <div class="relative flex justify-center">
            <!-- Prev Button -->
            <button id="btnPrev"
                class="absolute -left-2 sm:-left-4 top-1/2 -translate-y-1/2 z-10 size-11 sm:size-12 grid place-items-center rounded-full bg-white shadow-smooth ring-1 ring-slate-200 hover:ring-primary/40 hover:shadow-md transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-5 text-slate-700" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2">
                    <path d="M15 18l-6-6 6-6" />
                </svg>
            </button>

            <!-- Next Button -->
            <button id="btnNext"
                class="absolute -right-2 sm:-right-4 top-1/2 -translate-y-1/2 z-10 size-11 sm:size-12 grid place-items-center rounded-full bg-white shadow-smooth ring-1 ring-slate-200 hover:ring-primary/40 hover:shadow-md transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-5 text-slate-700" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2">
                    <path d="M9 6l6 6-6 6" />
                </svg>
            </button>

            <!-- Track - Centered -->
            <div id="track"
                class="no-scrollbar overflow-x-auto scroll-smooth snap-x snap-mandatory flex gap-6 sm:gap-8 pb-3 justify-center">
                <!-- Slide 1 -->
                <article
                    class="min-w-[85%] sm:min-w-[46%] lg:min-w-[31%] snap-start rounded-2xl bg-white shadow-smooth ring-1 ring-slate-100 fade-in">
                    <div class="card-grad-1 rounded-t-2xl overflow-hidden">
                        <!-- header image placeholder -->
                        <div class="h-48 sm:h-60 bg-cover bg-center" style="background-image: url('image/home/rpl.png');">
                            <!-- badge -->
                            <div class="-mt-5 px-5">
                                <span
                                    class="inline-block px-4 py-2 rounded-full bg-red-600 text-white text-sm font-semibold shadow text-major">
                                    Rekayasa Perangkat Lunak
                                </span>
                            </div>
                        </div>

                        <div class="p-5 sm:p-6">
                            <p class="text-slate-700 leading-relaxed mt-4">
                                Jurusan RPL adalah bidang di SMK yang mempelajari pembuatan dan pengembangan perangkat lunak
                                untuk mencetak tenaga IT profesional.
                            </p>
                        </div>

                        <div class="p-5 sm:p-6 -mt-6">
                            <a href="#rpl"
                                class="btn-grad w-full inline-flex items-center justify-center gap-2 text-white font-semibold py-3 rounded-xl transition hover:opacity-95">
                                Selengkapnya
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2">
                                    <path d="M5 12h14M12 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                </article>

                <!-- Slide 2 -->
                <article
                    class="min-w-[85%] sm:min-w-[46%] lg:min-w-[31%] snap-start rounded-2xl bg-white shadow-smooth ring-1 ring-slate-100 fade-in">
                    <div class="card-grad-1 rounded-t-2xl overflow-hidden">
                        <!-- header image placeholder -->
                        <div class="h-48 sm:h-60 bg-cover bg-center" style="background-image: url('image/home/bd.png');">
                            <!-- badge -->
                            <div class="-mt-5 px-5">
                                <span
                                    class="inline-block px-4 py-2 rounded-full bg-orange-600 text-white text-sm font-semibold shadow text-major">
                                    Bisnis Digital
                                </span>
                            </div>
                        </div>

                        <div class="p-5 sm:p-6">
                            <p class="text-slate-700 leading-relaxed mt-4">
                                Jurusan Bisnis Digital mempersiapkan siswa mengelola bisnis digital, membuka peluang
                                wirausaha, dan mencetak profesional siap pakai.
                            </p>
                        </div>

                        <div class="p-5 sm:p-6 -mt-6">
                            <a href="#rpl"
                                class="btn-grad w-full inline-flex items-center justify-center gap-2 text-white font-semibold py-3 rounded-xl transition hover:opacity-95">
                                Selengkapnya
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M5 12h14M12 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                </article>


                <!-- Slide 3 -->
                <article
                    class="min-w-[85%] sm:min-w-[46%] lg:min-w-[31%] snap-start rounded-2xl bg-white shadow-smooth ring-1 ring-slate-100 fade-in">
                    <div class="card-grad-1 rounded-t-2xl overflow-hidden">
                        <!-- header image placeholder -->
                        <div class="h-48 sm:h-60 bg-cover bg-center" style="background-image: url('image/home/akl.png');">
                            <!-- badge -->
                            <div class="-mt-5 px-5">
                                <span
                                    class="inline-block px-4 py-2 rounded-full bg-green-600 text-white text-sm font-semibold shadow text-major">
                                    Akuntansi
                                </span>
                            </div>
                        </div>

                        <div class="p-5 sm:p-6">
                            <p class="text-slate-700 leading-relaxed mt-4">
                                Jurusan Akuntansi SMK 6 Jember mempelajari pencatatan dan pelaporan keuangan untuk mendukung
                                keputusan bisnis.
                            </p>
                        </div>

                        <div class="p-5 sm:p-6 -mt-6">
                            <a href="#rpl"
                                class="btn-grad w-full inline-flex items-center justify-center gap-2 text-white font-semibold py-3 rounded-xl transition hover:opacity-95">
                                Selengkapnya
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M5 12h14M12 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                </article>
            </div>
        </div>

        <!-- Dots - Centered -->
        <div class="mt-6 flex items-center justify-center gap-2" id="dots"></div>
    </section>

    <!-- Main Content - Berita dan Pengumuman -->
    <main class="container mx-auto px-4 py-8">
        <div class="mb-8">
            <h2 class="text-3xl font-bold text-gray-800 mb-2">Berita dan Pengumuman</h2>
            <p class="text-gray-600">Informasi terkini seputar kegiatan sekolah dan prestasi siswa</p>
        </div>

        <!-- Layout dengan 3 bagian -->
        <div class="container flex flex-col lg:flex-row gap-8">
            <!-- Konten kiri -->
            <div class="konten lg:w-2/3 bg-white rounded-lg shadow-md overflow-hidden">
                <img src="{{ asset('image/home/berita1.png') }}" alt="Berita Utama"
                    class="w-full  h-[550px] object-cover">
                <div class="des p-6">
                    <div class="flex justify-between items-center mb-3">
                        <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded">Prestasi</span>
                        <span class="text-gray-500 text-sm">12 Mei 2023</span>
                    </div>
                    <h1 class="text-2xl md:text-3xl font-bold text-gray-800 mb-4">Siswa SMKN 6 Jember Raih Juara 1
                        Kompetisi Nasional</h1>
                    <p class="text-gray-600 mb-4">Tim siswa SMKN 6 Jember berhasil meraih juara pertama dalam kompetisi
                        teknologi informasi tingkat nasional yang diikuti oleh lebih dari 100 sekolah se-Indonesia.</p>
                    <p class="text-gray-600 mb-6">Kompetisi yang berlangsung selama tiga hari ini menguji berbagai aspek
                        kemampuan siswa dalam bidang teknologi informasi, mulai dari pemrograman, jaringan, hingga
                        pengembangan aplikasi.</p>
                    <a href="#" class="text-blue-600 font-medium hover:text-blue-800 inline-flex items-center">
                        Baca selengkapnya <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>

            <!-- Konten kanan -->
            <div class="kontenn lg:w-1/3 flex flex-col gap-6">
                <!-- Card 1 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:shadow-lg hover:-translate-y-1">
                    <img src="{{ asset('image/home/berita2.png') }}" alt="Universitas Muhammadiyah"
                        class="w-full h-48 object-cover">
                    <div class="p-5">
                        <div class="flex justify-between items-center mb-3">
                            <span
                                class="bg-green-100 text-green-800 text-xs font-semibold px-2.5 py-0.5 rounded">Kegiatan</span>
                            <span class="text-gray-500 text-sm">10 Mei 2023</span>
                        </div>
                        <h3 class="text-lg font-bold text-gray-800 mb-2">Kerjasama dengan Universitas Muhammadiyah Jember
                        </h3>
                        <p class="text-gray-600 mb-4">SMKN 6 Jember menjalin kerjasama dengan Universitas Muhammadiyah
                            Jember dalam program pengembangan kurikulum dan magang siswa.</p>
                        <a href="#" class="text-blue-600 font-medium hover:text-blue-800 inline-flex items-center">
                            Baca selengkapnya <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>

                <!-- Card 2 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:shadow-lg hover:-translate-y-1">
                    <img src="{{ asset('image/home/berita3.png') }}" alt="Juara Lomba EPIM"
                        class="w-full h-48 object-cover">
                    <div class="p-5">
                        <div class="flex justify-between items-center mb-3">
                            <span
                                class="bg-purple-100 text-purple-800 text-xs font-semibold px-2.5 py-0.5 rounded">Kompetisi</span>
                            <span class="text-gray-500 text-sm">8 Mei 2023</span>
                        </div>
                        <h3 class="text-lg font-bold text-gray-800 mb-2">Magang Siswa Di Jember</h3>
                        <p class="text-gray-600 mb-4">Magang siswa di Jember memberikan kesempatan praktis bagi pelajar
                            untuk menerapkan ilmu yang dipelajari di sekolah dalam lingkungan kerja nyata.</p>
                        <a href="#" class="text-blue-600 font-medium hover:text-blue-800 inline-flex items-center">
                            Baca selengkapnya <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="btn w-40 mt-10 mx-auto text-center">Selengkapnya</div>
    </main>
    <section class="bg-[#4C6EF5] text-white py-16 px-6 md:px-12">
        <div class="max-w-6xl mx-auto relative">

            <!-- HEADER SECTION -->
            <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-10">
                <div>
                    <h2 class="text-2xl md:text-3xl font-semibold mb-2">Produk Sekolah</h2>
                    <p class="text-sm md:text-base max-w-xl leading-relaxed">
                        Karya unggulan dari siswa SMKN 6 Jember yang mencerminkan kreativitas, inovasi, dan semangat
                        wirausaha muda.
                    </p>
                </div>

                <!-- Tombol Lihat Semua Produk -->
                <a href="#"
                    class="mt-5 md:mt-0 flex items-center gap-2 border border-white text-white px-5 py-2 rounded-full hover:bg-white hover:text-[#4C6EF5] transition font-medium">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                    Lihat Semua Produk
                </a>
            </div>

            <!-- GRID PRODUK -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                <!-- Card 1 -->
                <div class="bg-white text-black rounded-2xl shadow-lg overflow-hidden relative group">
                    <img src="https://via.placeholder.com/400x250" alt="Energi Enem" class="w-full h-52 object-cover">
                    <div class="p-6">
                        <h3 class="font-semibold text-lg mb-1">Energi Enem</h3>
                        <p class="text-sm text-gray-600">Air minum sehat hasil produksi oleh Depo SMKN 6 Jember.</p>
                    </div>
                    <a href="#"
                        class="absolute bottom-4 right-4 bg-[#4C6EF5] text-white p-2 rounded-full hover:bg-blue-600 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </div>

                <!-- Card 2 -->
                <div class="bg-white text-black rounded-2xl shadow-lg overflow-hidden relative group">
                    <img src="https://via.placeholder.com/400x250" alt="Batik Enem" class="w-full h-52 object-cover">
                    <div class="p-6">
                        <h3 class="font-semibold text-lg mb-1">Batik Enem</h3>
                        <p class="text-sm text-gray-600">Batik karya siswa SMKN 6 Jember yang memadukan tradisi dan gaya
                            modern.</p>
                    </div>
                    <a href="#"
                        class="absolute bottom-4 right-4 bg-[#4C6EF5] text-white p-2 rounded-full hover:bg-blue-600 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </div>

                <!-- Card 3 -->
                <div class="bg-white text-black rounded-2xl shadow-lg overflow-hidden relative group">
                    <img src="https://via.placeholder.com/400x250" alt="Studio Enem" class="w-full h-52 object-cover">
                    <div class="p-6">
                        <h3 class="font-semibold text-lg mb-1">Studio Enem</h3>
                        <p class="text-sm text-gray-600">Studio foto kreatif karya siswa SMKN 6 Jember.</p>
                    </div>
                    <a href="#"
                        class="absolute bottom-4 right-4 bg-[#4C6EF5] text-white p-2 rounded-full hover:bg-blue-600 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <br>

    <section class="fasility bg-slate-900 px-10 py-20" style="padding-top: 9rem;">
        <!-- bungkus teks + slider -->
        <div class="flex flex-col lg:flex-row items-start gap-10">

            <!-- Teks -->
            <div class="lg:w-1/3 ml-5" style="margin-top: 4rem;">
                <h2 class="text-white text-3xl font-bold mb-4">Ekstrakurikuler</h2>
                <p class="text-white leading-relaxed">
                    SMKN 6 Jember menyediakan berbagai <br>
                    ekstrakurikuler yang mendukung bakat, <br>
                    minat, prestasi, serta membentuk karakter <br>
                    disiplin, mandiri, dan kreatif siswa.
                </p>
                <div class="btn w-40 mt-5" style="border-radius: 70px;">Lihat Lainnya</div>
            </div>
            <!-- Slider -->
            <div class="relative lg:w-2/3" style="margin-top:-2rem;">
                <!-- Track -->
                <div id="track2"
                    class="flex gap-4 px-4 py-4 overflow-x-auto snap-x snap-mandatory scroll-smooth no-scrollbar">

                    <!-- Slide 1 -->
                    <div class="shrink-0 w-[85%] sm:w-[78%] md:w-[92%] lg:w-[92%] snap-start"
                        style="width: 850px; height:50vh;">
                        <div class="grid grid-cols-2 gap-3">
                            <figure class="relative col-span-2 sm:col-span-1 rounded-xl overflow-hidden shadow"
                                style="height:50vh;">
                                <img class="w-full h-48 sm:h-56 md:h-64 object-cover"
                                    src="{{ asset('image/rpl/fas1.png') }}" style="height:50vh;">
                                <figcaption class="absolute left-4 top-4">
                                    <span
                                        class="inline-flex rounded-e-2xl rounded-s-xl bg-blue-600 text-white font-semibold px-4 py-2 shadow">
                                        Lab RPL
                                    </span>
                                </figcaption>
                            </figure>
                            <figure class="relative col-span-2 sm:col-span-1 rounded-xl overflow-hidden shadow">
                                <figcaption class="absolute left-4 top-4">
                                    <span
                                        class="inline-flex rounded-e-2xl rounded-s-xl bg-blue-600 text-white font-semibold px-4 py-2 shadow">
                                        Teaching Factory
                                    </span>
                                </figcaption>
                                <img class="w-full h-48 sm:h-56 md:h-64 object-cover"
                                    src="{{ asset('image/rpl/fas2.png') }}" style="height:50vh;" />
                            </figure>
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="shrink-0 w-[85%] sm:w-[78%] md:w-[92%] lg:w-[92%] snap-start"
                        style="width: 1000px; height:50vh;">
                        <div class="grid grid-cols-2 gap-3">
                            <figure class="relative col-span-2 sm:col-span-1 rounded-xl overflow-hidden shadow"
                                style="height:50vh;">
                                <img class="w-full h-48 sm:h-56 md:h-64 object-cover" src="{{ asset('') }}"
                                    style="height:50vh;">
                                <figcaption class="absolute left-4 top-4">
                                    <span
                                        class="inline-flex rounded-e-2xl rounded-s-xl bg-blue-600 text-white font-semibold px-4 py-2 shadow">
                                        Kelas
                                    </span>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
                <!-- Dots -->
                <div id="dots2" class="flex items-center justify-center gap-2 pb-4"></div>
            </div>
        </div>
    </section>
    <section class="bg-gray-50 py-16">
        <div class="max-w-5xl mx-auto text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-8">Tracer Study</h2>

            <div class="flex flex-col md:flex-row items-center justify-center gap-10">
                <!-- Pie Chart -->
                <div class="w-64 h-64 bg-white p-4 rounded-xl shadow">
                    <canvas id="tracerChart"></canvas>
                </div>

                <!-- Keterangan -->
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
            </div>

            <!-- Tombol -->
            <div class="mt-10">
                <a href="#"
                    class="px-6 py-2.5 rounded-lg bg-gradient-to-r from-blue-600 to-blue-900 text-white font-semibold hover:opacity-90 transition">
                    Selengkapnya
                </a>
            </div>
        </div>

        <section
            class="bg-cover bg-center rounded-2xl overflow-hidden flex flex-col md:flex-row
                items-center justify-between px-8 py-10 md:py-16 text-white max-w-6xl mx-auto mt-20 min-h-[440px]"
            style="background-image: url('{{ asset('image/home/bkk.png') }}');"> <!-- Bagian Kiri -->
            <div class="max-w-lg">
                <h2 class="text-2xl md:text-3xl font-bold mb-4 leading-snug">
                    Siap Kerja? Temukan <br> Peluangmu di <span class="text-white font-extrabold">BKK</span>
                </h2>
                <p class="text-sm md:text-base text-slate-100 mb-6">
                    SMKN 6 Jember menjembatani lulusan dengan dunia kerja melalui informasi lowongan,
                    pelatihan, dan rekrutmen perusahaan mitra.
                </p>
                <button
                    class="bg-white text-[#3C71F8] px-6 py-2 rounded font-semibold shadow hover:bg-slate-100 transition">
                    Kunjungi BKK
                </button>
            </div>

            <!-- Bagian Kanan (Gambar) -->
            {{-- <div class="relative mt-10 md:mt-0 flex justify-center md:justify-end w-full md:w-1/2">
                <div
                    class="absolute -top-10 md:-top-20 right-0 w-[280px] md:w-[360px] lg:w-[400px] flex justify-center md:justify-end">
                    <img src="63813330-840c-4859-83ed-dbfbd805c049.png" alt="Siswi SMKN 6 Jember"
                        class="object-contain w-full h-auto drop-shadow-lg" />
                </div>
                <div class="invisible">
                    <!-- elemen dummy untuk menjaga tinggi layout agar gambar tidak tumpang tindih -->
                    <img src="63813330-840c-4859-83ed-dbfbd805c049.png" alt="" class="w-[280px]" />
                </div>
            </div> --}}
        </section>
        <br><br>

        <div class="font-poppins bg-gray-100 min-h-screen flex items-center justify-center p-4 md:p-8">
            <div class="container max-w-6xl w-full flex flex-col lg:flex-row gap-6 md:gap-8">
                <!-- Card Utama -->
                <div class="w-full lg:w-1/3">
                    <div class="card-main bg-gradient-to-br from-blue-500 to-blue-700 text-white p-6 md:p-8 rounded-xl shadow-2xl flex flex-col gap-4 md:gap-6"
                        style="min-height: 400px;">
                        <h3 class="text-lg md:text-xl font-light opacity-90">Kamu Lagi ada Masalah?</h3>
                        <h1 class="text-2xl md:text-3xl font-bold leading-tight">Yuk, konsultasi sekarang!</h1>
                        <div class="card-des flex flex-col gap-4">
                            <p class="text-blue-100 leading-relaxed">
                                Jangan biarkan masalahmu mengganggu harimu. Tim konselor kami siap mendengarkan dan membantu
                                menemukan solusi terbaik untukmu.
                            </p>
                            <button onclick="window.location.href='https://wa.me/6281333794278'"
                                class="self-start bg-white text-blue-600 hover:bg-blue-50 font-medium py-2.5 px-6 rounded-lg transition duration-300">
                            Konsultasi sekarang
                        </button>
                        </div>
                    </div>
                </div>

                <!-- Grid Card dengan pendekatan berbeda -->
                <div class="w-full lg:w-2/3 grid grid-cols-2 grid-rows-2 gap-4 md:gap-6" style="min-height: 400px;">
                    <div class="rounded-xl overflow-hidden shadow-lg">
                        <img src="https://picsum.photos/seed/counseling1/600/400.jpg" alt="Konsultasi"
                            class="w-full h-full object-cover">
                    </div>
                    <div class="rounded-xl overflow-hidden shadow-lg row-span-2">
                        <img src="https://picsum.photos/seed/counseling2/600/800.jpg" alt="Konseling"
                            class="w-full h-full object-cover">
                    </div>
                    <div class="rounded-xl overflow-hidden shadow-lg row-span-2">
                        <img src="https://picsum.photos/seed/counseling3/600/800.jpg" alt="Sesi konseling"
                            class="w-full h-full object-cover">
                    </div>
                    <div class="rounded-xl overflow-hidden shadow-lg">
                        <img src="https://picsum.photos/seed/counseling4/600/400.jpg" alt="Konselor"
                            class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </div><br>
        <div class="flex-grow flex items-center justify-center p-4">
            <div class="max-w-6xl w-full bg-white rounded-2xl shadow-xl overflow-hidden">
                <div class="md:flex">
                    <!-- Left Section with Image and Text -->
                    <div
                        class="md:w-1/2 bg-gradient-to-br from-blue-500 to-blue-700 p-8 flex flex-col items-center justify-center">
                        <h1 class="text-3xl font-bold text-white mb-8 text-center">Bergabunglah bersama kami dan wujudkan
                            masa
                            depan mu</h1>
                        <div class="relative">
                            <div class="absolute -inset-4 bg-blue-400 rounded-full opacity-20 blur-xl"></div>
                            <div class="relative bg-white p-4 rounded-xl shadow-lg">
                                <img src="https://z-cdn-media.chatglm.cn/files/12e2b92c-6dc5-4a13-85e0-b61c6ed252fd_pasted_image_1759187173153.png?auth_key=1790723189-6589604663c7496ba05b9fb79a12ccb-0-867ac09b110bf7fa4413bf12cf8ef096"
                                    alt="Students working together" class="rounded-lg">
                            </div>
                        </div>
                    </div>


                    <!-- Right Section with Form -->
                    <div class="md:w-1/2 p-8 md:p-12">
                        <h2 class="text-2xl font-semibold text-gray-800 mb-6">Ada Pertanyaan? Hubungi Kami</h2>

                        <form class="space-y-6">
                            <div>
                                <label for="name" class="block text-gray-700 mb-2">Nama</label>
                                <input type="text" id="name" name="name"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                                    placeholder="Nama lengkap Anda">
                            </div>

                            <div>
                                <label for="email" class="block text-gray-700 mb-2">Email</label>
                                <input type="email" id="email" name="email"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                                    placeholder="alamat@email.com">
                            </div>

                            <div>
                                <label for="phone" class="block text-gray-700 mb-2">Telepon</label>
                                <input type="tel" id="phone" name="phone"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                                    placeholder="Nomor telepon Anda">
                            </div>

                            <div>
                                <label for="message" class="block text-gray-700 mb-2">Pesan</label>
                                <textarea id="message" name="message" rows="4"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                                    placeholder="Tulis pesan Anda di sini"></textarea>
                            </div>

                            <button type="submit"
                                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-300 flex items-center justify-center">
                                Kirim Pesan
                                <i class="fas fa-paper-plane ml-2"></i>
                            </button>
                        </form>

                        <div class="mt-8 pt-6 border-t border-gray-200">
                            <div class="flex space-x-4">
                                <a href="#" class="text-gray-600 hover:text-blue-600 transition">
                                    <i class="fab fa-facebook-f text-xl"></i>
                                </a>
                                <a href="#" class="text-gray-600 hover:text-blue-600 transition">
                                    <i class="fab fa-twitter text-xl"></i>
                                </a>
                                <a href="#" class="text-gray-600 hover:text-blue-600 transition">
                                    <i class="fab fa-instagram text-xl"></i>
                                </a>
                                <a href="#" class="text-gray-600 hover:text-blue-600 transition">
                                    <i class="fab fa-linkedin-in text-xl"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            document.addEventListener("DOMContentLoaded", () => {

                /** =========================
                 *  SLIDER 1
                 *  ========================= */
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
                            "size-2.5 sm:size-3 rounded-full bg-slate-300 data-[active=true]:bg-primary transition";
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

                btnPrev.addEventListener("click", () => scrollByCards(-1));
                btnNext.addEventListener("click", () => scrollByCards(1));

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

                // Resize + Scroll
                window.addEventListener("resize", () => setTimeout(updateDots, 200));
                track.addEventListener("scroll", () => setTimeout(setActiveDot, 50), {
                    passive: true
                });

                updateDots();


                /** =========================
                 *  SLIDER 2 - EKSTRAKURIKULER (AUTO SLIDE)
                 *  ========================= */
                const track2 = document.getElementById('track2');
                const dotsWrap2 = document.getElementById('dots2');

                const slides2 = () => Array.from(track2.children);

                // Clone slides untuk efek infinite loop
                slides2().forEach(slide => {
                    const clone = slide.cloneNode(true);
                    track2.appendChild(clone);
                });

                let scrollAmount = 0;
                let speed = 1; // pixel per frame

                function autoScroll() {
                    scrollAmount += speed;
                    if (scrollAmount >= track2.scrollWidth / 2) {
                        // reset ke awal setelah setengah track (karena clone)
                        scrollAmount = 0;
                    }
                    track2.scrollLeft = scrollAmount;
                    requestAnimationFrame(autoScroll);
                }

                // Mulai auto scroll
                autoScroll();

                // Update dots untuk slider 2
                function updateDots2() {
                    dotsWrap2.innerHTML = "";
                    const pageCount = slides2().length / 2; // Dibagi 2 karena ada clone

                    for (let i = 0; i < pageCount; i++) {
                        const dot = document.createElement("button");
                        dot.className =
                            "size-2.5 sm:size-3 rounded-full bg-slate-300 data-[active=true]:bg-primary transition";
                        dot.dataset.index = i;

                        dot.addEventListener("click", () => {
                            const cardWidth = getCardWidth2();
                            track2.scrollTo({
                                left: i * cardWidth,
                                behavior: "smooth"
                            });
                        });

                        dotsWrap2.appendChild(dot);
                    }

                    setActiveDot2();
                }

                function setActiveDot2() {
                    const pageCount = slides2().length / 2; // Dibagi 2 karena ada clone
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

                const getCardWidth2 = () => {
                    if (slides2().length === 0) return 0;
                    const slide = slides2()[0];
                    const slideWidth = slide.getBoundingClientRect().width;
                    const style = window.getComputedStyle(track2);
                    const gap = parseInt(style.gap) || 0;
                    return slideWidth + gap;
                };

                // Update dots saat resize
                window.addEventListener("resize", () => setTimeout(updateDots2, 200));
                track2.addEventListener("scroll", () => setTimeout(setActiveDot2, 50), {
                    passive: true
                });

                updateDots2();


                /** =========================
                 *  FORM KONTAK
                 *  ========================= */
                const form = document.querySelector('form');
                form.addEventListener('submit', function(e) {
                    e.preventDefault();
                    const name = document.getElementById('name').value;
                    const email = document.getElementById('email').value;
                    const phone = document.getElementById('phone').value;
                    const message = document.getElementById('message').value;

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
                        `fixed top-4 right-4 px-6 py-3 rounded-lg shadow-lg text-white ${
                type === 'success' ? 'bg-green-500' : 'bg-red-500'
            } transform transition-transform duration-300 translate-x-full`;
                    notification.textContent = message;
                    document.body.appendChild(notification);
                    setTimeout(() => notification.classList.remove('translate-x-full'), 10);
                    setTimeout(() => {
                        notification.classList.add('translate-x-full');
                        setTimeout(() => document.body.removeChild(notification), 300);
                    }, 3000);
                }


                /** =========================
                 *  TRACER STUDY CHART
                 *  ========================= */
                const tracerCtx = document.getElementById('tracerChart')?.getContext('2d');
                if (tracerCtx) {
                    new Chart(tracerCtx, {
                        type: 'pie',
                        data: {
                            labels: ['Siswa Bekerja', 'Siswa Melanjutkan', 'Siswa Wirausaha'],
                            datasets: [{
                                data: [45, 35, 20],
                                backgroundColor: ['#3C71F8', '#4ADE80', '#FACC15'],
                                borderWidth: 1
                            }]
                        },
                        options: {
                            responsive: true,
                            plugins: {
                                legend: {
                                    position: 'bottom',
                                    labels: {
                                        color: '#374151',
                                        font: {
                                            size: 14
                                        }
                                    }
                                }
                            }
                        }
                    });
                }
            });
        </script>

    @endsection
