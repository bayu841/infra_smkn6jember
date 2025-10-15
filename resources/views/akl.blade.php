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
            background: linear-gradient(to right, #319F2C, #127E32);
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
            width: 1500px;
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
            background-color: #319F2C;
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
            background-color: #319F2C;
        }

        .card-profile {
            margin-right: 8rem;
        }

        .title-box {
            background: linear-gradient(to right, #319F2C, #127E32);
        }

        .fasility {
            background-image: url('image/akl/fasakl.png');
            height: 100vh;
        }

        .cta {
            background-image: url('image/akl/ctaakl.png');
            height: 110vh;
            background-color: #EFEFEF;
            background-size: cover;
        }

        .cta-btn {
            margin: 0 auto;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 5px;
            gap: 10px;
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
            box-shadow: 0px 0px 1px 1px rgba(9, 201, 35, 0.986)
        }

        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
    <section class="h-screen bg-cover bg-center flex items-center justify-center text-black"
        style="background-image: url('image/akl/heroakl.png'); width:100%; height:110vh; ">
        <!-- Teks -->
        <div class="flex-1 mb-10 md:mb-0 ml-40">
            <h1 class="text-4xl md:text-1xl font-bold mb-5">Selamat Datang <br>
                di AKL SMKN 6 Jember
            </h1>
            <p class="text-lg md:text-xl mb-7">
                Smk Bisa, SMK Hebat, <br>
                SMK Negeri 6 Jember, Berenergi untuk bisa hebat </p>
            <a href="#about" class="btn" style="background color">
                Jelajahi Jurusan
            </a>
        </div>
        </div>
    </section>
    <div class="brand">
        <img src="{{ asset('image/logooo.png') }}" alt="">
    </div>
    <section class="about" id="about">
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
    <section class="max-w-6xl mx-auto px-6 py-12 grid md:grid-cols-2 gap-8 items-center">
        <!-- Kiri: Card -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-4xl">
            <!-- Card 1 -->
            <div class="relative bg-green-500 text-white rounded-xl p-6 shadow-md" style="height: 36vh;">
                <div class="absolute -top-6 left-6 w-20 h-20 rounded-full bg-white flex items-center justify-center shadow">
                    <img src="{{ asset('image/akl/benefit1 (3).png') }}" alt="icon" style="width: 55px; height:55px;">
                </div>
                <h3 class="font-bold text-lg mt-12">Peluang Karir Luas</h3>
                <p class="mt-2 text-sm">Kesempatan kerja lebih terbuka dengan skill keuangan yang relevan.</p>
            </div>

            <!-- Card 2 -->
            <div class="relative bg-white rounded-xl p-6 shadow-md mt-7" style="height: 36vh;">
                <div class="absolute -top-6 left-6 w-20 h-20 rounded-full bg-white flex items-center justify-center shadow">
                    <img src="{{ asset('image/akl/benefit1 (4).png') }}" alt="icon" style="width: 65px; height:55px;">
                </div>
                <h3 class="font-bold text-lg text-blue-900 mt-12">Mahir Dalam Kelola Keuangan</h3>
                <p class="mt-2 text-sm text-gray-600">Belajar cara mengatur keuangan dengan cerdas dan profesional.</p>
            </div>

            <!-- Card 3 -->
            <div class="relative bg-white rounded-xl p-6 shadow-md mt-5" style="height: 35vh; margin-top:-1rem;">
                <div class="absolute -top-6 left-6 w-20 h-20 rounded-full bg-white flex items-center justify-center shadow">
                    <img src="{{ asset('image/akl/benefit1 (1).png') }}" alt="icon" style="width: 64px; height:55px;">
                </div>
                <h3 class="font-bold text-lg text-blue-900 mt-12">Bekal Untuk Kuliah</h3>
                <p class="mt-2 text-sm text-gray-600">Ilmu yang didapat bisa jadi dasar kuat untuk studi lanjut.</p>
            </div>

            <!-- Card 4 -->
            <div class="relative bg-white rounded-xl p-6 shadow-md mt-10" style="height: 33vh;">
                <div class="absolute -top-6 left-6 w-20 h-20 rounded-full bg-white flex items-center justify-center shadow">
                    <img src="{{ asset('image/akl/benefit1 (2).png') }}" alt="icon" style="width: 60px; height:55px;">
                </div>
                <h3 class="font-bold text-lg text-blue-900 mt-12">Terlatih Berfikir Analitis</h3>
                <p class="mt-2 text-sm text-gray-600">Asah kemampuan analisis supaya makin kritis dan terstruktur.</p>
            </div>

        </div>

        <!-- Kanan: Deskripsi -->
        <div>
            <div class="content-teks ml-8">
                <h2 class="text-2xl font-bold mb-4" style="margin-top: -4rem;">Benefit yang didapat</h2>
                <p class="text-gray-600 mb-6">
                    Dengan belajar di sini, kamu nggak cuma dapat ilmu, tapi
                    juga skill penting untuk masa depan. Mulai dari peluang karir
                    yang luas, kemampuan mengelola keuangan, bekal kuat
                    untuk kuliah, sampai terbiasa berpikir analitis. Semua
                    dirancang agar kamu siap menghadapi dunia nyata dengan
                    percaya diri.
                </p>
            </div>
        </div>
    </section><br><br>
    <section class="fasility bg-slate-900 px-10 py-20" style="padding-top: 9rem;">
        <!-- bungkus teks + slider -->
        <div class="flex flex-col lg:flex-row items-start gap-10">

            <!-- Teks -->
            <div class="lg:w-1/3 ml-5" style="margin-top: 5rem;">
                <h2 class="text-white text-3xl font-bold mb-4">Fasilitas Jurusan</h2>
                <p class="text-white leading-relaxed">
                    Fasilitas lengkap dengan <br>
                    laboratorium akuntansi modern dan <br>
                    software terbaru untuk mendukung <br>
                    teori dan praktik belajar.
                </p>
            </div>

            <!-- Slider -->
            <div class="relative lg:w-2/3" style="margin-top:-2rem;">
                <!-- Tombol -->
                <button id="prevBtn"
                    class="absolute right-100 top-1/2 -translate-y-1/2 z-20 grid place-items-center w-10 h-10 rounded-full bg-white/90 shadow hover:bg-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-slate-800" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor">
                        <path d="M15 18l-6-6 6-6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
                <button id="nextBtn"
                    class="absolute right-3 top-1/2 -translate-y-1/2 z-20 grid place-items-center w-10 h-10 rounded-full bg-white/90 shadow hover:bg-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-slate-800" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor">
                        <path d="M9 6l6 6-6 6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>

                <!-- Track -->
                <div id="track"
                    class="flex gap-4 px-4 py-4 overflow-x-auto snap-x snap-mandatory scroll-smooth no-scrollbar">

                    <!-- Slide 1 -->
                    <div class="shrink-0 w-[85%] sm:w-[78%] md:w-[92%] lg:w-[92%] snap-start"
                        style="width: 850px; height:50vh;">
                        <div class="grid grid-cols-2 gap-3">
                            <figure class="relative col-span-2 sm:col-span-1 rounded-xl overflow-hidden shadow"
                                style="height:50vh;">
                                <img class="w-full h-48 sm:h-56 md:h-64 object-cover"
                                    src="{{ asset('image/akl/fas1.png') }}" style="height:50vh;">
                                <figcaption class="absolute left-4 top-4">
                                    <span
                                        class="inline-flex rounded-e-2xl rounded-s-xl bg-green-600 text-white font-semibold px-4 py-2 shadow">
                                        Lab AKL
                                    </span>
                                </figcaption>
                            </figure>
                            <figure class="relative col-span-2 sm:col-span-1 rounded-xl overflow-hidden shadow">
                                <figcaption class="absolute left-4 top-4">
                                    <span
                                        class="inline-flex rounded-e-2xl rounded-s-xl bg-green-600 text-white font-semibold px-4 py-2 shadow">
                                        Pawon Enem
                                    </span>
                                </figcaption>
                                <img class="w-full h-48 sm:h-56 md:h-64 object-cover"
                                    src="{{ asset('image/akl/fas2.png') }}" style="height:50vh;" />
                            </figure>
                        </div>
                    </div>
                    <!-- Slide 2 -->

                </div>
            </div>
        </div>
        <!-- Dots -->
        <div id="dots" class="flex items-center justify-center gap-2 pb-4"></div>
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
                   <img src="{{ asset('image/akl/logo.png') }}"
                            class="absolute -bottom-10 -right-10 w-[150px] h-[150px] object-cover  shadow-lg z-20"
                            alt="bottom">
                    <!-- Kotak merah -->
                    <div
                        class="absolute -bottom-16 left-0 bg-gradient-to-r from-[#319F2C] to-[#127E32] rounded-[20px] px-6 py-5 flex items-center gap-3 shadow-lg w-96 z-10">
                        <div class="bg-white rounded p-3 z-10">
                            <img src="{{ asset('image/akl/frame.png') }}" alt="Icon" class="w-7 h-8">
                        </div>
                        <div>
                            <h3 class="text-white font-extrabold text-xl leading-none">1.000+</h3>
                            <p class="text-white text-sm mt-1">Siswa Unggul</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- BAGIAN KANAN -->
            <div class="lg:w-1/2 space-y-7">
                <h2 class="text-4xl font-extrabold text-gray-900 leading-tight">
                    Himpunan Siswa <br>
                    Jurusan Akuntansi
                </h2>

                <p class="text-gray-700 leading-relaxed text-[16px]">
                    Himpunan Siswa Jurusan Akuntansi SMKN 6 Jember merupakan organisasi yang menjadi pusat pengembangan
                    kompetensi, kedisiplinan, dan tanggung jawab siswa di bidang keuangan. Melalui kegiatan seperti
                    olimpiade akuntansi, pelatihan software keuangan, simulasi pembukuan, dan seminar karier, organisasi ini
                    mencetak calon akuntan muda yang profesional, teliti, dan berintegritas tinggi.
                </p>

                <!-- CARD LOWONGAN -->
                <div class="space-y-4">
                    <div
                        class="flex items-start bg-white rounded-2xl border border-gray-200 shadow-sm p-5 gap-4 hover:shadow-md transition">
                        <div class="bg-gradient-to-r from-[#319F2C] to-[#127E32] text-white p-3 rounded-full">
                            <div class="w-5 h-5">
                                <img src="{{ asset('image/akl/Group (1).png') }}" alt="Bag Icon"
                                    class="w-full h-full object-contain">
                            </div>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Kegiatan Unggulan Akuntansi</h4>
                            <p class="text-gray-500 text-sm">Mengasah kemampuan analisis dan ketelitian siswa akuntansi.</p>
                        </div>
                    </div>

                    <div
                        class="flex items-start bg-white rounded-2xl border border-gray-200 shadow-sm p-5 gap-4 hover:shadow-md transition">
                        <div class="bg-gradient-to-r from-[#319F2C] to-[#127E32] text-white p-3 rounded-full">
                            <div class="w-5 h-5">
                                <img src="{{ asset('image/akl/Vector (1).png') }}" alt="Bag Icon"
                                    class="w-full h-full object-contain">
                            </div>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Praktik Akuntansi Perusahaan</h4>
                            <p class="text-gray-500 text-sm">Menerapkan ilmu akuntansi melalui simulasi dunia kerja nyata.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><br>
    <section class="performance">
        <h2 class="font-bold text-center text-2xl mb-6 mt-16">Galeri Dan Prestasi</h2>

        <!-- Grid -->
        <section class="grid grid-cols-1 md:grid-cols-2 gap-6 px-4 md:px-8">
            <!-- Card 1 -->
            <div class="rounded-xl shadow overflow-hidden w-full aspect-[4/3]">
                <img src="{{ asset('image/akl/pres1.png') }}" alt="Prestasi 1" class="w-full h-full object-cover">
            </div>

            <!-- Card 2 -->
            <div class="rounded-xl shadow overflow-hidden w-full aspect-[4/3]">
                <img src="{{ asset('image/akl/pres2.png') }}" alt="Prestasi 2" class="w-full h-full object-cover">
            </div>

            <!-- Card 3 -->
            <div class="rounded-xl shadow overflow-hidden w-full aspect-[4/3]">
                <img src="{{ asset('image/akl/pres3.png') }}" alt="Prestasi 3" class="w-full h-full object-cover">
            </div>

            <!-- Card 4 -->
            <div class="rounded-xl shadow overflow-hidden w-full aspect-[4/3]">
                <img src="{{ asset('image/akl/pres4.png') }}" alt="Prestasi 4" class="w-full h-full object-cover">
            </div>
            <br><br><br>
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
            <a href="https://www.instagram.com/hsja.smkn6jbr    /" class="btn1">Selengkapnya</a>
            <a href="/home" class="btn2">Lihat Lainnya</a>
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
                        'h-2.5 w-2.5 rounded-full bg-green-600 transition-all data-[active=true]:w-6 data-[active=true]:bg-green-600';
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
