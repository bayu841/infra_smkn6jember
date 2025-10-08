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
                background: linear-gradient(to right, #F92626, #D24747);
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
                background-color: #FF3B3B;
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
            }

            .card-profile {
                margin-right: 8rem;
            }

            .title-box {
                background: linear-gradient(to right, #F92626, #D24747);
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


            .fasility {
                background-image: url('image/rpl/fasilitasrpl.png');
                height: 100vh;
            }

            .cta {
                background-image: url('image/rpl/ctarpl.png');
                height: 110vh;
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
                background: linear-gradient(to right, #F92626, #D24747);
                border-radius: 5px;
                font-weight: bold;
            }

            .btn2 {
                color: #ff0000;
                padding: 10px 10px;
                background-color: #ffffff;
                border-radius: 5px;
                font-weight: bold;
                box-shadow: 0px 0px 1px 1px rgba(201, 9, 9, 0.986)
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
            style="background-image: url('image/rpl/herorpl.png'); width:100%; height:110vh;"w>
            <!-- Teks -->
            <div class="flex-1 mb-10 md:mb-0 ml-40">
                <h1 class="text-4xl md:text-1xl font-bold mb-5">Selamat Datang <br>
                    di RPL SMKN 6 Jember
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
        <section class="about">
            <div class="flex flex-col md:flex-row items-start justify-between px-6 md:px-12 py-10 gap-1 ml-10">
                <!-- Bagian kiri (teks) -->
                <div class="md:w-1/2 space-y-1"><br><br>
                    <p class="text-red-500 font-semibold text-sm">Profil Jurusan</p>
                    <h2 class="text-2xl font-bold">Tentang Jurusan</h2>
                    <p class="text-gray-700">
                        Jurusan Pengembangan Perangkat Lunak dan <br>
                        Gim (PPLG) di SMKN 6 Jember merupakan bagian dari <br>
                        bidang keahlian Teknologi Informasi dengan fokus pada <br>
                        pembuatan perangkat lunak dan game digital.
                    </p><br>
                    <a href="https://www.youtube.com/shorts/9mQOKXHDnYw?feature=share"
                        class="bg-red-500 text-white text-sm px-3 py-2 rounded-md btn">
                        Tonton Video Profil
                    </a>
                </div>

                <!-- Bagian kanan (ilustrasi kotak) -->

                <div class="relative w-64 h-80 card-profile">
                    <!-- Card Utama -->
                    <div class="bg-gray-300 w-full h-full rounded-bl-xl overflow-hidden relative bg-cover bg-center"
                        style="background-image: url('{{ asset('image/rpl/guru1.png') }}')">
                        <!-- Label bawah -->
                        <div
                            class="absolute bottom-0 left-0 bg-red-500 text-white text-sm font-bold px-4 py-2 rounded-tr-lg title-box">
                            Ketua Jurusan RPL
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
                <div class="relative bg-red-500 text-white rounded-xl p-6 shadow-md" style="height: 36vh;">
                    <div class="absolute -top-6 left-6 w-20 h-20 rounded-full bg-white flex items-center justify-center shadow">
                        <img src="{{ asset('image/rpl/benefit1 (1).png') }}" alt="icon" style="width: 55px; height:55px;">
                    </div>
                    <h3 class="font-bold text-lg mt-12">Peluang Karir Luas</h3>
                    <p class="mt-2 text-sm">Buka jalan ke profesi masa depan yang menjanjikan.</p>
                </div>

                <!-- Card 2 -->
                <div class="relative bg-white rounded-xl p-6 shadow-md mt-7" style="height: 36vh;">
                    <div class="absolute -top-6 left-6 w-20 h-20 rounded-full bg-white flex items-center justify-center shadow">
                        <img src="{{ asset('image/rpl/benefit1 (2).png') }}" alt="icon" style="width: 55px; height:55px;">
                    </div>
                    <h3 class="font-bold text-lg text-blue-900 mt-12">Keterampilan yang dibutuhkan</h3>
                    <p class="mt-2 text-sm text-gray-600">Kuasi skill paling dicari industri saat ini.</p>
                </div>

                <!-- Card 3 -->
                <div class="relative bg-white rounded-xl p-6 shadow-md mt-5" style="height: 35vh; margin-top:-1rem;">
                    <div class="absolute -top-6 left-6 w-20 h-20 rounded-full bg-white flex items-center justify-center shadow">
                        <img src="{{ asset('image/rpl/benefit1 (3).png') }}" alt="icon" style="width: 64px; height:55px;">
                    </div>
                    <h3 class="font-bold text-lg text-blue-900 mt-12">Selalu Update Teknologi</h3>
                    <p class="mt-2 text-sm text-gray-600">Belajar teknologi terbaru biar selalu up-to-date.</p>
                </div>

                <!-- Card 4 -->
                <div class="relative bg-white rounded-xl p-6 shadow-md mt-10" style="height: 33vh;">
                    <div class="absolute -top-6 left-6 w-20 h-20 rounded-full bg-white flex items-center justify-center shadow">
                        <img src="{{ asset('image/rpl/benefit1 (4).png') }}" alt="icon" style="width: 60px; height:55px;">
                    </div>
                    <h3 class="font-bold text-lg text-blue-900 mt-12">Fleksibel</h3>
                    <p class="mt-2 text-sm text-gray-600">Belajar kapan saja, di mana saja, dengan cara seru.</p>
                </div>

            </div>

            <!-- Kanan: Deskripsi -->
            <div>
                <div class="content-teks ml-8">
                    <h2 class="text-2xl font-bold mb-4" style="margin-top: -5rem;">Benefit yang didapat</h2>
                    <p class="text-gray-600 mb-6">
                        Siap-siap jadi keren di masa depan! Di sini kamu bakal dapat semuanya: kesempatan karier yang luas dan
                        keren, skill yang paling dicari, materi yang selalu update sama teknologi, plus bisa belajar dengan
                        fleksibel. Dijamin seru dan bermanfaat!
                    </p>
                    <button class="bg-red-500 hover:bg-red-600 text-white px-6 py-2 rounded-lg btn">
                        Selengkapnya
                    </button>
                </div>
            </div>
        </section><br><br>
        <section class="study">
            <h2 class="font-bold ml-20 text-3xl">Kurikulum dan Pembelajaran</h2>
            <div class="p-6">
                <!-- Kelas X -->
                <div class="class">
                    <div class="mb-4">
                        <h3 class="font-bold text-lg">Kelas X</h3>
                        <p class="text-justify text-gray-700 ">
                            Siswa mulai mempelajari dasar-dasar pemrograman, sistem komputer, <br>
                            jaringan sederhana,serta desain grafis untuk membangun fondasi keahlian.
                        </p>
                    </div>
                    <!-- Kelas XI -->
                    <div class="mb-4">
                        <h3 class="font-bold text-lg">Kelas XI</h3>
                        <p class="text-justify text-gray-700">
                            Materi berfokus pada pemrograman berorientasi objek, basis data, <br>
                            pengembangan website, dan algoritma agar siswa semakin terampil <br>
                            dalam membuat aplikasi.
                        </p>
                    </div>

                    <!-- Kelas XII -->
                    <div class="mb-4">
                        <h3 class="font-bold text-lg">Kelas XII</h3>
                        <p class="text-justify text-gray-700">
                            Pembelajaran diarahkan pada pemrograman mobile, pengembangan <br>
                            perangkat lunak berskala besar, serta proyek berbasis industri. Siswa <br>
                            juga menjalani Praktik Kerja Lapangan (PKL) untuk memperoleh <br>
                            pengalaman langsung di dunia kerja.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <br><br><br><br>
        <section class="fasility bg-slate-900 px-10 py-20" style="padding-top: 9rem;">
            <!-- bungkus teks + slider -->
            <div class="flex flex-col lg:flex-row items-start gap-10">

                <!-- Teks -->
                <div class="lg:w-1/3 ml-5" style="margin-top: 5rem;">
                    <h2 class="text-white text-3xl font-bold mb-4">Fasilitas Jurusan</h2>
                    <p class="text-white leading-relaxed">
                        Jurusan RPL memiliki fasilitas lengkap <br>
                        yang mendukung pembelajaran teknologi, <br>
                        dilengkapi dengan perangkat dan software <br>
                        terbaru untuk menunjang proses belajar.
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
                                        src="{{ asset('image/rpl/fas1.png') }}" style="height:50vh;">
                                    <figcaption class="absolute left-4 top-4">
                                        <span
                                            class="inline-flex rounded-e-2xl rounded-s-xl bg-red-600 text-white font-semibold px-4 py-2 shadow">
                                            Lab RPL
                                        </span>
                                    </figcaption>
                                </figure>
                                <figure class="relative col-span-2 sm:col-span-1 rounded-xl overflow-hidden shadow">
                                    <figcaption class="absolute left-4 top-4">
                                        <span
                                            class="inline-flex rounded-e-2xl rounded-s-xl bg-red-600 text-white font-semibold px-4 py-2 shadow">
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
                                            class="inline-flex rounded-e-2xl rounded-s-xl bg-red-600 text-white font-semibold px-4 py-2 shadow">
                                            Kelas
                                        </span>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                    <!-- Dots -->
                    <div id="dots" class="flex items-center justify-center gap-2 pb-4"></div>
                </div>
            </div>
        </section>
        <section class="performance">
            <h2 class="font-bold text-center text-2xl mb-6 mt-16">Galeri Dan Prestasi</h2>

            <!-- Grid -->
            <section class="grid grid-cols-1 md:grid-cols-2 gap-6 px-4 md:px-8">
                <!-- Card 1 -->
                <div class="rounded-xl shadow overflow-hidden w-full aspect-[4/3]">
                    <img src="image/rpl/pres1.png" alt="Prestasi 1" class="w-full h-full object-cover">
                </div>

                <!-- Card 2 -->
                <div class="rounded-xl shadow overflow-hidden w-full aspect-[4/3]">
                    <img src="image/rpl/pres2.png" alt="Prestasi 2" class="w-full h-full object-cover">
                </div>

                <!-- Card 3 -->
                <div class="rounded-xl shadow overflow-hidden w-full aspect-[4/3]">
                    <img src="image/rpl/pres3.png" alt="Prestasi 3" class="w-full h-full object-cover">
                </div>

                <!-- Card 4 -->
                <div class="rounded-xl shadow overflow-hidden w-full aspect-[4/3]">
                    <img src="image/rpl/pres4.png" alt="Prestasi 4" class="w-full h-full object-cover">
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
                            'h-2.5 w-2.5 rounded-full bg-red-600 transition-all data-[active=true]:w-6 data-[active=true]:bg-red-600';
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
