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
            background: linear-gradient(to right, #4D4FF5, #7A44F9);
            transition: all 0.3s ease;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(77, 79, 245, 0.3);
        }

        .brand {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto;
            padding: 10px 20px;
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
            background-color: #4D4FF5;
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
            background: linear-gradient(to right, #4D4FF5, #7A44F9);
        }

        .fasility {
            background-image: url('image/mp/fasmp.png');
            min-height: 100vh;
            background-size: cover;
            background-position: center;
        }

        .cta {
            background-image: url('image/mp/ctamp.png');
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
            background: linear-gradient(to right, #4D4FF5, #7A44F9);
            border-radius: 5px;
            font-weight: bold;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn1:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(77, 79, 245, 0.3);
        }

        .btn2 {
            color: #4D4FF5;
            padding: 10px 20px;
            background-color: #ffffff;
            border-radius: 5px;
            font-weight: bold;
            box-shadow: 0px 0px 1px 1px rgba(51, 47, 233, 0.986);
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn2:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(77, 79, 245, 0.3);
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
        style="background-image: url('image/mp/heromp.png'); width:100%; height:110vh;">

        <!-- Konten -->
        <div class="flex-1 mb-10 md:mb-0 md:ml-40 text-center md:text-left">
            <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-5 leading-snug">
                Selamat Datang <br class="hidden sm:block">
                di MP SMKN 6 Jember
            </h1>
            <p class="text-lg md:text-xl mb-7">
                Smk bisa,SMK Hebat, <br>
                SMK Negeri 6 Jember,Berenergi Untuk bisa
                hebat </p>
            <a href="#" class="btn" style="background color">
                Daftar Sekarang
            </a>
        </div>
    </section>

    <div class="brand flex justify-center items-center mx-auto -mt-12 p-2 bg-white rounded-2xl shadow-md w-11/12 max-w-[900px]">
        <img src="{{ asset('image/logooo.png') }}" alt="Logo" class="w-full h-auto object-contain">
    </div>
    <section class="about">
        <div class="flex flex-col md:flex-row items-start justify-between px-6 md:px-12 py-10 gap-1 ml-10">
            <!-- Bagian kiri (teks) -->
            <div class="md:w-1/2 space-y-4">
                <p class="text-blue-600 font-semibold text-sm">Profil Jurusan</p>
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold">Tentang Jurusan</h2>
                <p class="text-gray-700 text-base md:text-lg leading-relaxed">
                    Belajar di sini bikin kamu siap bekerja di dunia
                    perkantoran modern. Kamu akan punya prospek
                    kerja yang luas, komunikasi profesional yang
                    mumpuni, keterampilan administrasi, serta
                    kemampuan manajemen perkantoran. Semua jadi
                    bekal kuat untuk meraih karir gemilang.
                </p><br>
                <a href="" class="bg-red-500 text-white text-sm px-3 py-2 rounded-md btn">
                    Tonton Video Profil
                </button>
            </div>
            <div id="videoModal" class="fixed inset-0 bg-black bg-opacity-70 hidden items-center justify-center z-50">
                <div class="bg-white rounded-lg overflow-hidden w-[90%] md:w-[60%] relative">
                    <!-- Tombol Tutup -->
                    <button onclick="closeVideoModal()"
                        class="absolute top-3 right-3 text-gray-600 hover:text-black text-2xl font-bold">&times;</button>

                    <!-- Video Embed -->
                    <div class="aspect-w-16 aspect-h-9">
                        <iframe id="videoFrame" class="w-full h-[400px]" src="" frameborder="0"
                            allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                </div>
            </div>

            <!-- Bagian kanan (ilustrasi kotak) -->

            <div class="relative w-64 h-80 card-profile">
                <!-- Card Utama -->
                <div class="bg-gray-300 w-full h-full rounded-bl-xl overflow-hidden relative bg-cover bg-center"
                    style="background-image: url('{{ asset('') }}')">
                    <!-- Label bawah -->
                    <div
                        class="absolute bottom-0 left-0 bg-green-500 text-white text-sm font-bold px-4 py-2 rounded-tr-lg title-box">
                        Ketua Jurusan MP
                    </div>
                </div>

                <!-- Kotak biru kanan atas -->
                <div class="absolute top-4 -right-4 bg-blue-600 w-20 h-24 rounded-lg shadow-md"></div>

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
            <div class="relative bg-gradient-to-r from-[#4D4FF5] to-[#7A44F9] text-white rounded-xl p-6 shadow-md h-[36vh] min-h-[200px]">
                <div class="absolute -top-6 left-6 w-20 h-20 rounded-full bg-white flex items-center justify-center shadow">
                    <img src="{{ asset('image/mp/benefit1 (1).png') }}" alt="icon" class="w-12 h-12 object-contain">
                </div>
                <h3 class="font-bold text-lg mt-12">Prospek Kerja Luas</h3>
                <p class="mt-2 text-sm">Buka kesempatan berkarir di berbagai bidang perkantoran profesional.</p>
            </div>

            <!-- Card 2 -->
            <div class="relative bg-white rounded-xl p-6 shadow-md mt-7 h-[36vh] min-h-[200px]">
                <div class="absolute -top-6 left-6 w-20 h-20 rounded-full bg-white flex items-center justify-center shadow">
                    <img src="{{ asset('image/mp/benefit1 (3).png') }}" alt="icon" class="w-12 h-12 object-contain">
                </div>
                <h3 class="font-bold text-lg text-blue-900 mt-12">Skill Komunikasi Profesional</h3>
                <p class="mt-2 text-sm text-gray-600">Tingkatkan kemampuan berkomunikasi secara efektif di lingkungan profesional.</p>
            </div>

            <!-- Card 3 -->
            <div class="relative bg-white rounded-xl p-6 shadow-md mt-5 h-[35vh] min-h-[200px]" style="margin-top:-1rem;">
                <div class="absolute -top-6 left-6 w-20 h-20 rounded-full bg-white flex items-center justify-center shadow">
                    <img src="{{ asset('image/mp/benefit1 (4).png') }}" alt="icon" class="w-12 h-12 object-contain">
                </div>
                <h3 class="font-bold text-lg text-blue-900 mt-12">Administrasi & Pengelolaan Dokumen</h3>
                <p class="mt-2 text-sm text-gray-600">Kuasi keterampilan mengelola arsip, surat-menyurat, dan dokumen kantor.</p>
            </div>

            <!-- Card 4 -->
            <div class="relative bg-white rounded-xl p-6 shadow-md mt-10 h-[33vh] min-h-[200px]">
                <div class="absolute -top-6 left-6 w-20 h-20 rounded-full bg-white flex items-center justify-center shadow">
                    <img src="{{ asset('image/mp/benefit1 (2).png') }}" alt="icon" class="w-12 h-12 object-contain">
                </div>
                <h3 class="font-bold text-lg text-blue-900 mt-12">Manajemen Perkantoran Modern</h3>
                <p class="mt-2 text-sm text-gray-600">Pelajari cara mengatur, mengelola, dan mendukung operasional kantor secara efektif.</p>
            </div>

        </div>

        <!-- Kanan: Deskripsi -->
        <div class="mt-10 md:mt-0">
            <div class="content-teks ml-0 md:ml-8">
                <h2 class="text-2xl md:text-3xl font-bold mb-4">Benefit yang didapat</h2>
                <p class="text-gray-600 mb-6 text-base md:text-lg">
                    Belajar di sini bikin kamu siap bekerja di dunia
                    perkantoran modern. Kamu akan punya prospek
                    kerja yang luas, komunikasi profesional yang
                    mumpuni, keterampilan administrasi, serta
                    kemampuan manajemen perkantoran. Semua jadi
                    bekal kuat untuk meraih karir gemilang.
                </p>
                <button class="bg-red-500 hover:bg-red-600 text-white px-6 py-2 rounded-lg btn">
                    Selengkapnya
                </button>
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
                    laboratorium perkantoran modern <br>
                    dan perangkat terbaru, mendukung <br>
                    pembelajaran administrasi serta <br>
                    keterampilan tata kelola perkantoran.
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
                                    src="{{ asset('image/mp/fas1.png') }}">
                                <figcaption class="absolute left-4 top-4">
                                    <span
                                        class="inline-flex rounded-e-2xl rounded-s-xl bg-blue-600 text-white font-semibold px-4 py-2 shadow">
                                        Lab OTKP
                                    </span>
                                </figcaption>
                            </figure>
                            <figure class="relative col-span-2 sm:col-span-1 rounded-2xl overflow-hidden shadow-lg h-full">
                                <img class="w-full h-full object-cover"
                                    src="{{ asset('image/mp/fas2.png') }}" />
                                <figcaption class="absolute left-4 top-4">
                                    <span
                                        class="inline-flex rounded-e-2xl rounded-s-xl bg-blue-600 text-white font-semibold px-4 py-2 shadow">
                                        2
                                    </span>
                                </figcaption>
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
                                        3
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
                Fasilitas lengkap dengan laboratorium perkantoran modern
                dan perangkat terbaru, mendukung pembelajaran administrasi
                serta keterampilan tata kelola perkantoran.
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
                            <img src="{{ asset('image/mp/fas1.png') }}" class="w-full h-full object-cover">
                            <figcaption class="absolute left-4 top-4 bg-gradient-to-r from-[#4D4FF5] to-[#7A44F9] text-white font-semibold px-3 py-2 rounded shadow">
                                Lab OTKP
                            </figcaption>
                        </figure>
                        <figure class="relative rounded-2xl overflow-hidden shadow-lg h-64">
                            <img src="{{ asset('image/mp/fas2.png') }}" class="w-full h-full object-cover">
                            <figcaption class="absolute left-4 top-4 bg-gradient-to-r from-[#4D4FF5] to-[#7A44F9] text-white font-semibold px-3 py-2 rounded shadow">
                                Ruang Administrasi
                            </figcaption>
                        </figure>
                    </div>
                </div>

                <!-- Slide 2 Mobile -->
                <div class="shrink-0 w-[85%] snap-start">
                    <div class="flex flex-col gap-4">
                        <figure class="relative rounded-2xl overflow-hidden shadow-lg h-64">
                            <img src="{{ asset('image/mp/fas3.jpg') }}" class="w-full h-full object-cover">
                            <figcaption class="absolute left-4 top-4 bg-gradient-to-r from-[#4D4FF5] to-[#7A44F9] text-white font-semibold px-3 py-2 rounded shadow">
                                Lab Komputer
                            </figcaption>
                        </figure>
                        <figure class="relative rounded-2xl overflow-hidden shadow-lg h-64">
                            <img src="{{ asset('image/mp/fas4.jpg') }}" class="w-full h-full object-cover">
                            <figcaption class="absolute left-4 top-4 bg-gradient-to-r from-[#4D4FF5] to-[#7A44F9] text-white font-semibold px-3 py-2 rounded shadow">
                                Ruang Meeting
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
                    <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?auto=format&fit=crop&w=600&q=80"
                        class="rounded-3xl w-[360px] h-[440px] object-cover shadow-xl" alt="main">

                    <!-- Gambar kiri atas -->
                    <img src="https://images.unsplash.com/photo-1551836022-4c4c79ecde51?auto=format&fit=crop&w=400&q=80"
                        class="absolute -top-10 -left-12 w-[160px] h-[180px] rounded-2xl object-cover border-[6px] border-[#f5f5f5] shadow-lg"
                        alt="top">

                    <!-- Gambar kanan bawah -->
                    <img src="https://images.unsplash.com/photo-1556761175-4b46a572b786?auto=format&fit=crop&w=400&q=80"
                        class="absolute -bottom-10 -right-10 w-[150px] h-[150px] rounded-2xl object-cover border-[6px] border-[#f5f5f5] shadow-lg z-20"
                        alt="bottom">

                    <!-- Kotak biru -->
                    <div
                        class="absolute -bottom-16 left-0 bg-gradient-to-r from-[#4D4FF5] to-[#7A44F9] rounded-[20px] px-6 py-5 flex items-center gap-3 shadow-lg w-full max-w-96 z-10">
                        <div class="bg-white rounded p-3 z-10">
                            <img src="{{ asset('image/mp/frame.png') }}" alt="Icon" class="w-7 h-8">
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
                    Himpunan Siswa <br> Jurusan Perkantoran
                </h2>

                <p class="text-gray-700 leading-relaxed text-base md:text-[16px]">
                    Himpunan Siswa Jurusan Perkantoran SMKN 6 Jember menjadi wadah kreatif bagi siswa untuk berkembang
                    melalui kegiatan menarik seperti pelatihan administrasi digital, six's barber, public speaking, dan
                    beauty class. Dengan semangat profesional dan kolaboratif, organisasi ini mencetak generasi siap kerja
                    yang unggul dan berkarakter.
                </p>

                <!-- CARD LOWONGAN -->
                        <!-- CARD LOWONGAN -->
                    <div class="space-y-4">
                        <div
                            class="flex items-start bg-white rounded-2xl border border-gray-200 shadow-sm p-5 gap-4 hover:shadow-md transition">
                            <div class="bg-gradient-to-r from-[#4D4FF5] to-[#7A44F9] text-white p-3 rounded-full">
                                <div class="w-5 h-5">
                                    <img src="{{ asset('image/rpl/Vector.png') }}" alt="Bag Icon"
                                        class="w-full h-full object-contain">
                                </div>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Pelatihan Skill RPL</h4>
                                <p class="text-gray-500 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                    sed do eiusmod tempor.</p>
                            </div>
                        </div>

                        <div
                            class="flex items-start bg-white rounded-2xl border border-gray-200 shadow-sm p-5 gap-4 hover:shadow-md transition">
                            <div class="bg-gradient-to-r from-[#4D4FF5] to-[#7A44F9] text-white p-3 rounded-full">
                                <div class="w-5 h-5">
                                    <img src="{{ asset('image/rpl/Group.png') }}" alt="Bag Icon"
                                        class="w-full h-full object-contain">
                                </div>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Pengalaman Kepanitaan</h4>
                                <p class="text-gray-500 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                    sed do eiusmod tempor.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="performance">
        <h2 class="font-bold text-center text-2xl md:text-3xl mb-6 mt-16">Galeri Dan Prestasi</h2>

        <!-- Grid -->
        <section class="grid grid-cols-1 md:grid-cols-2 gap-6 px-4 md:px-8 max-w-7xl mx-auto">
            <!-- Card 1 -->
            <div class="relative rounded-xl shadow overflow-hidden w-full aspect-[4/3] group">
                <img src="{{ asset('image/mp/pres1.png') }}" alt="Prestasi 1" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    <p class="text-white font-semibold text-center px-4">Juara Lomba Administrasi Perkantoran</p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="relative rounded-xl shadow overflow-hidden w-full aspect-[4/3] group">
                <img src="{{ asset('image/mp/pres2.png') }}" alt="Prestasi 2" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    <p class="text-white font-semibold text-center px-4">Best Office Management Award</p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="relative rounded-xl shadow overflow-hidden w-full aspect-[4/3] group">
                <img src="{{ asset('image/mp/pres3.png') }}" alt="Prestasi 3" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    <p class="text-white font-semibold text-center px-4">Kompetisi Keterampilan Perkantoran</p>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="relative rounded-xl shadow overflow-hidden w-full aspect-[4/3] group">
                <img src="{{ asset('image/mp/pres4.png') }}" alt="Prestasi 4" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    <p class="text-white font-semibold text-center px-4">Achievement in Office Technology</p>
                </div>
            </div>

            <!-- Tombol -->
            <div class="col-span-1 md:col-span-2 flex justify-center mt-4">
                <a href="" class="btn w-40 text-center">Selengkapnya</a>
            </div>
        </section>
    </section>


    </section>
    <section class="cta mt-8">
        <h2 class="text-center text-white text-2xl font-bold pt-80">Bersama kami, wujudkan masa depanmu! Bergabunglah
            <br>
            dengan Jurusan kami dan raih peluang terbaik untuk <br>
            karier gemilang.
        </h2><br>
        <div class="cta-btn">
            <a href="" class="btn1">Daftar Sekarang</a>
            <a href="" class="btn2">Lihat Lainnya</a>
        </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const autoplay = false;
            const intervalMs = 3500;

            const track = document.getElementById('track');
            const slides = Array.from(track.children);
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');
            const dotsWrap = document.getElementById('dots');

            // hitung langkah scroll
            function step() {
                if (!slides.length) return 0;
                const w = slides[0].offsetWidth; // lebih konsisten
                const gap = parseFloat(getComputedStyle(track).gap) || 0;
                return w + gap;
            }

            function currentIndex() {
                const s = step();
                if (!s) return 0;
                return Math.round(track.scrollLeft / s);
            }

            function goTo(i) {
                const idx = Math.max(0, Math.min(i, slides.length - 1));
                track.scrollTo({
                    left: idx * step(),
                    behavior: 'smooth'
                });
                updateDots(idx);
            }

            function next() {
                goTo(currentIndex() + 1);
            }

            function prev() {
                goTo(currentIndex() - 1);
            }

            prevBtn.addEventListener('click', prev);
            nextBtn.addEventListener('click', next);

            // dots
            let dots = [];

            function buildDots() {
                dotsWrap.innerHTML = '';
                dots = slides.map((_, i) => {
                    const b = document.createElement('button');
                    b.className =
                        'h-2.5 w-2.5 rounded-full bg-blue-600 transition-all data-[active=true]:w-6 data-[active=true]:bg-blue-600';
                    b.addEventListener('click', () => goTo(i));
                    dotsWrap.appendChild(b);
                    return b;
                });
                updateDots(0);
            }

            function updateDots(active = currentIndex()) {
                dots.forEach((d, i) => d.dataset.active = i === active ? 'true' : 'false');
            }

            // sinkronisasi saat scroll manual
            let rafScheduled = false;
            track.addEventListener('scroll', () => {
                if (rafScheduled) return;
                rafScheduled = true;
                requestAnimationFrame(() => {
                    updateDots();
                    rafScheduled = false;
                });
            });

            // autoplay
            let timer = null;

            function startAutoplay() {
                if (!autoplay) return;
                stopAutoplay();
                timer = setInterval(() => {
                    const idx = currentIndex();
                    if (idx >= slides.length - 1) goTo(0);
                    else next();
                }, intervalMs);
            }

            function stopAutoplay() {
                if (timer) clearInterval(timer);
                timer = null;
            }
            track.addEventListener('mouseenter', stopAutoplay);
            track.addEventListener('mouseleave', startAutoplay);

            buildDots();
            startAutoplay();

            window.addEventListener('resize', () => {
                const idx = currentIndex();
                requestAnimationFrame(() => goTo(idx));
            });
        });
    </script>

@endsection
