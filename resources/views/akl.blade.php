@extends('layouts.app')
@section('title', 'Home')

@section('content')
    <style>
        body {
            background-color: #fdfdfd;
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }

        .btn {
            padding: 12px 20px;
            color: white;
            font-weight: bold;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            background: linear-gradient(to right, #319F2C, #127E32);
        }

        /* BRAND SECTION */
        .brand {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto;
            padding: 10px 10px;
            background-color: #fff;
            max-width: 900px;
            width: 90%;
            margin-top: -3rem;
            border-radius: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            height: auto;
        }

        .brand img {
            width: 100%;
            max-width: 600px;
            height: auto;
        }

        .about {
            margin-left: 6rem;
            margin-top: 3rem;
        }

        .profile-a {
            border-radius: 60px 0px 0px 0px;
        }

        /* CARD */
        .card,
        .card-1 {
            width: 300px;
            height: auto;
            min-height: 40vh;
            border-radius: 20px;
            margin: 2rem auto;
            padding: 1rem;
        }

        .card {
            background-color: #319F2C;
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

        /* RED BOX */
        .red-box {
            margin-top: -2rem;
            height: 15vh;
            background-color: #319F2C;
        }

        /* PROFILE */
        .card-profile {
            margin-right: 8rem;
        }

        /* TITLE BOX */
        .title-box {
            background: linear-gradient(to right, #319F2C, #127E32);
        }

        /* FASILITAS DAN CTA */
        .fasility {
            background-image: url('image/akl/fasakl.png');
            background-size: cover;
            background-position: center;
            height: 100vh;
        }

        .cta {
            background-image: url('image/akl/ctaakl.png');
            height: auto;
            min-height: 110vh;
            background-color: #EFEFEF;
            background-size: cover;
            background-position: center;
        }

        .cta-btn {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 10px auto;
            gap: 10px;
            flex-wrap: wrap;
        }

        .btn1 {
            color: #ffffff;
            padding: 10px 10px;
            background: linear-gradient(to right, #319F2C, #127E32);
            border-radius: 5px;
            font-weight: bold;
        }

        .btn2 {
            color: #319F2C;
            padding: 10px 10px;
            background-color: #ffffff;
            border-radius: 5px;
            font-weight: bold;
            box-shadow: 0px 0px 1px 1px rgba(9, 201, 35, 0.986);
        }

        /* HILANGKAN SCROLLBAR */
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        /* ========================= */
        /*        RESPONSIVE         */
        /* ========================= */
        @media (max-width: 992px) {
            .about {
                margin-left: 2rem;
                margin-top: 2rem;
            }

            .card,
            .card-1 {
                width: 80%;
            }

            .brand img {
                max-width: 400px;
            }
        }

        @media (max-width: 768px) {
            .brand {
                flex-direction: column;
                padding: 20px;
                width: 95%;
                margin-top: -1rem;
            }

            .brand img {
                max-width: 300px;
            }

            .about {
                margin-left: 1rem;
                margin-top: 1.5rem;
            }

            .card,
            .card-1 {
                width: 90%;
                margin-left: auto;
                margin-right: auto;
            }

            .cta {
                min-height: 80vh;
            }
        }

        @media (max-width: 480px) {

            .btn,
            .btn1,
            .btn2 {
                padding: 8px 12px;
                font-size: 14px;
            }

            .brand img {
                max-width: 250px;
            }

            .card p,
            .card-1 p {
                padding: 12px;
                padding-top: 3rem;
                font-size: 14px;
            }

            .red-box {
                height: 10vh;
            }

            .cta-btn {
                flex-direction: column;
                gap: 8px;
            }
        }
    </style>
    <section class="relative flex items-center text-black bg-cover bg-left min-h-screen"
        style="background-image: url('image/akl/heroakl.png'); background-position: left;">

        <div class="relative z-10 w-full max-w-6xl px-6 md:px-16 lg:px-24">
            <div class="flex flex-col justify-center text-left max-w-lg space-y-5 py-24">
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold leading-tight">
                    Selamat Datang <br>
                    di AKL SMKN 6 Jember
                </h1>

                <p class="text-base sm:text-lg lg:text-xl">
                    SMK Bisa, SMK Hebat,<br>
                    SMK Negeri 6 Jember, Berenergi untuk Bisa Hebat
                </p>

                <a href="#" class="inline-block w-fit px-6 py-3 font-bold text-white rounded-md transition duration-300"
                    style="background: linear-gradient(to right, #319F2C, #127E32);">
                    Daftar Sekarang
                </a>
            </div>
        </div>
    </section>

    <div class="brand">
        <img src="{{ asset('image/logooo.png') }}" alt="">
    </div>
    <section class="about">
        <div class="flex flex-col md:flex-row items-start justify-between px-6 md:px-12 py-10 gap-1 ml-10">
            <!-- Bagian kiri (teks) -->
            <div class="md:w-1/2 space-y-1"><br><br>
                <p class="text-green-500 font-semibold text-sm">Profil Jurusan</p>
                <h2 class="text-2xl font-bold">Tentang Jurusan</h2>
                <p class="text-gray-700">
                    Jurusan Akuntansi adalah bidang yang mempelajari <br>
                    pencatatan, pengelolaan, dan pelaporan keuangan. <br>
                    Siswa dilatih menyusun laporan, menghitung transaksi, <br>
                    dan menganalisis data keuangan untuk mendukung <br>
                    pengambilan keputusan bisnis maupun organisasi.
                </p><br>
                <a href="https://www.youtube.com/shorts/wuSu15-Jugk?feature=share"
                    class="bg-red-500 text-white text-sm px-3 py-2 rounded-md btn">
                    Tonton Video Profil
                </a>
            </div>

            <!-- Bagian kanan (ilustrasi kotak) -->

            <div class="relative w-64 h-80 card-profile">
                <!-- Card Utama -->
                <div class="bg-gray-300 w-full h-full rounded-bl-xl overflow-hidden relative bg-cover bg-center"
                    style="background-image: url('{{ asset('') }}')">
                    <!-- Label bawah -->
                    <div
                        class="absolute bottom-0 left-0 bg-green-500 text-white text-sm font-bold px-4 py-2 rounded-tr-lg title-box">
                        Ketua Jurusan AKL
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
    <section class="max-w-6xl mx-auto px-6 py-12 grid md:grid-cols-2 gap-12 items-start">
        <!-- Kiri: Card -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 max-w-4xl mx-auto">
            <!-- Card 1 -->
            <div class="relative bg-green-500 text-white rounded-xl p-6 shadow-md h-[36vh] min-h-[220px]">
                <div class="absolute -top-6 left-6 w-20 h-20 rounded-full bg-white flex items-center justify-center shadow">
                    <img src="{{ asset('image/akl/benefit1 (3).png') }}" alt="icon" class="w-[55px] h-[55px]">
                </div>
                <h3 class="font-bold text-lg mt-12">Peluang Karir Luas</h3>
                <p class="mt-2 text-sm">Kesempatan kerja lebih terbuka dengan skill keuangan yang relevan.</p>
            </div>

            <!-- Card 2 -->
            <div class="relative bg-white rounded-xl p-6 shadow-md h-[36vh] min-h-[220px]">
                <div class="absolute -top-6 left-6 w-20 h-20 rounded-full bg-white flex items-center justify-center shadow">
                    <img src="{{ asset('image/akl/benefit1 (4).png') }}" alt="icon" class="w-[65px] h-[55px]">
                </div>
                <h3 class="font-bold text-lg text-blue-900 mt-12">Mahir Dalam Kelola Keuangan</h3>
                <p class="mt-2 text-sm text-gray-600">Belajar cara mengatur keuangan dengan cerdas dan profesional.</p>
            </div>

            <!-- Card 3 -->
            <div class="relative bg-white rounded-xl p-6 shadow-md h-[35vh] min-h-[220px]">
                <div class="absolute -top-6 left-6 w-20 h-20 rounded-full bg-white flex items-center justify-center shadow">
                    <img src="{{ asset('image/akl/benefit1 (1).png') }}" alt="icon" class="w-[64px] h-[55px]">
                </div>
                <h3 class="font-bold text-lg text-blue-900 mt-12">Bekal Untuk Kuliah</h3>
                <p class="mt-2 text-sm text-gray-600">Ilmu yang didapat bisa jadi dasar kuat untuk studi lanjut.</p>
            </div>

            <!-- Card 4 -->
            <div class="relative bg-white rounded-xl p-6 shadow-md h-[33vh] min-h-[220px]">
                <div class="absolute -top-6 left-6 w-20 h-20 rounded-full bg-white flex items-center justify-center shadow">
                    <img src="{{ asset('image/akl/benefit1 (2).png') }}" alt="icon" class="w-[60px] h-[55px]">
                </div>
                <h3 class="font-bold text-lg text-blue-900 mt-12">Terlatih Berfikir Analitis</h3>
                <p class="mt-2 text-sm text-gray-600">Asah kemampuan analisis supaya makin kritis dan terstruktur.</p>
            </div>
        </div>

        <!-- Kanan: Deskripsi -->
        <div class="flex flex-col justify-center md:ml-8 text-center md:text-left mt-10 md:mt-0">
            <h2 class="text-2xl font-bold mb-4 md:mt-[-3rem]">Benefit yang didapat</h2>
            <p class="text-gray-600 mb-6 text-sm sm:text-base leading-relaxed">
                Dengan belajar di sini, kamu nggak cuma dapat ilmu, tapi juga skill penting untuk masa depan.
                Mulai dari peluang karir yang luas, kemampuan mengelola keuangan, bekal kuat untuk kuliah,
                sampai terbiasa berpikir analitis. Semua dirancang agar kamu siap menghadapi dunia nyata
                dengan percaya diri.
            </p>
            <button
                class="bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded-lg w-fit mx-auto md:mx-0 font-semibold transition">
                Selengkapnya
            </button>
        </div>
    </section>

    <section class="fasility bg-slate-900 px-6 sm:px-10 py-20 lg:py-28">
        <div class="flex flex-col lg:flex-row items-start lg:items-center gap-10 lg:gap-16 max-w-7xl mx-auto">

            <!-- TEKS -->
            <div class="lg:w-1/3 lg:pl-5 space-y-4 text-left mt-16 sm:mt-14 lg:mt-0">
                <h2 class="text-white text-3xl sm:text-4xl font-bold">Fasilitas Jurusan</h2>
                <p class="text-white/90 leading-relaxed text-base sm:text-lg">
                    Fasilitas lengkap dengan <br>
                    laboratorium akuntansi modern dan <br>
                    software terbaru untuk mendukung teori dan praktik belajar.
                </p>
            </div>

            <!-- SLIDER -->
            <div class="relative w-full lg:w-2/3">
                <!-- Tombol kiri -->
                <button id="prevBtn"
                    class="absolute left-2 sm:left-4 top-1/2 -translate-y-1/2 z-20 grid place-items-center w-10 h-10 rounded-full bg-white/90 shadow hover:bg-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-slate-800" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M15 18l-6-6 6-6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>

                <!-- Tombol kanan -->
                <button id="nextBtn"
                    class="absolute right-2 sm:right-4 top-1/2 -translate-y-1/2 z-20 grid place-items-center w-10 h-10 rounded-full bg-white/90 shadow hover:bg-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-slate-800" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M9 6l6 6-6 6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>

                <!-- Track -->
                <div id="track"
                    class="flex gap-4 px-2 py-4 overflow-x-auto snap-x snap-mandatory scroll-smooth no-scrollbar">

                    <!-- Slide 1 -->
                    <div class="shrink-0 snap-start w-[90%] sm:w-[80%] md:w-[70%] lg:w-[750px]">
                        <figure class="relative rounded-xl overflow-hidden shadow">
                            <img src="{{ asset('image/akl/fas1.png') }}"
                                class="w-full h-56 sm:h-64 md:h-72 lg:h-[50vh] object-cover" />
                            <figcaption class="absolute left-4 top-4">
                                <span
                                    class="inline-flex rounded-e-2xl rounded-s-xl bg-green-600 text-white font-semibold px-4 py-2 shadow">
                                    Lab AKL
                                </span>
                            </figcaption>
                        </figure>
                    </div>

                    <!-- Slide 2 -->
                    <div class="shrink-0 snap-start w-[90%] sm:w-[80%] md:w-[70%] lg:w-[750px]">
                        <figure class="relative rounded-xl overflow-hidden shadow">
                            <img src="{{ asset('image/akl/fas2.png') }}"
                                class="w-full h-56 sm:h-64 md:h-72 lg:h-[50vh] object-cover" />
                            <figcaption class="absolute left-4 top-4">
                                <span
                                    class="inline-flex rounded-e-2xl rounded-s-xl bg-green-600 text-white font-semibold px-4 py-2 shadow">
                                    Lab Komputer
                                </span>
                            </figcaption>
                        </figure>
                    </div>

                    <!-- Slide 3 -->
                    <div class="shrink-0 snap-start w-[90%] sm:w-[80%] md:w-[70%] lg:w-[750px]">
                        <figure class="relative rounded-xl overflow-hidden shadow">
                            <img src="{{ asset('image/akl/fas3.png') }}"
                                class="w-full h-56 sm:h-64 md:h-72 lg:h-[50vh] object-cover" />
                            <figcaption class="absolute left-4 top-4">
                                <span
                                    class="inline-flex rounded-e-2xl rounded-s-xl bg-green-600 text-white font-semibold px-4 py-2 shadow">
                                    Pawon Enem
                                </span>
                            </figcaption>
                        </figure>
                    </div>
                </div>

                <!-- Dots -->
                <div id="dots" class="flex items-center justify-center gap-2 pt-6"></div>
            </div>
        </div>
    </section>

    <section class="bg-[#f5f5f5] py-16 md:py-20">
        <div class="max-w-7xl mx-auto flex flex-col lg:flex-row items-center justify-between gap-16 px-6">

            <!-- BAGIAN KIRI -->
            <div class="relative flex justify-center w-full lg:w-1/2">
                <div class="relative w-full max-w-sm sm:max-w-md">
                    <!-- Gambar utama -->
                    <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?auto=format&fit=crop&w=600&q=80"
                        class="rounded-3xl w-full h-[420px] sm:h-[440px] object-cover shadow-xl" alt="main">

                    <!-- Gambar kiri atas -->
                    <img src="https://images.unsplash.com/photo-1551836022-4c4c79ecde51?auto=format&fit=crop&w=400&q=80"
                        class="absolute -top-8 -left-6 sm:-top-10 sm:-left-12 w-[120px] sm:w-[160px] h-[140px] sm:h-[180px] rounded-2xl object-cover border-[6px] border-[#f5f5f5] shadow-lg"
                        alt="top">

                    <!-- Kotak hijau -->
                    <div
                        class="absolute -bottom-14 left-0 bg-gradient-to-r from-[#319F2C] to-[#127E32] rounded-2xl px-5 py-4 flex items-center gap-3 shadow-lg w-[90%] sm:w-96 z-10">
                        <div class="bg-white rounded p-3">
                            <img src="{{ asset('image/akl/frame.png') }}" alt="Icon" class="w-7 h-8">
                        </div>
                        <div>
                            <h3 class="text-white font-extrabold text-lg sm:text-xl leading-none">1.000+</h3>
                            <p class="text-white text-sm mt-1">Siswa Unggul</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- BAGIAN KANAN -->
            <div class="lg:w-1/2 space-y-7 text-center lg:text-left">
                <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900 leading-tight">
                    Himpunan Siswa <br class="hidden sm:block"> Jurusan Akuntansi
                </h2>

                <p class="text-gray-700 leading-relaxed text-[15px] sm:text-[16px]">
                    Himpunan Siswa Jurusan Akuntansi SMKN 6 Jember merupakan organisasi yang menjadi pusat pengembangan
                    kompetensi, kedisiplinan, dan tanggung jawab siswa di bidang keuangan. Melalui kegiatan seperti
                    olimpiade akuntansi, pelatihan software keuangan, simulasi pembukuan, dan seminar karier, organisasi ini
                    mencetak calon akuntan muda yang profesional, teliti, dan berintegritas tinggi.
                </p>

                <!-- CARD LOWONGAN -->
                <div class="space-y-4">
                    <div
                        class="flex items-start bg-white rounded-2xl border border-gray-200 shadow-sm p-5 gap-4 hover:shadow-md transition">
                        <div
                            class="bg-gradient-to-r from-[#319F2C] to-[#127E32] text-white p-3 rounded-full flex-shrink-0">
                            <div class="w-5 h-5">
                                <img src="{{ asset('image/rpl/bag.png') }}" alt="Bag Icon"
                                    class="w-full h-full object-contain">
                            </div>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Lowongan Kerja Terbaik</h4>
                            <p class="text-gray-500 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor.</p>
                        </div>
                    </div>

                    <div
                        class="flex items-start bg-white rounded-2xl border border-gray-200 shadow-sm p-5 gap-4 hover:shadow-md transition">
                        <div
                            class="bg-gradient-to-r from-[#319F2C] to-[#127E32] text-white p-3 rounded-full flex-shrink-0">
                            <div class="w-5 h-5">
                                <img src="{{ asset('image/rpl/bag.png') }}" alt="Bag Icon"
                                    class="w-full h-full object-contain">
                            </div>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Lowongan Kerja Terbaik</h4>
                            <p class="text-gray-500 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor.</p>
                        </div>
                    </div>
                </div>

                <!-- Tombol -->
                <button class="inline-block mt-4 px-8 py-3 font-bold text-white rounded-md transition duration-300"
                    style="background: linear-gradient(to right, #319F2C, #127E32);">
                    Selengkapnya
                </button>
            </div>
        </div>
    </section>

    <section class="performance">
    <h2 class="font-bold text-center text-2xl mb-6 mt-16">Galeri Dan Prestasi</h2>

    <!-- Grid -->
    <section class="grid grid-cols-1 md:grid-cols-2 gap-6 px-4 md:px-8">
        <!-- Card 1 -->
        <div class="relative group rounded-xl shadow overflow-hidden w-full aspect-[4/3]">
            <img src="{{ asset('image/akl/pres1.png') }}" alt="Prestasi 1" class="w-full h-full object-cover">
            <div
                class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 flex items-center justify-center transition duration-300">
                <p class="text-white font-semibold text-lg">Accounting Competition 2024</p>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="relative group rounded-xl shadow overflow-hidden w-full aspect-[4/3]">
            <img src="{{ asset('image/akl/pres2.png') }}" alt="Prestasi 2" class="w-full h-full object-cover">
            <div
                class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 flex items-center justify-center transition duration-300">
                <p class="text-white font-semibold text-lg">Pemberian Penghargaan Guru</p>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="relative group rounded-xl shadow overflow-hidden w-full aspect-[4/3]">
            <img src="{{ asset('image/akl/pres3.png') }}" alt="Prestasi 3" class="w-full h-full object-cover">
            <div
                class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 flex items-center justify-center transition duration-300">
                <p class="text-white font-semibold text-lg">Kunjungan Industri</p>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="relative group rounded-xl shadow overflow-hidden w-full aspect-[4/3]">
            <img src="{{ asset('image/akl/pres4.png') }}" alt="Prestasi 4" class="w-full h-full object-cover">
            <div
                class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 flex items-center justify-center transition duration-300">
                <p class="text-white font-semibold text-lg">Kegiatan Workshop AKL</p>
            </div>
        </div>

        <!-- Tombol -->
        <div class="col-span-1 md:col-span-2 flex justify-center mt-4">
            <a href="" class="btn w-40 text-center">Selengkapnya</a>
        </div>
    </section>
</section>

    <section
    class="cta relative h-[80vh] flex flex-col justify-center items-center text-center text-white px-4"
    style="background: url('{{ asset('image/akl/pres3.png') }}') center/cover no-repeat;">
    <div class="bg-black bg-opacity-50 absolute inset-0"></div>

    <div class="relative z-10 max-w-2xl">
        <h2 class="text-2xl md:text-3xl font-bold leading-relaxed mb-6">
            Bersama kami, wujudkan masa depanmu! <br>
            Bergabunglah dengan Jurusan kami dan raih <br>
            peluang terbaik untuk karier gemilang.
        </h2>

        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="" class="btn1 px-6 py-3 bg-green-600 hover:bg-green-700 text-white font-semibold rounded-md transition">Daftar Sekarang</a>
            <a href="" class="btn2 px-6 py-3 bg-lime-400 hover:bg-lime-500 text-black font-semibold rounded-md transition">Lihat Lainnya</a>
        </div>
    </div>
</section>


    <script>
        const track = document.getElementById('track');
        const slides = track.children;
        const prev = document.getElementById('prevBtn');
        const next = document.getElementById('nextBtn');
        const dotsContainer = document.getElementById('dots');
        let index = 0;

        // Buat dots
        for (let i = 0; i < slides.length; i++) {
            const dot = document.createElement('button');
            dot.className = 'w-3 h-3 rounded-full bg-white/50 hover:bg-white transition';
            dot.addEventListener('click', () => goToSlide(i));
            dotsContainer.appendChild(dot);
        }

        const dots = dotsContainer.querySelectorAll('button');

        function updateDots() {
            dots.forEach((dot, i) => {
                dot.className = i === index ?
                    'w-3 h-3 rounded-full bg-green-500' :
                    'w-3 h-3 rounded-full bg-white/50 hover:bg-white transition';
            });
        }

        function goToSlide(i) {
            index = (i + slides.length) % slides.length;
            slides[index].scrollIntoView({
                behavior: 'smooth',
                inline: 'center'
            });
            updateDots();
        }

        next.addEventListener('click', () => goToSlide(index + 1));
        prev.addEventListener('click', () => goToSlide(index - 1));

        updateDots();
    </script>
@endsection
