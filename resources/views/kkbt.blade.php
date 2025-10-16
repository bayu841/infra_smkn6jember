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
            background: linear-gradient(to right, #CA4016, #E64817);
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
            background-color: #CA4016;
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
            background-color: #CA4016;
        }

        .card-profile {
            margin-right: 8rem;
        }

        .title-box {
            background: linear-gradient(to right, #CA4016, #E64817);
        }


        .fasility {
            background-image: url('image/kkbt/faskkbt.png');
            height: 100vh;
        }

        .cta {
            background-image: url('image/kkbt/ctakkbt.png');
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
            background: linear-gradient(to right, #CA4016, #E64817);
            border-radius: 5px;
            font-weight: bold;
        }

        .btn2 {
            color: #CA4016;
            padding: 10px 10px;
            background-color: #ffffff;
            border-radius: 5px;
            font-weight: bold;
            box-shadow: 0px 0px 1px 1px rgba(182, 105, 5, 0.986)
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
        style="background-image: url('image/kkbt/herokkbt.png'); width:100%; height:110vh; ">
        <!-- Teks -->
        <div class="flex-1 mb-10 md:mb-0 ml-40">
            <h1 class="text-4xl md:text-1xl font-bold mb-5">Selamat Datang <br>
                di KKBT SMKN 6 Jember
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
                <p class="text-orange-500 font-semibold text-sm">Profil Jurusan</p>
                <h2 class="text-2xl font-bold">Tentang Jurusan</h2>
                <p class="text-gray-700">
                    Jurusan Kriya Kreatif Batik dan Tekstil (KKBT) di <br>
                    SMKN 6 Jember membekali siswa keterampilan <br>
                    seni kriya, desain batik, teknik tekstil, serta <br>
                    pewarnaan kain. Lulusan diharapkan kreatif, <br>
                    inovatif, dan siap bersaing di dunia industri kreatif.
                </p><br>
              <button onclick="openVideoModal()" class="bg-red-500 text-white text-sm px-3 py-2 rounded-md btn ">
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
                    style="background-image: url('{{ asset('image/kkbt/guru1.png') }}')">
                    <!-- Label bawah -->
                    <div
                        class="absolute bottom-0 left-0 bg-green-500 text-white text-sm font-bold px-4 py-2 rounded-tr-lg title-box">
                        Ketua Jurusan KKBT
                    </div>
                </div>

                <!-- Kotak merah kanan atas -->
                <div class="absolute top-0 right-0 bg-[#EE3E12] w-16 h-20 rounded-lg red-box"></div>

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
            <div class="relative bg-[#EE3E12] text-white rounded-xl p-6 shadow-md" style="height: 36vh;">
                <div class="absolute -top-6 left-6 w-20 h-20 rounded-full bg-white flex items-center justify-center shadow">
                    <img src="{{ asset('image/kkbt/benefit1 (1).png') }}" alt="icon" style="width: 55px; height:55px;">
                </div>
                <h3 class="font-bold text-lg mt-12">Peluang Karir Kreatif</h3>
                <p class="mt-2 text-sm">Buka kesempatan kerja di bidang seni, budaya, dan industri kreatif.</p>
            </div>

            <!-- Card 2 -->
            <div class="relative bg-white rounded-xl p-6 shadow-md mt-7" style="height: 36vh;">
                <div class="absolute -top-6 left-6 w-20 h-20 rounded-full bg-white flex items-center justify-center shadow">
                    <img src="{{ asset('image/kkbt/benefit1 (2).png') }}" alt="icon" style="width: 65px; height:55px;">
                </div>
                <h3 class="font-bold text-lg text-blue-900 mt-12">Menguasai Seni & Kreativitas</h3>
                <p class="mt-2 text-sm text-gray-600">Kembangkan bakat seni dan asah kreativitasmu jadi karya nyata.</p>
            </div>

            <!-- Card 3 -->
            <div class="relative bg-white rounded-xl p-6 shadow-md mt-5" style="height: 35vh; margin-top:-1rem;">
                <div class="absolute -top-6 left-6 w-20 h-20 rounded-full bg-white flex items-center justify-center shadow">
                    <img src="{{ asset('image/kkbt/benefit1 (4).png') }}" alt="icon" style="width: 64px; height:55px;">
                </div>
                <h3 class="font-bold text-lg text-blue-900 mt-12">Mempelajari Warisan Budaya</h3>
                <p class="mt-2 text-sm text-gray-600">Pelajari nilai luhur budaya sebagai bekal karakter dan identitas
                    bangsa.</p>
            </div>

            <!-- Card 4 -->
            <div class="relative bg-white rounded-xl p-6 shadow-md mt-8" style="height: 33vh;">
                <div class="absolute -top-6 left-6 w-20 h-20 rounded-full bg-white flex items-center justify-center shadow">
                    <img src="{{ asset('image/kkbt/benefit1 (3).png') }}" alt="icon" style="width: 60px; height:55px;">
                </div>
                <h3 class="font-bold text-lg text-blue-900 mt-12">Skill Unik & Bernilai Tinggi</h3>
                <p class="mt-2 text-sm text-gray-600">Dapatkan keterampilan spesial yang bermanfaat dan diakui luas.</p>
            </div>

        </div>

        <!-- Kanan: Deskripsi -->
        <div>
            <div class="content-teks ml-8">
                <h2 class="text-2xl font-bold mb-4" style="margin-top: -2rem;">Benefit yang didapat</h2>
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
                    laboratorium batik dan peralatan <br>
                    modern, mendukung kreativitas siswa <br>
                    dalam desain dan praktik membatik.
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
                                    src="{{ asset('image/kkbt/fas1.png') }}" style="height:50vh;">
                                <figcaption class="absolute left-4 top-4">
                                    <span
                                        class="inline-flex rounded-e-2xl rounded-s-xl bg-orange-600 text-white font-semibold px-4 py-2 shadow">
                                        Kantor Jursan
                                    </span>
                                </figcaption>
                            </figure>
                            <figure class="relative col-span-2 sm:col-span-1 rounded-xl overflow-hidden shadow">
                                <figcaption class="absolute left-4 top-4">
                                    <span
                                        class="inline-flex rounded-e-2xl rounded-s-xl bg-orange-600 text-white font-semibold px-4 py-2 shadow">
                                        RPS KKBT
                                    </span>
                                </figcaption>
                                <img class="w-full h-48 sm:h-56 md:h-64 object-cover"
                                    src="{{ asset('image/kkbt/fas2.png') }}" style="height:50vh;" />
                            </figure>
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="shrink-0 w-[85%] sm:w-[78%] md:w-[92%] lg:w-[92%] snap-start"
                        style="width: 1000px; height:50vh;">
                        <div class="grid grid-cols-2 gap-3">
                            <figure class="relative col-span-2 sm:col-span-1 rounded-xl overflow-hidden shadow"
                                style="height:50vh;">
                                <img class="w-full h-48 sm:h-56 md:h-64 object-cover" src="{{ asset('image/kkbt/fas3.png') }}"
                                    style="height:50vh;">
                                <figcaption class="absolute left-4 top-4">
                                    <span
                                        class="inline-flex rounded-e-2xl rounded-s-xl bg-orange-600 text-white font-semibold px-4 py-2 shadow">
                                        Laboratorium Batik
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
    <section class="bg-[#f5f5f5] py-20">
        <div class="max-w-7xl mx-auto flex flex-col lg:flex-row items-center justify-between gap-14 px-6">

            <!-- BAGIAN KIRI -->
            <div class="relative flex justify-center lg:w-1/2">
                <!-- Gambar utama -->
                <div class="relative">
                    <img src="{{asset('image/kkbt/gambarjenus.png')}}"
                        class="rounded-3xl w-[360px] h-[440px] object-cover shadow-xl" alt="main">

                    <!-- Gambar kiri atas -->
                    <img src="{{asset('image/kkbt/kiriatas.png')}}"
                        class="absolute -top-10 -left-12 w-[160px] h-[180px] rounded-2xl object-cover border-[6px] border-[#f5f5f5] shadow-lg"
                        alt="top">

                    <!-- Gambar kanan bawah -->
                   <img src="{{ asset('image/kkbt/jenus.png') }}"
                            class="absolute -bottom-10 -right-10 w-[150px] h-[150px] object-cover  shadow-lg z-20"
                            alt="bottom">

                    <!-- Kotak merah -->
                    <div
                        class="absolute -bottom-16 left-0 bg-gradient-to-r from-[#CA4016] to-[#E64817] rounded-[20px] px-6 py-5 flex items-center gap-3 shadow-lg w-96 z-10">
                        <div class="bg-white rounded p-3 z-10">
                            <img src="{{ asset('image/kkbt/frame.png') }}" alt="Icon" class="w-7 h-8">
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
                    Jember Nusantara
                </h2>

                <p class="text-gray-700 leading-relaxed text-[16px]">
                    Jember Nusantara Jurusan Kriya Kreatif Batik dan Tekstil SMKN 6 Jember merupakan organisasi yang
                    melestarikan budaya melalui karya batik dan tekstil bernilai seni tinggi. Dengan kegiatan seperti
                    pameran busana, workshop membatik, lomba desain motif, dan kolaborasi budaya, organisasi ini mencetak
                    generasi kreatif yang inovatif, berkarakter, serta cinta warisan lokal.
                </p>

                <!-- CARD LOWONGAN -->
                <div class="space-y-4">
                    <div
                        class="flex items-start bg-white rounded-2xl border border-gray-200 shadow-sm p-5 gap-4 hover:shadow-md transition">
                        <div class="bg-gradient-to-r from-[#CA4016] to-[#E64817] text-white p-3 rounded-full">
                            <div class="w-5 h-5">
                                <img src="{{ asset('image/kkbt/Vector (2).png') }}" alt="Bag Icon"
                                    class="w-full h-full object-contain">
                            </div>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Kreasi Batik Inovatif</h4>
                            <p class="text-gray-500 text-sm">Karya siswa KKBT dengan desain unik dan bernilai jual tinggi.</p>
                        </div>
                    </div>

                    <div
                        class="flex items-start bg-white rounded-2xl border border-gray-200 shadow-sm p-5 gap-4 hover:shadow-md transition">
                        <div class="bg-gradient-to-r from-[#CA4016] to-[#E64817] text-white p-3 rounded-full">
                            <div class="w-5 h-5">
                                <img src="{{ asset('image/kkbt/Leadership.png') }}" alt="Bag Icon"
                                    class="w-full h-full object-contain">
                            </div>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Wirausaha Batik Sekolah</h4>
                            <p class="text-gray-500 text-sm">Program pengembangan bisnis batik yang berhasil mencetak omset nyata.</p>
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
                <img src="{{ asset('image/kkbt/pres1.png') }}" alt="Prestasi 1" class="w-full h-full object-cover">
            </div>

            <!-- Card 2 -->
            <div class="rounded-xl shadow overflow-hidden w-full aspect-[4/3]">
                <img src="{{ asset('image/kkbt/pres2.png') }}" alt="Prestasi 2" class="w-full h-full object-cover">
            </div>

            <!-- Card 3 -->
            <div class="rounded-xl shadow overflow-hidden w-full aspect-[4/3]">
                <img src="{{ asset('image/kkbt/pres3.png') }}" alt="Prestasi 3" class="w-full h-full object-cover">
            </div>

            <!-- Card 4 -->
            <div class="rounded-xl shadow overflow-hidden w-full aspect-[4/3]">
                <img src="{{ asset('image/kkbt/pres4.png') }}" alt="Prestasi 4" class="w-full h-full object-cover">
            </div>
        </section>
    </section>
<br><br><br><br>

    </section>
    <section class="cta mt-8">
        <h2 class="text-center text-white text-2xl font-bold pt-80">Bersama kami, wujudkan masa depanmu! Bergabunglah
            <br>
            dengan Jurusan kami dan raih peluang terbaik untuk <br>
            karier gemilang.
        </h2><br>
        <div class="cta-btn">
            <a href="https://www.instagram.com/batikenemjember/" class="btn1">Selengkapnya</a>
            <a href="/home" class="btn2">Lihat Lainnya</a>
        </div>
    </section>
   <script>
        document.addEventListener("DOMContentLoaded", () => {
            /* ------------------- Modal Video ------------------- */
            function openVideoModal() {
                const modal = document.getElementById('videoModal');
                const frame = document.getElementById('videoFrame');
                if (!modal || !frame) return console.warn('Modal atau frame video tidak ditemukan.');
                // Gunakan URL embed agar bekerja di iframe
                frame.src = "https://www.youtube.com/embed/nJRoy5Cf0bE";
                modal.classList.remove('hidden');
                modal.classList.add('flex');
            }

            function closeVideoModal() {
                const modal = document.getElementById('videoModal');
                const frame = document.getElementById('videoFrame');
                if (!modal || !frame) return;
                frame.src = ""; // hentikan video
                modal.classList.remove('flex');
                modal.classList.add('hidden');
            }

            // expose ke global jika tombol inline memanggil openVideoModal()
            window.openVideoModal = openVideoModal;
            window.closeVideoModal = closeVideoModal;

            /* ------------------- Carousel / Slider ------------------- */
            const autoplay = false;
            const intervalMs = 3500;

            const track = document.getElementById('track');
            if (!track) {
                // jika tidak ada carousel di halaman, berhenti di sini tanpa error
                return console.info('Carousel: elemen #track tidak ditemukan — melewatkan setup carousel.');
            }

            const slides = Array.from(track.children);
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');
            const dotsWrap = document.getElementById('dots');

            // helper: hitung langkah scroll (lebar slide + gap)
            function step() {
                if (!slides.length) return 0;
                const w = slides[0].offsetWidth;
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

            // Tambahkan listener hanya jika tombol ada
            if (prevBtn) prevBtn.addEventListener('click', prev);
            if (nextBtn) nextBtn.addEventListener('click', next);

            // dots (jika ada wadah)
            let dots = [];

            function buildDots() {
                if (!dotsWrap) return;
                dotsWrap.innerHTML = '';
                dots = slides.map((_, i) => {
                    const b = document.createElement('button');
                    // gunakan kelas Tailwind / custom; gunakan dataset untuk state
                    b.className = 'h-2.5 w-2.5 rounded-full transition-all';
                    b.setAttribute('aria-label', 'Slide ' + (i + 1));
                    b.addEventListener('click', () => goTo(i));
                    dotsWrap.appendChild(b);
                    return b;
                });
                updateDots(0);
            }

            function updateDots(active = currentIndex()) {
                if (!dots.length) return;
                dots.forEach((d, i) => {
                    if (i === active) {
                        d.dataset.active = 'true';
                        // contoh: tambahkan kelas ketika aktif (sesuaikan dengan stylingmu)
                        d.style.width = '1.5rem';
                        d.style.backgroundColor = '';
                    } else {
                        d.dataset.active = 'false';
                        d.style.width = '';
                    }
                });
            }

            // Sinkronisasi saat scroll manual (debounce via rAF)
            let rafScheduled = false;
            track.addEventListener('scroll', () => {
                if (rafScheduled) return;
                rafScheduled = true;
                requestAnimationFrame(() => {
                    updateDots();
                    rafScheduled = false;
                });
            });

            // Autoplay (opsional)
            let timer = null;

            function startAutoplay() {
                if (!autoplay || slides.length <= 1) return;
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

            // Build dots hanya jika dotsWrap tersedia
            buildDots();
            startAutoplay();

            // On resize, sesuaikan posisi ke index saat ini
            window.addEventListener('resize', () => {
                const idx = currentIndex();
                requestAnimationFrame(() => goTo(idx));
            });

            /* ------------------- Tombol Tutup Modal (mis. overlay click) ------------------- */
            const videoModal = document.getElementById('videoModal');
            if (videoModal) {
                // klik di luar konten modal untuk menutup
                videoModal.addEventListener('click', (e) => {
                    if (e.target === videoModal) closeVideoModal();
                });
                // contoh: tombol close dengan id closeVideoBtn
                const closeBtn = document.getElementById('closeVideoBtn');
                if (closeBtn) closeBtn.addEventListener('click', closeVideoModal);
            }
        });
    </script>
@endsection
