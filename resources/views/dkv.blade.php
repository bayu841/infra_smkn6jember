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
            background: linear-gradient(to right, #4C4C50, #2A292D);
            transition: all 0.3s ease;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(76, 76, 80, 0.3);
        }

        .brand {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto;
            padding: 15px 20px;
            background-color: rgb(255, 255, 255);
            width: 90%;
            max-width: 900px;
            margin-top: -3rem;
            border-radius: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            height: auto;
            min-height: 12vh;
        }

        .brand img {
            width: 100%;
            max-width: 1500px;
            height: auto;
        }

        .about {
            margin: 3rem auto;
            padding: 0 1rem;
        }

        .profile-a {
            border-radius: 60px 0px 0px 0px;
        }

        .card {
            background-color: #2A292D;
            width: 100%;
            max-width: 300px;
            height: 40vh;
            min-height: 250px;
            border-radius: 20px;
            margin: 2rem auto;
        }

        .card-1 {
            background-color: #EFEFEF;
            width: 100%;
            max-width: 300px;
            height: 40vh;
            min-height: 250px;
            border-radius: 20px;
            margin: 2rem auto;
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
        }

        .card-profile {
            margin: 2rem auto 0;
        }

        .title-box {
            background: linear-gradient(to right, #4C4C50, #2A292D);
        }

        .fasility {
            background-image: url('image/dkv/fasdkv.png');
            min-height: 100vh;
            background-size: cover;
            background-position: center;
        }

        .cta {
            background-image: url('image/dkv/ctadkv.png');
            min-height: 110vh;
            background-color: #EFEFEF;
            background-size: cover;
            background-position: center;
        }

        .cta-btn {
            margin: 0 auto;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 5px;
            gap: 10px;
            flex-wrap: wrap;
        }

        .btn1 {
            color: #ffffff;
            padding: 10px 20px;
            background: linear-gradient(to right, #4C4C50, #2A292D);
            border-radius: 5px;
            font-weight: bold;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn1:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(76, 76, 80, 0.3);
        }

        .btn2 {
            color: #2A292D;
            padding: 10px 20px;
            background-color: #ffffff;
            border-radius: 5px;
            font-weight: bold;
            box-shadow: 0px 0px 1px 1px rgba(48, 48, 49, 0.986);
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn2:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(42, 41, 45, 0.3);
        }

        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        @media (max-width: 768px) {
            .card, .card-1 {
                height: 35vh;
                min-height: 200px;
                margin: 1rem auto;
            }

            .card-profile {
                margin: 2rem auto 0;
            }

            .brand {
                margin-top: -2rem;
                padding: 15px;
            }
        }
    </style>

    <section class="h-screen bg-cover bg-center flex items-center justify-center text-black px-6 md:px-0"
        style="background-image: url('image/dkv/herodkv.png'); width:100%; height:110vh;">

        <!-- Konten -->
        <div class="flex-1 mb-10 md:mb-0 md:ml-40 text-center md:text-left">
            <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-5 leading-snug">
                Selamat Datang <br class="hidden sm:block">
                di DKV SMKN 6 Jember
            </h1>

            <p class="text-base sm:text-lg md:text-xl mb-7">
                SMK Bisa, SMK Hebat, <br class="hidden sm:block">
                SMK Negeri 6 Jember, Berenergi untuk Bisa Hebat
            </p>

            <a href="#about"
               class="inline-block bg-gradient-to-r from-[#4C4C50] to-[#2A292D] text-white font-semibold py-3 px-6 rounded-md shadow-md transition duration-300 hover:brightness-110 hover:shadow-lg">
               Jelajahi Jurusan
            </a>
        </div>
    </section>

    <div class="brand flex justify-center items-center mx-auto -mt-12 p-2 bg-white rounded-2xl shadow-md w-11/12 max-w-[900px]">
        <img src="{{ asset('image/logooo.png') }}" alt="Logo" class="w-full h-auto object-contain">
    </div>

    <section class="about" id="about">
        <div class="flex flex-col md:flex-row items-start md:items-center justify-between px-6 md:px-12 py-10 gap-8 md:gap-12">

            <!-- Bagian kiri (teks) -->
            <div class="md:w-1/2 space-y-4">
                <p class="text-gray-700 font-semibold text-sm">Profil Jurusan</p>
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold">Tentang Jurusan</h2>
                <p class="text-gray-700 text-base md:text-lg leading-relaxed">
                    Jurusan Desain Komunikasi Visual (DKV) di SMKN
                    6 Jember membekali siswa keterampilan desain
                    grafis, fotografi, animasi, serta produksi
                    multimedia. Lulusan siap berkarya di industri
                    kreatif atau melanjutkan studi.
                </p>
                <a href="https://youtu.be/jWgnncTqFzc?si=iP9g0GhBx-Ph-Okh"
                   class="inline-block bg-gradient-to-r from-[#4C4C50] to-[#2A292D] text-white text-sm px-6 py-3 rounded-md shadow-md transition duration-300 hover:brightness-110">
                    Tonton Video Profil
                </a>
            </div>

            <!-- Bagian kanan (ilustrasi kotak) -->
            <div class="relative w-full max-w-sm md:w-96 h-96 flex-shrink-0 mt-8 md:mt-0">

                <!-- Card Utama - Diperbaiki agar tidak gepeng -->
                <div class="bg-gray-300 w-full h-full rounded-bl-2xl rounded-tr-2xl overflow-hidden relative bg-cover bg-center shadow-lg"
                    style="background-image: url('{{ asset('image/dkv/guru1.png') }}'); background-size: cover; background-position: center;">
                    <!-- Label bawah -->
                    <div
                        class="absolute bottom-0 left-0 bg-gradient-to-r from-[#4C4C50] to-[#2A292D] text-white text-base font-bold px-6 py-3 rounded-tr-lg">
                        Ketua Jurusan DKV
                    </div>
                </div>

                <!-- Kotak abu-abu kanan atas -->
                <div class="absolute top-4 -right-4 bg-[#585858] w-20 h-24 rounded-lg shadow-md"></div>

                <!-- Lingkaran dekorasi kanan -->
                <div class="absolute top-1/3 -right-6 flex flex-col gap-3">
                    <span class="w-4 h-4 bg-blue-300 rounded-full shadow"></span>
                    <span class="w-4 h-4 bg-blue-300 rounded-full shadow"></span>
                    <span class="w-4 h-4 bg-blue-300 rounded-full shadow"></span>
                    <span class="w-4 h-4 bg-blue-300 rounded-full shadow"></span>
                    <span class="w-4 h-4 bg-blue-300 rounded-full shadow"></span>
                </div>

                <!-- Lingkaran dekorasi bawah -->
                <div class="absolute -bottom-6 right-8 flex gap-3">
                    <span class="w-4 h-4 bg-blue-300 rounded-full shadow"></span>
                    <span class="w-4 h-4 bg-blue-300 rounded-full shadow"></span>
                    <span class="w-4 h-4 bg-blue-300 rounded-full shadow"></span>
                    <span class="w-4 h-4 bg-blue-300 rounded-full shadow"></span>
                </div>
            </div>
        </div>
    </section>

    <br><br>
    <section class="max-w-6xl mx-auto px-6 py-12 grid md:grid-cols-2 gap-8 items-start md:items-center">

        <!-- Kiri: Card -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-4xl">

            <!-- Card 1 -->
            <div class="relative bg-gradient-to-r from-[#4C4C50] to-[#2A292D] text-white rounded-xl p-6 shadow-md h-[36vh] min-h-[200px]">
                <div class="absolute -top-6 left-6 w-20 h-20 rounded-full bg-white flex items-center justify-center shadow">
                    <img src="{{ asset('image/dkv/benefit1 (1).png') }}" alt="icon" class="w-12 h-12 object-contain">
                </div>
                <h3 class="font-bold text-lg mt-12">Peluang Karir Luas</h3>
                <p class="mt-2 text-sm">Lulusan siap bersaing di berbagai bidang industri kreatif dan komunikasi visual.</p>
            </div>

            <!-- Card 2 -->
            <div class="relative bg-white rounded-xl p-6 shadow-md mt-7 h-[36vh] min-h-[200px]">
                <div class="absolute -top-6 left-6 w-20 h-20 rounded-full bg-white flex items-center justify-center shadow">
                    <img src="{{ asset('image/dkv/benefit1 (4).png') }}" alt="icon" class="w-12 h-12 object-contain">
                </div>
                <h3 class="font-bold text-lg text-blue-900 mt-12">Mengasah Kreativitas</h3>
                <p class="mt-2 text-sm text-gray-600">Melatih kemampuan berpikir kreatif, inovatif, dan problem solving visual.</p>
            </div>

            <!-- Card 3 -->
            <div class="relative bg-white rounded-xl p-6 shadow-md mt-5 h-[35vh] min-h-[200px]" style="margin-top:-1rem;">
                <div class="absolute -top-6 left-6 w-20 h-20 rounded-full bg-white flex items-center justify-center shadow">
                    <img src="{{ asset('image/dkv/benefit1 (3).png') }}" alt="icon" class="w-12 h-12 object-contain">
                </div>
                <h3 class="font-bold text-lg text-blue-900 mt-12">Skill Yang Relevan</h3>
                <p class="mt-2 text-sm text-gray-600">Menguasai berbagai teknik desain yang dibutuhkan di industri kreatif modern.</p>
            </div>

            <!-- Card 4 -->
            <div class="relative bg-white rounded-xl p-6 shadow-md mt-10 h-[33vh] min-h-[200px]">
                <div class="absolute -top-6 left-6 w-20 h-20 rounded-full bg-white flex items-center justify-center shadow">
                    <img src="{{ asset('image/dkv/benefit1 (2).png') }}" alt="icon" class="w-12 h-12 object-contain">
                </div>
                <h3 class="font-bold text-lg text-blue-900 mt-12">Menguasai Software Desain</h3>
                <p class="mt-2 text-sm text-gray-600">Terampil menggunakan software desain profesional seperti Photoshop, CorelDraw, dan lainnya.</p>
            </div>

        </div>

        <!-- Kanan: Deskripsi -->
        <div class="mt-10 md:mt-0">
            <div class="content-teks ml-0 md:ml-8">
                <h2 class="text-2xl md:text-3xl font-bold mb-4">Benefit yang didapat</h2>
                <p class="text-gray-600 mb-6 text-base md:text-lg">
                    Jurusan DKV memberikan manfaat berupa
                    pengembangan kreativitas, penguasaan software
                    desain profesional, kesempatan karir yang luas
                    di industri kreatif, serta portofolio berkualitas
                    sebagai bekal melanjutkan studi maupun
                    memasuki dunia kerja.
                </p>
            </div>
        </div>
    </section>

    <br><br>
    <section class="fasility bg-slate-900 px-6 md:px-10 py-20" style="padding-top: 9rem;">
        <!-- Desktop: tetap utuh -->
        <div class="hidden lg:flex flex-col lg:flex-row items-start gap-10">

            <!-- Teks -->
            <div class="lg:w-1/3 ml-5" style="margin-top: 6rem;">
                <h2 class="text-white text-3xl font-bold mb-4">Fasilitas Jurusan</h2>
                <p class="text-white leading-relaxed">
                    Fasilitas lengkap dengan <br>
                    studio desain modern dan <br>
                    perangkat terkini, mendukung <br>
                    pembelajaran desain grafis, <br>
                    fotografi, dan multimedia.
                </p>
            </div>

            <!-- Slider - Diperbaiki agar tidak gepeng -->
            <div class="relative lg:w-2/3" style="margin-top:-2rem;">
                <!-- Tombol -->
                <button id="prevBtn"
                    class="absolute left-4 top-1/2 -translate-y-1/2 z-20 grid place-items-center w-12 h-12 rounded-full bg-white/90 shadow hover:bg-white transition-all">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-slate-800" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor">
                        <path d="M15 18l-6-6 6-6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
                <button id="nextBtn"
                    class="absolute right-4 top-1/2 -translate-y-1/2 z-20 grid place-items-center w-12 h-12 rounded-full bg-white/90 shadow hover:bg-white transition-all">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-slate-800" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor">
                        <path d="M9 6l6 6-6 6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>

                <!-- Track -->
                <div id="track"
                    class="flex gap-6 px-2 py-4 overflow-x-auto snap-x snap-mandatory scroll-smooth no-scrollbar">

                    <!-- Slide 1 - Diperbaiki proporsinya -->
                    <div class="shrink-0 w-[90%] lg:w-[85%] snap-start">
                        <div class="grid grid-cols-2 gap-4 h-[400px]">
                            <figure class="relative col-span-2 sm:col-span-1 rounded-2xl overflow-hidden shadow-lg h-full">
                                <img class="w-full h-full object-cover"
                                    src="{{ asset('image/dkv/fas1.png') }}">
                                <figcaption class="absolute left-4 top-4">
                                    <span
                                        class="inline-flex rounded-e-2xl rounded-s-xl bg-gradient-to-r from-[#4C4C50] to-[#2A292D] text-white font-semibold px-4 py-2 shadow">
                                        Lab DKV
                                    </span>
                                </figcaption>
                            </figure>
                            <figure class="relative col-span-2 sm:col-span-1 rounded-2xl overflow-hidden shadow-lg h-full">
                                <img class="w-full h-full object-cover"
                                    src="{{ asset('image/dkv/fas2.png') }}" />
                                <figcaption class="absolute left-4 top-4">
                                    <span
                                        class="inline-flex rounded-e-2xl rounded-s-xl bg-gradient-to-r from-[#4C4C50] to-[#2A292D] text-white font-semibold px-4 py-2 shadow">
                                        Studio Fotografi
                                    </span>
                                </figcaption>
                            </figure>
                        </div>
                    </div>

                    <!-- Slide 2 - Diperbaiki proporsinya -->
                    <div class="shrink-0 w-[90%] lg:w-[85%] snap-start">
                        <div class="grid grid-cols-2 gap-4 h-[400px]">
                            <figure class="relative col-span-2 sm:col-span-1 rounded-2xl overflow-hidden shadow-lg h-full">
                                <img class="w-full h-full object-cover" src="{{ asset('image/dkv/fas3.jpg') }}"
                                    style="height:100%;">
                                <figcaption class="absolute left-4 top-4">
                                    <span
                                        class="inline-flex rounded-e-2xl rounded-s-xl bg-gradient-to-r from-[#4C4C50] to-[#2A292D] text-white font-semibold px-4 py-2 shadow">
                                        Ruang Editing
                                    </span>
                                </figcaption>
                            </figure>
                            <figure class="relative col-span-2 sm:col-span-1 rounded-2xl overflow-hidden shadow-lg h-full">
                                <img class="w-full h-full object-cover" src="{{ asset('image/dkv/fas4.jpg') }}"
                                    style="height:100%;">
                                <figcaption class="absolute left-4 top-4">
                                    <span
                                        class="inline-flex rounded-e-2xl rounded-s-xl bg-gradient-to-r from-[#4C4C50] to-[#2A292D] text-white font-semibold px-4 py-2 shadow">
                                        Galeri Karya
                                    </span>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- Mobile-only slider - Diperbaiki agar tidak gepeng -->
    <div class="lg:hidden px-4 py-8">

        <!-- Teks -->
        <div class="mb-8 text-center">
            <h2 class="text-white text-3xl font-bold mb-4">Fasilitas Jurusan</h2>
            <p class="text-white leading-relaxed">
                Fasilitas lengkap dengan studio desain modern dan
                perangkat terkini, mendukung pembelajaran desain grafis,
                fotografi, dan multimedia.
            </p>
        </div>

        <!-- Slider horizontal -->
        <div class="relative">
            <!-- Tombol mobile -->
            <button id="mobilePrevBtn"
                class="absolute left-2 top-1/2 -translate-y-1/2 z-20 grid place-items-center w-10 h-10 rounded-full bg-white/90 shadow hover:bg-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-slate-800" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor">
                    <path d="M15 18l-6-6 6-6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
            <button id="mobileNextBtn"
                class="absolute right-2 top-1/2 -translate-y-1/2 z-20 grid place-items-center w-10 h-10 rounded-full bg-white/90 shadow hover:bg-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-slate-800" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor">
                    <path d="M9 6l6 6-6 6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>

            <div id="mobileTrack" class="flex gap-4 overflow-x-auto snap-x snap-mandatory scroll-smooth no-scrollbar px-12">

                <!-- Slide 1 Mobile -->
                <div class="shrink-0 w-[85%] snap-start">
                    <div class="flex flex-col gap-4">
                        <figure class="relative rounded-2xl overflow-hidden shadow-lg h-64">
                            <img src="{{ asset('image/dkv/fas1.png') }}" class="w-full h-full object-cover">
                            <figcaption class="absolute left-4 top-4 bg-gradient-to-r from-[#4C4C50] to-[#2A292D] text-white font-semibold px-3 py-2 rounded shadow">
                                Lab DKV
                            </figcaption>
                        </figure>
                        <figure class="relative rounded-2xl overflow-hidden shadow-lg h-64">
                            <img src="{{ asset('image/dkv/fas2.png') }}" class="w-full h-full object-cover">
                            <figcaption class="absolute left-4 top-4 bg-gradient-to-r from-[#4C4C50] to-[#2A292D] text-white font-semibold px-3 py-2 rounded shadow">
                                Studio Fotografi
                            </figcaption>
                        </figure>
                    </div>
                </div>

                <!-- Slide 2 Mobile -->
                <div class="shrink-0 w-[85%] snap-start">
                    <div class="flex flex-col gap-4">
                        <figure class="relative rounded-2xl overflow-hidden shadow-lg h-64">
                            <img src="{{ asset('image/dkv/fas3.jpg') }}" class="w-full h-full object-cover">
                            <figcaption class="absolute left-4 top-4 bg-gradient-to-r from-[#4C4C50] to-[#2A292D] text-white font-semibold px-3 py-2 rounded shadow">
                                Ruang Editing
                            </figcaption>
                        </figure>
                        <figure class="relative rounded-2xl overflow-hidden shadow-lg h-64">
                            <img src="{{ asset('image/dkv/fas4.jpg') }}" class="w-full h-full object-cover">
                            <figcaption class="absolute left-4 top-4 bg-gradient-to-r from-[#4C4C50] to-[#2A292D] text-white font-semibold px-3 py-2 rounded shadow">
                                Galeri Karya
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>

        <!-- Dots slider mobile -->
        <div class="flex items-center justify-center gap-2 pt-6">
            <span class="w-3 h-3 rounded-full bg-white"></span>
            <span class="w-3 h-3 rounded-full bg-white/50"></span>
        </div>
    </div>
    </section>

    <section class="bg-[#f5f5f5] py-20">
        <div class="max-w-7xl mx-auto flex flex-col lg:flex-row items-center justify-between gap-14 px-6">

            <!-- BAGIAN KIRI -->
            <div class="relative flex justify-center lg:w-1/2">
                <!-- Gambar utama -->
                <div class="relative">
                    <img src="{{ asset('image/dkv/gambar-timsatu.png') }}"
                        class="rounded-3xl w-full max-w-[360px] h-[440px] object-cover shadow-xl" alt="main">

                    <!-- Gambar kiri atas -->
                    <img src="{{asset('image/dkv/kiriatas.png')}}"
                        class="absolute -top-10 -left-12 w-[160px] h-[180px] rounded-2xl object-cover border-[6px] border-[#f5f5f5] shadow-lg"
                        alt="top">

                    <!-- Gambar kanan bawah -->
                    <img src="{{ asset('image/dkv/timsatu.png') }}"
                        class="absolute -bottom-10 -right-10 w-[200px] h-[150px] object-cover shadow-lg z-20"
                        alt="bottom">

                    <!-- Kotak abu-abu -->
                    <div
                        class="absolute -bottom-16 left-0 bg-gradient-to-r from-[#4C4C50] to-[#2A292D] rounded-[20px] px-6 py-5 flex items-center gap-3 shadow-lg w-full max-w-96 z-10">
                        <div class="bg-white rounded p-3 z-10">
                            <img src="{{ asset('image/dkv/frame.png') }}" alt="Icon" class="w-7 h-8">
                        </div>
                        <div>
                            <h3 class="text-white font-extrabold text-xl leading-none">1.000+</h3>
                            <p class="text-white text-sm mt-1">Siswa Unggul</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- BAGIAN KANAN -->
            <div class="lg:w-1/2 space-y-7 mt-12 lg:mt-0">
                <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 leading-tight">
                    Tim Satu
                </h2>
                <p class="text-gray-700 leading-relaxed text-base md:text-[16px]">
                    Tim Satu Jurusan Desain Komunikasi Visual SMKN 6 Jember merupakan organisasi yang mewadahi siswa
                    berbakat dalam seni, desain, dan komunikasi visual. Melalui kegiatan seperti lomba poster digital,
                    pameran karya, fotografi kreatif, dan workshop desain, tim ini menjadi ruang inspiratif untuk mencetak
                    generasi desainer muda yang inovatif, kolaboratif, dan berprestasi.
                </p>

                <div class="space-y-4">
                    <div
                        class="flex items-start bg-white rounded-2xl border border-gray-200 shadow-sm p-5 gap-4 hover:shadow-md transition">
                        <div class="bg-gradient-to-r from-[#4C4C50] to-[#2A292D] text-white p-3 rounded-full">
                            <div class="w-5 h-5">
                                <img src="{{ asset('image/dkv/icon1.png') }}" alt="Bag Icon"
                                    class="w-full h-full object-contain">
                            </div>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Workshop Desain Grafis</h4>
                            <p class="text-gray-500 text-sm">Pelatihan intensif untuk menguasai software desain profesional dan teknik kreatif.</p>
                        </div>
                    </div>

                    <div
                        class="flex items-start bg-white rounded-2xl border border-gray-200 shadow-sm p-5 gap-4 hover:shadow-md transition">
                        <div class="bg-gradient-to-r from-[#4C4C50] to-[#2A292D] text-white p-3 rounded-full">
                            <div class="w-5 h-5">
                                <img src="{{ asset('image/dkv/icon2.png') }}" alt="Bag Icon"
                                    class="w-full h-full object-contain">
                            </div>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Pameran Karya Seni</h4>
                            <p class="text-gray-500 text-sm">Ajang showcase karya terbaik siswa DKV untuk mengasah kemampuan presentasi dan apresiasi seni.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <br><br>
    <section class="performance">
        <h2 class="font-bold text-center text-2xl md:text-3xl mb-6 mt-16">Galeri Dan Prestasi</h2>

        <!-- Grid -->
        <section class="grid grid-cols-1 md:grid-cols-2 gap-6 px-4 md:px-8 max-w-7xl mx-auto">
            <!-- Card 1 -->
            <div class="relative rounded-xl shadow overflow-hidden w-full aspect-[4/3] group">
                <img src="{{ asset('image/dkv/pres1.png') }}" alt="Prestasi 1" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    <p class="text-white font-semibold text-center px-4">Juara Lomba Desain Poster Nasional</p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="relative rounded-xl shadow overflow-hidden w-full aspect-[4/3] group">
                <img src="{{ asset('image/dkv/pres2.png') }}" alt="Prestasi 2" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    <p class="text-white font-semibold text-center px-4">Best Photography Award</p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="relative rounded-xl shadow overflow-hidden w-full aspect-[4/3] group">
                <img src="{{ asset('image/dkv/pres3.png') }}" alt="Prestasi 3" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    <p class="text-white font-semibold text-center px-4">Kompetisi Animasi Digital</p>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="relative rounded-xl shadow overflow-hidden w-full aspect-[4/3] group">
                <img src="{{ asset('image/dkv/pres4.png') }}" alt="Prestasi 4" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    <p class="text-white font-semibold text-center px-4">Exhibition Design Excellence</p>
                </div>
            </div>
        </section>
    </section>

    <br><br><br><br>

    <section class="cta mt-8 py-20">
        <div class="text-center px-6">
            <h2 class="text-white text-2xl md:text-3xl font-bold mb-8 leading-relaxed">
                Bersama kami, wujudkan masa depanmu! <br class="hidden md:block">
                Bergabunglah dengan Jurusan kami dan raih <br class="hidden md:block">
                peluang terbaik untuk karier gemilang.
            </h2>
            <div class="cta-btn">
                <a href="https://www.instagram.com/dkvsmkn6jember/" class="btn1 text-lg px-8 py-3">Selengkapnya</a>
                <a href="/home" class="btn2 text-lg px-8 py-3">Lihat Lainnya</a>
            </div>
        </div>
    </section>

    <script>
        // Slider Desktop
        const track = document.getElementById('track');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');

        if (track && prevBtn && nextBtn) {
            nextBtn.addEventListener('click', () => {
                track.scrollBy({ left: track.offsetWidth, behavior: 'smooth' });
            });

            prevBtn.addEventListener('click', () => {
                track.scrollBy({ left: -track.offsetWidth, behavior: 'smooth' });
            });
        }

        // Slider Mobile
        const mobileTrack = document.getElementById('mobileTrack');
        const mobilePrevBtn = document.getElementById('mobilePrevBtn');
        const mobileNextBtn = document.getElementById('mobileNextBtn');

        if (mobileTrack && mobilePrevBtn && mobileNextBtn) {
            mobileNextBtn.addEventListener('click', () => {
                mobileTrack.scrollBy({ left: mobileTrack.offsetWidth, behavior: 'smooth' });
            });

            mobilePrevBtn.addEventListener('click', () => {
                mobileTrack.scrollBy({ left: -mobileTrack.offsetWidth, behavior: 'smooth' });
            });
        }
    </script>
@endsection
