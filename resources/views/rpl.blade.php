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
            style="background-image: url('image/rpl/herorpl.png'); width:100%; height:110vh;">
            <!-- Teks -->
            <div class="flex-1 mb-10 md:mb-0 ml-40">
                <h1 class="text-4xl md:text-1xl font-bold mb-5">Selamat Datang <br>
                    di RPL SMKN 6 Jember
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
        <!-- === MOBILE + TABLET === -->
        <section id="about" class="block lg:hidden bg-white py-10 px-6">
            <div class="flex flex-col items-center text-center">
                <p class="text-red-500 font-semibold text-sm mb-1">Profil Jurusan</p>
                <h2 class="text-2xl font-bold mb-4">Tentang Jurusan</h2>
                <p class="text-gray-700 mb-5 text-sm leading-relaxed">
                    Jurusan Rekayasa Perangkat Lunak di SMKN 6 Jember merupakan bagian dari bidang keahlian Teknologi
                    Informasi dengan fokus pada pembuatan software dan game digital.
                </p>

                <button onclick="openVideoModal()" class="bg-red-500 text-white text-sm px-4 py-2 rounded-md mb-8">
                    Tonton Video Profil
                </button>

                <!-- Foto Ketua Jurusan -->
                <div class="relative w-60 h-72">
                    <div class="bg-gray-300 w-full h-full rounded-xl overflow-hidden bg-cover bg-center"
                        style="background-image: url('{{ asset('image/rpl/guru1.png') }}')">
                        <div
                            class="absolute bottom-0 left-0 bg-red-500 text-white text-xs font-bold px-3 py-1 rounded-tr-lg">
                            Ketua Jurusan RPL
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- === DESKTOP === -->
        <section id="about" class="hidden lg:block bg-white py-20 px-12">
            <div class="flex items-start justify-between gap-12 m-auto max-w-[900px] w-full">
                <!-- Kiri (Teks) -->
                <div class="w-1/2 space-y-5">
                    <p class="text-red-500 font-semibold text-sm">Profil Jurusan</p>
                    <h2 class="text-3xl font-bold">Tentang Jurusan</h2>
                    <p class="text-gray-700 leading-relaxed">
                        Jurusan Rekayasa Perangkat Lunak di SMKN 6 Jember merupakan bagian dari bidang keahlian Teknologi
                        Informasi dengan fokus pada pembuatan software dan game digital.
                    </p>
                    <button onclick="openVideoModal()" class="bg-red-500 text-white text-sm px-4 py-2 rounded-md">
                        Tonton Video Profil
                    </button>
                </div>

                <!-- Kanan (Card) -->
                <div class="relative w-64 h-80">
                    <div class="bg-gray-300 w-full h-full rounded-bl-xl overflow-hidden relative bg-cover bg-center"
                        style="background-image: url('{{ asset('image/rpl/guru1.png') }}')">
                        <div
                            class="absolute bottom-0 left-0 bg-red-500 text-white text-sm font-bold px-4 py-2 rounded-tr-lg">
                            Ketua Jurusan RPL
                        </div>
                    </div>

                    <div class="absolute top-0 right-0 bg-red-500 w-16 h-20 rounded-lg red-box"></div>

                    <div class="absolute top-1/3 right-[-20px] flex flex-col gap-2">
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
        </section>


        <!-- === MODAL VIDEO === -->
        <div id="videoModal" class="fixed inset-0 bg-black bg-opacity-70 hidden items-center justify-center z-50">
            <div class="bg-white rounded-lg overflow-hidden w-[90%] md:w-[60%] relative">
                <button onclick="closeVideoModal()"
                    class="absolute top-3 right-3 text-gray-600 hover:text-black text-2xl font-bold">&times;</button>
                <div class="aspect-w-16 aspect-h-9">
                    <iframe id="videoFrame" class="w-full h-[400px]" src="" frameborder="0"
                        allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <script>
            function openVideoModal() {
                const modal = document.getElementById('videoModal');
                const frame = document.getElementById('videoFrame');
                modal.classList.remove('hidden');
                frame.src = 'https://www.youtube.com/embed/YOUR_VIDEO_ID?autoplay=1';
            }

            function closeVideoModal() {
                const modal = document.getElementById('videoModal');
                const frame = document.getElementById('videoFrame');
                modal.classList.add('hidden');
                frame.src = '';
            }
        </script>

        <br><br>
        <section class="max-w-6xl mx-auto px-6 py-12 grid md:grid-cols-2 gap-8 items-center">
            <!-- === KIRI: CARD === -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 max-w-4xl">
                <!-- Card 1 -->
                <div class="relative bg-red-500 text-white rounded-xl p-6 shadow-md h-[36vh]">
                    <div
                        class="absolute -top-6 left-6 w-20 h-20 rounded-full bg-white flex items-center justify-center shadow">
                        <img src="{{ asset('image/rpl/benefit1 (1).png') }}" alt="icon" class="w-[55px] h-[55px]">
                    </div>
                    <h3 class="font-bold text-lg mt-12">Peluang Karir Luas</h3>
                    <p class="mt-2 text-sm">Buka jalan ke profesi masa depan yang menjanjikan.</p>
                </div>

                <!-- Card 2 -->
                <div class="relative bg-white rounded-xl p-6 shadow-md mt-7 h-[36vh]">
                    <div
                        class="absolute -top-6 left-6 w-20 h-20 rounded-full bg-white flex items-center justify-center shadow">
                        <img src="{{ asset('image/rpl/benefit1 (2).png') }}" alt="icon" class="w-[55px] h-[55px]">
                    </div>
                    <h3 class="font-bold text-lg text-blue-900 mt-12">Keterampilan yang Dibutuhkan</h3>
                    <p class="mt-2 text-sm text-gray-600">Kuasi skill paling dicari industri saat ini.</p>
                </div>

                <!-- Card 3 -->
                <div class="relative bg-white rounded-xl p-6 shadow-md h-[35vh] -mt-4">
                    <div
                        class="absolute -top-6 left-6 w-20 h-20 rounded-full bg-white flex items-center justify-center shadow">
                        <img src="{{ asset('image/rpl/benefit1 (3).png') }}" alt="icon" class="w-[64px] h-[55px]">
                    </div>
                    <h3 class="font-bold text-lg text-blue-900 mt-12">Selalu Update Teknologi</h3>
                    <p class="mt-2 text-sm text-gray-600">Belajar teknologi terbaru biar selalu up-to-date.</p>
                </div>

                <!-- Card 4 -->
                <div class="relative bg-white rounded-xl p-6 shadow-md mt-6 h-[33vh]">
                    <div
                        class="absolute -top-6 left-6 w-20 h-20 rounded-full bg-white flex items-center justify-center shadow">
                        <img src="{{ asset('image/rpl/benefit1 (4).png') }}" alt="icon" class="w-[60px] h-[55px]">
                    </div>
                    <h3 class="font-bold text-lg text-blue-900 mt-12">Fleksibel</h3>
                    <p class="mt-2 text-sm text-gray-600">Belajar kapan saja, di mana saja, dengan cara seru.</p>
                </div>
            </div>

            <!-- === KANAN: TEKS === -->
            <div class="mt-12 md:mt-0 text-center md:text-left md:ml-8">
                <h2 class="text-2xl font-bold mb-4 md:mt-[-5rem]">Benefit yang Didapat</h2>
                <p class="text-gray-600 text-sm md:text-base leading-relaxed">
                    Siap-siap jadi keren di masa depan! Di sini kamu<br class="hidden md:block">
                    bakal dapat semuanya: kesempatan karier yang luas<br class="hidden md:block">
                    dan keren, skill yang paling dicari, materi yang selalu<br class="hidden md:block">
                    update sama teknologi, plus bisa belajar dengan<br class="hidden md:block">
                    fleksibel. Dijamin seru dan bermanfaat!
                </p>
            </div>
        </section>

        <br><br><br><br>


<!-- === MOBILE + TABLET === -->
<section class="block lg:hidden bg-red-500 px-6 py-14">
  <div class="text-center mb-6">
    <h2 class="text-white text-2xl font-bold">Fasilitas Jurusan</h2>
    <p class="text-white text-sm mt-2">
      Jurusan RPL memiliki fasilitas lengkap yang mendukung pembelajaran teknologi dan praktik software.
    </p>
  </div>

  <div id="slider-mobile-fas" class="flex gap-3 snap-x snap-mandatory overflow-hidden scroll-smooth">
    @foreach ([
      ['fas1'=>'Lab RPL','fas2'=>'Teaching Factory'],
      ['fas3'=>'Kelas Industri']
    ] as $pair)
    <div class="shrink-0 w-full snap-start">
      <div class="grid grid-cols-2 gap-3">
        @foreach ($pair as $img => $label)
        <figure class="relative rounded-xl overflow-hidden shadow group aspect-[4/3]">
          <img src="{{ asset('image/rpl/'.$img.'.png') }}" alt="{{ $label }}"
               class="w-full h-full object-cover transition duration-500 group-hover:scale-105" />
          <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition duration-500 flex items-center justify-center">
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
<section class="hidden lg:block px-10 py-20 mt-12" style="background-image: url('{{ asset('image/rpl/fasilitasrpl.png') }}')">
  <div class="flex items-start gap-10">
    <!-- Teks -->
    <div class="w-1/3 mt-28">
      <h2 class="text-white text-3xl font-bold mb-4">Fasilitas Jurusan</h2>
      <p class="text-white leading-relaxed">
        Jurusan RPL memiliki fasilitas lengkap yang mendukung pembelajaran teknologi,
        dilengkapi perangkat dan software terbaru untuk menunjang proses belajar.
      </p>
    </div>

    <!-- Slider -->
    <div class="w-2/3 relative overflow-hidden">
      <div id="slider-desktop-fas"
           class="flex gap-4 snap-x snap-mandatory overflow-hidden scroll-smooth">
        @foreach ([
          ['fas1'=>'Lab RPL','fas2'=>'Teaching Factory'],
          ['fas3'=>'Kelas Industri']
        ] as $pair)
        <div class="shrink-0 w-full max-w-[850px] snap-start">
          <div class="grid grid-cols-2 gap-4">
            @foreach ($pair as $img => $label)
            <figure class="relative rounded-xl overflow-hidden shadow group aspect-[4/3]">
              <img src="{{ asset('image/rpl/'.$img.'.png') }}" alt="{{ $label }}"
                   class="w-full h-full object-cover transition duration-500 group-hover:scale-105" />
              <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition duration-500 flex items-center justify-center">
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
        dots[i].className = i === index
          ? 'h-3 w-6 rounded-full bg-white transition-all duration-300'
          : 'h-3 w-3 rounded-full bg-white/50 transition-all duration-300';
      }
    }

    updateDots();

    // Auto-scroll tiap interval
    setInterval(() => {
      index = (index + 1) % slides.length;
      slider.scrollTo({ left: slides[index].offsetLeft, behavior: 'smooth' });
      updateDots();
    }, interval);
  }

  initSlider('slider-desktop-fas', 'dots-desktop-fas', 4000);
  initSlider('slider-mobile-fas', 'dots-mobile-fas', 3500);
</script>

<section class="bg-[#f5f5f5] py-16 md:py-20">
    <div class="max-w-7xl mx-auto flex flex-col lg:flex-row items-center justify-between gap-14 px-4 sm:px-6 lg:px-12">

        <!-- BAGIAN KIRI -->
        <div class="relative flex justify-center lg:w-1/2">
            <div class="relative">
                <!-- Gambar utama -->
                <img src="{{ asset('image/rpl/gambarhsjr.png') }}"
                    class="rounded-3xl w-[260px] sm:w-[320px] md:w-[360px] h-[320px] sm:h-[400px] md:h-[440px] object-cover shadow-xl"
                    alt="main">

                <!-- Gambar kiri atas -->
                <img src="{{ asset('image/rpl/gambaratas.png') }}"
                    class="absolute -top-6 sm:-top-10 -left-6 sm:-left-12 w-[100px] sm:w-[140px] md:w-[160px] h-[110px] sm:h-[160px] md:h-[180px] rounded-2xl object-cover border-[4px] sm:border-[6px] border-[#f5f5f5] shadow-lg"
                    alt="top">

                <!-- Gambar kanan bawah -->
                <img src="{{ asset('image/rpl/logohsjr.png') }}"
                    class="absolute -bottom-8 sm:-bottom-10 -right-6 sm:-right-10 w-[100px] sm:w-[130px] md:w-[150px] h-[100px] sm:h-[130px] md:h-[150px] object-cover shadow-lg z-20"
                    alt="bottom">

                <!-- Kotak merah -->
                <div
                    class="absolute -bottom-14 sm:-bottom-16 left-0 bg-gradient-to-r from-[#F92626] to-[#D24747] rounded-[16px] sm:rounded-[20px] px-4 sm:px-6 py-4 sm:py-5 flex items-center gap-3 shadow-lg w-[90%] sm:w-80 md:w-96 z-10">
                    <div class="bg-white rounded p-2 sm:p-3 z-10">
                        <img src="{{ asset('image/rpl/frame.png') }}" alt="Icon" class="w-6 sm:w-7 h-6 sm:h-8">
                    </div>
                    <div>
                        <h3 class="text-white font-extrabold text-lg sm:text-xl leading-none">1.000+</h3>
                        <p class="text-white text-xs sm:text-sm mt-1">Siswa Unggul</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- BAGIAN KANAN -->
        <div class="lg:w-1/2 space-y-6 sm:space-y-7 text-center lg:text-left">
            <h2 class="text-2xl mt-12 sm:text-3xl md:text-4xl font-extrabold text-gray-900 leading-tight">
                Himpunan Siswa <br class="hidden sm:block"> Jurusan RPL
            </h2>

            <p class="text-gray-700 leading-relaxed text-sm sm:text-base md:text-[16px] px-2 sm:px-0">
                Himpunan Siswa Jurusan RPL SMKN 6 Jember merupakan organisasi yang mewadahi siswa berjiwa teknologi
                dan inovasi. Melalui kegiatan seperti coding competition, workshop web dan mobile, pelatihan UI/UX,
                serta project kolaboratif, organisasi ini mencetak generasi programmer muda yang kreatif, kritis,
                dan siap menghadapi tantangan dunia digital masa depan.
            </p>

            <!-- CARD LOWONGAN -->
            <div class="space-y-4">
                <div
                    class="flex items-start bg-white rounded-2xl border border-gray-200 shadow-sm p-4 sm:p-5 gap-3 sm:gap-4 hover:shadow-md transition text-left">
                    <div class="bg-gradient-to-r from-[#F92626] to-[#D24747] text-white p-2 sm:p-3 rounded-full">
                        <div class="w-4 h-4 sm:w-5 sm:h-5">
                            <img src="{{ asset('image/rpl/Vector.png') }}" alt="Bag Icon"
                                class="w-full h-full object-contain">
                        </div>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-900 text-sm sm:text-base">Pelatihan Skill RPL</h4>
                        <p class="text-gray-500 text-xs sm:text-sm">Kembangkan kemampuan melalui pelatihan dan workshop
                            teknologi terkini.</p>
                    </div>
                </div>

                <div
                    class="flex items-start bg-white rounded-2xl border border-gray-200 shadow-sm p-4 sm:p-5 gap-3 sm:gap-4 hover:shadow-md transition text-left">
                    <div class="bg-gradient-to-r from-[#F92626] to-[#D24747] text-white p-2 sm:p-3 rounded-full">
                        <div class="w-4 h-4 sm:w-5 sm:h-5">
                            <img src="{{ asset('image/rpl/Group.png') }}" alt="Bag Icon"
                                class="w-full h-full object-contain">
                        </div>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-900 text-sm sm:text-base">Pengalaman Kepanitiaan</h4>
                        <p class="text-gray-500 text-xs sm:text-sm">Belajar kerja tim dan kepemimpinan lewat berbagai event
                            internal RPL.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


        <br><br>
<section class="performance py-16 bg-[#f5f5f5]">
  <h2 class="font-bold text-center text-2xl md:text-3xl mb-8">Galeri dan Prestasi</h2>

  <!-- Grid -->
  <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6 px-4 md:px-8">
    <!-- Card 1 -->
    <div class="relative group rounded-xl shadow overflow-hidden w-full aspect-[4/3] cursor-pointer">
      <img src="{{ asset('image/rpl/pres1.png') }}" alt="Prestasi 1" class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
      <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition duration-500 flex items-center justify-center">
        <p class="text-white text-center px-4 text-sm sm:text-base font-medium">Juara 1 Lomba Web Development Nasional</p>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="relative group rounded-xl shadow overflow-hidden w-full aspect-[4/3] cursor-pointer">
      <img src="{{ asset('image/rpl/pres2.png') }}" alt="Prestasi 2" class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
      <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition duration-500 flex items-center justify-center">
        <p class="text-white text-center px-4 text-sm sm:text-base font-medium">Karya Aplikasi Unggulan Siswa RPL</p>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="relative group rounded-xl shadow overflow-hidden w-full aspect-[4/3] cursor-pointer">
      <img src="{{ asset('image/rpl/pres3.png') }}" alt="Prestasi 3" class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
      <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition duration-500 flex items-center justify-center">
        <p class="text-white text-center px-4 text-sm sm:text-base font-medium">Juara Favorit Desain UI/UX Se-Jawa Timur</p>
      </div>
    </div>

    <!-- Card 4 -->
    <div class="relative group rounded-xl shadow overflow-hidden w-full aspect-[4/3] cursor-pointer">
      <img src="{{ asset('image/rpl/pres4.png') }}" alt="Prestasi 4" class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
      <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition duration-500 flex items-center justify-center">
        <p class="text-white text-center px-4 text-sm sm:text-base font-medium">Proyek Inovasi Digital Siswa RPL</p>
      </div>
    </div>
  </section>
</section>

        <br><br><br><br>
        <section class="cta mt-8">
            <h2 class="text-center text-white text-2xl font-bold pt-80">Bersama kami, wujudkan masa depanmu! Bergabunglah
                <br>
                dengan Jurusan kami dan raih peluang terbaik untuk <br>
                karier gemilang.
            </h2><br>
            <div class="cta-btn">
                <a href="https://www.instagram.com/rplsmkn6jember/" class="btn1">
                    Selengkapnya
                </a>
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
                    frame.src = "https://www.youtube.com/embed/9mQOKXHDnYw";
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
