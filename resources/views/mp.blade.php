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
            background-color: #4D4FF5;
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
            background: linear-gradient(to right, #4D4FF5, #7A44F9);
        }

        .fasility {
            background-image: url('image/mp/fasmp.png');
            height: 100vh;
        }

        .cta {
            background-image: url('image/mp/ctamp.png');
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
            background: linear-gradient(to right, #4D4FF5, #7A44F9);
            border-radius: 5px;
            font-weight: bold;
        }

        .btn2 {
            color: #4D4FF5;
            padding: 10px 10px;
            background-color: #ffffff;
            border-radius: 5px;
            font-weight: bold;
            box-shadow: 0px 0px 1px 1px rgba(51, 47, 233, 0.986)
        }

        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
    <section class="h-screen bg-cover bg-center flex items-center justify-center text-black -mt-20"
        style="background-image: url('image/mp/heromp.png'); width:100%; height:110vh; ">
        <!-- Teks -->
        <div class="flex-1 mb-10 md:mb-0 mt-20" style="margin-left:120px;">
            <h1 class="text-4xl md:text-1xl font-bold mb-5">Selamat Datang <br>
                di MP SMKN 6 Jember
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
                <p class="text-blue-600 font-semibold text-sm">Profil Jurusan</p>
                <h2 class="text-2xl font-bold">Tentang Jurusan</h2>
                <p class="text-gray-700">
                    Belajar di sini bikin kamu siap bekerja di dunia <br>
                    perkantoran modern. Kamu akan punya prospek <br>
                    kerja yang luas, komunikasi profesional yang <br>
                    mumpuni, keterampilan administrasi, serta <br>
                    kemampuan manajemen perkantoran. Semua jadi <br>
                    bekal kuat untuk meraih karir gemilang.
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
                    style="background-image: url('{{ asset('image/mp/guru1.png') }}')">
                    <!-- Label bawah -->
                    <div
                        class="absolute bottom-0 left-0 bg-green-500 text-white text-sm font-bold px-4 py-2 rounded-tr-lg title-box">
                        Ketua Jurusan MP
                    </div>
                </div>

                <!-- Kotak merah kanan atas -->
                <div class="absolute top-0 right-0 bg-blue-600 w-16 h-20 rounded-lg red-box"></div>

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
            <div class="relative bg-[#3F1ED0] text-white rounded-xl p-6 shadow-md" style="height: 36vh;">
                <div class="absolute -top-6 left-6 w-20 h-20 rounded-full bg-white flex items-center justify-center shadow">
                    <img src="{{ asset('image/mp/benefit1 (1).png') }}" alt="icon" style="width: 55px; height:55px;">
                </div>
                <h3 class="font-bold text-lg mt-12">Prospek Kerja Luas</h3>
                <p class="mt-2 text-sm">Buka kesempatan berkarir di berbagai bidang perkantoran profesional.</p>
            </div>

            <!-- Card 2 -->
            <div class="relative bg-white rounded-xl p-6 shadow-md mt-7" style="height: 36vh;">
                <div class="absolute -top-6 left-6 w-20 h-20 rounded-full bg-white flex items-center justify-center shadow">
                    <img src="{{ asset('image/mp/benefit1 (3).png') }}" alt="icon" style="width: 65px; height:55px;">
                </div>
                <h3 class="font-bold text-lg text-blue-900 mt-12">Skill Komunikasi Profesional</h3>
                <p class="mt-2 text-sm text-gray-600">Belajar cara memasarkan produk secara efektif dan menarik.</p>
            </div>

            <!-- Card 3 -->
            <div class="relative bg-white rounded-xl p-6 shadow-md mt-5" style="height: 41vh; margin-top:-1rem;">
                <div class="absolute -top-6 left-6 w-20 h-20 rounded-full bg-white flex items-center justify-center shadow">
                    <img src="{{ asset('image/mp/benefit1 (4).png') }}" alt="icon" style="width: 64px; height:55px;">
                </div>
                <h3 class="font-bold text-lg text-blue-900 mt-12">Administrasi & Pengelolaan Dokumen</h3>
                <p class="mt-2 text-sm text-gray-600">Kuasi keterampilan mengelola arsip, surat-menyurat, dan dokumen
                    kantor.</p>
            </div>

            <!-- Card 4 -->
            <div class="relative bg-white rounded-xl p-6 shadow-md mt-10" style="height: 38vh;">
                <div class="absolute -top-6 left-6 w-20 h-20 rounded-full bg-white flex items-center justify-center shadow">
                    <img src="{{ asset('image/mp/benefit1 (2).png') }}" alt="icon" style="width: 60px; height:55px;">
                </div>
                <h3 class="font-bold text-lg text-blue-900 mt-12">Manajemen Perkantoran Modern</h3>
                <p class="mt-2 text-sm text-gray-600">Pelajari cara mengatur, mengelola, dan mendukung operasional kantor
                    secara efektif.</p>
            </div>

        </div>

        <!-- Kanan: Deskripsi -->
        <div>
            <div class="content-teks ml-8">
                <h2 class="text-2xl font-bold mb-4" style="margin-top: -5rem;">Benefit yang didapat</h2>
                <p class="text-gray-600 mb-6">
                    Belajar di sini bikin kamu siap bekerja di dunia <br>
                    perkantoran modern. Kamu akan punya prospek <br>
                    kerja yang luas, komunikasi profesional yang <br>
                    mumpuni, keterampilan administrasi, serta <br>
                    kemampuan manajemen perkantoran.Semua jadi <br>
                    bekal kuat untuk meraih karir gemilang.
                </p>
            </div>
        </div>
    </section><br><br>
    <section class="block lg:hidden px-6 py-14" style="background-color: #4c17dd;">
    <div class="text-center mb-6">
        <h2 class="text-white text-2xl font-bold">Fasilitas Jurusan</h2>
        <p class="text-white text-sm mt-2">
            Jurusan MP memiliki fasilitas lengkap yang mendukung pembelajaran manajemen perkantoran dan praktik administrasi modern.
        </p>
    </div>

    <div id="slider-mobile-fas" class="flex gap-3 snap-x snap-mandatory overflow-hidden scroll-smooth">
        @foreach ([['fas1' => 'Lab Komputer', 'fas2' => 'Kantor Jurusan'], ['fas3' => 'Lab Public Speaking']] as $pair)
            <div class="shrink-0 w-full snap-start">
                <div class="grid grid-cols-2 gap-3">
                    @foreach ($pair as $img => $label)
                        <figure class="relative rounded-xl overflow-hidden shadow group aspect-[4/3]">
                            <img src="{{ asset('image/mp/' . $img . '.png') }}" alt="{{ $label }}"
                                class="w-full h-full object-cover transition duration-500 group-hover:scale-105" />
                            <div
                                class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition duration-500 flex items-center justify-center">
                                <span class="text-white text-base font-semibold">{{ $label }}</span>
                            </div>
                        </figure>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>

    <!-- Dots -->
    <div id="dots-mobile-fas" class="flex justify-center mt-5 gap-2"></div>
</section>

<!-- === DESKTOP === -->
<section
    class="hidden lg:block px-10 py-20 mt-12 py-[120px] bg-cover bg-center bg-no-repeat w-full min-h-[500px]"
    style="background-image: url('{{ asset('image/mp/fasmp.png') }}')">
    <div class="flex items-start gap-10">
        <!-- Teks -->
        <div class="w-1/3 mt-28">
            <h2 class="text-white text-3xl font-bold mb-4 -mt-10">Fasilitas Jurusan</h2>
            <p class="text-white leading-relaxed">
                Jurusan MP memiliki fasilitas lengkap yang mendukung pembelajaran administrasi perkantoran modern,
                dengan ruang praktik, laboratorium komputer, serta perangkat perkantoran terkini untuk mendukung proses belajar.
            </p>
        </div>

        <!-- Slider -->
        <div class="w-2/3 relative overflow-hidden">
            <div id="slider-desktop-fas" class="flex gap-4 snap-x snap-mandatory overflow-hidden scroll-smooth">
            @foreach ([['fas1' => 'Lab Komputer', 'fas2' => 'Kantor Jurusan'], ['fas3' => 'Lab Public Speaking']] as $pair)
                    <div class="shrink-0 w-full max-w-[850px] snap-start">
                        <div class="grid grid-cols-2 gap-4">
                            @foreach ($pair as $img => $label)
                                <figure class="relative rounded-xl overflow-hidden shadow group aspect-[4/3]">
                                    <img src="{{ asset('image/mp/' . $img . '.png') }}" alt="{{ $label }}"
                                        class="w-full h-full object-cover transition duration-500 group-hover:scale-105" />
                                    <div
                                        class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition duration-500 flex items-center justify-center">
                                        <span class="text-white text-xl font-semibold">{{ $label }}</span>
                                    </div>
                                </figure>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Dots -->
            <div id="dots-desktop-fas" class="flex justify-center mt-5 gap-2"></div>
        </div>
    </div>
</section>

<!-- === SLIDER SCRIPT === -->
<script>
    function initSlider(sliderId, dotsId, interval = 4000) {
        const slider = document.getElementById(sliderId);
        const dotsContainer = document.getElementById(dotsId);
        const slides = slider.children;
        let index = 0;

        // Buat titik indikator
        for (let i = 0; i < slides.length; i++) {
            const dot = document.createElement('div');
            dot.className = 'h-3 w-3 rounded-full bg-white/50 transition-all duration-300';
            dotsContainer.appendChild(dot);
        }

        const dots = dotsContainer.children;

        function updateDots() {
            for (let i = 0; i < dots.length; i++) {
                dots[i].className = i === index ?
                    'h-3 w-6 rounded-full bg-white transition-all duration-300' :
                    'h-3 w-3 rounded-full bg-white/50 transition-all duration-300';
            }
        }

        updateDots();

        // Auto-scroll tiap interval
        setInterval(() => {
            index = (index + 1) % slides.length;
            slider.scrollTo({
                left: slides[index].offsetLeft,
                behavior: 'smooth'
            });
            updateDots();
        }, interval);
    }

    initSlider('slider-desktop-fas', 'dots-desktop-fas', 4000);
    initSlider('slider-mobile-fas', 'dots-mobile-fas', 3500);
</script>

    <section class="bg-[#f5f5f5] py-20">
        <div class="max-w-7xl mx-auto flex flex-col lg:flex-row items-center justify-between gap-14 px-6">

            <!-- BAGIAN KIRI -->
            <div class="relative flex justify-center lg:w-1/2">
                <!-- Gambar utama -->
                <div class="relative">
                    <img src="{{ asset('image/mp/gambarhsja.png') }}"
                        class="rounded-3xl w-[360px] h-[440px] object-cover shadow-xl" alt="main">

                    <!-- Gambar kiri atas -->
                    <img src="{{ asset('image/mp/kiriatas.png') }}"
                        class="absolute -top-10 -left-12 w-[160px] h-[180px] rounded-2xl object-cover border-[6px] border-[#f5f5f5] shadow-lg"
                        alt="top">

                    <!-- Gambar kanan bawah -->
                    <img src="{{ asset('image/mp/logohsjp.png') }}"
                        class="absolute -bottom-10 -right-10 w-[150px] h-[150px] rounded-2xl object-cover  shadow-lg z-20"
                        alt="bottom">

                    <!-- Kotak merah -->
                    <div
                        class="absolute -bottom-16 left-0 bg-gradient-to-r from-[#4D4FF5] to-[#7A44F9] rounded-[20px] px-6 py-5 flex items-center gap-3 shadow-lg w-96 z-10">
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
            <div class="lg:w-1/2 space-y-7">
                <h2 class="text-4xl font-extrabold text-gray-900 leading-tight"><br>
                    Himpunan Siswa <br> Jurusan Perkantoran
                </h2>
                <p class="text-gray-700 leading-relaxed text-[16px]">
                    Himpunan Siswa Jurusan Perkantoran SMKN 6 Jember menjadi wadah kreatif bagi siswa untuk berkembang
                    melalui kegiatan menarik seperti pelatihan administrasi digital, six’s barber, public speaking, dan
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
                                <img src="{{ asset('image/mp/Layer_1_1_.png') }}" alt="Bag Icon"
                                    class="w-full h-full object-contain">
                            </div>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Layanan Jasa & Administrasi</h4>
                            <p class="text-gray-500 text-sm">Mengelola usaha jurusan seperti Six Beauty, Six Barber, dan
                                jasa printing </p>
                        </div>
                    </div>

                    <div
                        class="flex items-start bg-white rounded-2xl border border-gray-200 shadow-sm p-5 gap-4 hover:shadow-md transition">
                        <div class="bg-gradient-to-r from-[#4D4FF5] to-[#7A44F9] text-white p-3 rounded-full">
                            <div class="w-5 h-5">
                                <img src="{{ asset('image/mp/Vector (3).png') }}" alt="Bag Icon"
                                    class="w-full h-full object-contain">
                            </div>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Entrepreneurship & Service</h4>
                            <p class="text-gray-500 text-sm">Membangun jiwa wirausaha sekaligus melatih keterampilan
                                pelayanan kantor .</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section class="performance">
        <h2 class="font-bold text-center text-2xl mb-6 mt-16">Galeri Dan Prestasi</h2>

        <!-- Grid -->
        <section class="grid grid-cols-1 md:grid-cols-2 gap-6 px-4 md:px-8">
            <!-- Card 1 -->
            <div class="rounded-xl shadow overflow-hidden w-full aspect-[4/3]">
                <img src="{{ asset('image/mp/pres1.png') }}" alt="Prestasi 1" class="w-full h-full object-cover">
            </div>

            <!-- Card 2 -->
            <div class="rounded-xl shadow overflow-hidden w-full aspect-[4/3]">
                <img src="{{ asset('image/mp/pres2.png') }}" alt="Prestasi 2" class="w-full h-full object-cover">
            </div>

            <!-- Card 3 -->
            <div class="rounded-xl shadow overflow-hidden w-full aspect-[4/3]">
                <img src="{{ asset('image/mp/ctamp.png') }}" alt="Prestasi 4" class="w-full h-full object-cover">
            </div>

            <!-- Card 4 -->
            <div class="rounded-xl shadow overflow-hidden w-full aspect-[4/3]">
                <img src="{{ asset('image/mp/pres3.png') }}" alt="Prestasi 3" class="w-full h-full object-cover">
            </div>
        </section>
    </section>

    <br><br><br>
    </section>
    <section class="cta mt-8">
        <h2 class="text-center text-white text-2xl font-bold pt-80">Bersama kami, wujudkan masa depanmu! Bergabunglah
            <br>
            dengan Jurusan kami dan raih peluang terbaik untuk <br>
            karier gemilang.
        </h2><br>
        <div class="cta-btn">
            <a href="https://www.instagram.com/mp_skanamber/" class="btn1">Selengkapnya</a>
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
                frame.src = "https://www.youtube.com/embed/irj6UOuIb3w?autoplay=1&rel=0";
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
