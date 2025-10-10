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
        }

        .card-profile {
            margin-right: 8rem;
        }

        .title-box {
            background: linear-gradient(to right, #3C71F8, #24437C);
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
        
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }

        /* Simple gradient helpers */
        .btn-grad {
          background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 50%, #0ea5e9 100%);
        }
        .card-grad-1 { background: linear-gradient(135deg, #e0e7ff 0%, #fff 35%); }
        .card-grad-2 { background: linear-gradient(135deg, #dbeafe 0%, #fff 35%); }
        .card-grad-3 { background: linear-gradient(135deg, #e0f2fe 0%, #fff 35%); }

        /* Slide animation */
        .fade-in { animation: fade .4s ease-out; }
        @keyframes fade { from {opacity:.6; transform: translateY(6px)} to {opacity:1; transform: translateY(0)} }
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
                <a href="https://youtu.be/ubqR8YJGiSQ"
                    class="bg-red-500 text-white text-sm px-3 py-2 rounded-md btn">
                    Tonton Video Profil
                </a>
            </div>

            <!-- Bagian kanan (ilustrasi kotak) -->
            <div class="relative w-64 h-80 card-profile">
                <!-- Card Utama -->
                <div class="bg-gray-300 w-full h-full rounded-bl-xl overflow-hidden relative bg-cover bg-center"
                    style="background-image: url('{{ asset('image/rpl/Rectangle 4248 (1).png') }}')">
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

    <!-- Slider Section - Centered -->
    <section class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-10">
        <div class="mb-6 text-center">
            <p class="text-primary font-semibold">Jurusan di sekolah</p>
            <h2 class="text-3xl sm:text-4xl font-extrabold leading-tight mt-2">
                Pilih Jurusan Sesuai Minat Anda
            </h2>
        </div>

        <!-- Slider wrapper - Centered -->
        <div class="relative flex justify-center">
            <!-- Prev Button -->
            <button id="btnPrev"
                class="absolute -left-2 sm:-left-4 top-1/2 -translate-y-1/2 z-10 size-11 sm:size-12 grid place-items-center rounded-full bg-white shadow-smooth ring-1 ring-slate-200 hover:ring-primary/40 hover:shadow-md transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-5 text-slate-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M15 18l-6-6 6-6"/>
                </svg>
            </button>

            <!-- Next Button -->
            <button id="btnNext"
                class="absolute -right-2 sm:-right-4 top-1/2 -translate-y-1/2 z-10 size-11 sm:size-12 grid place-items-center rounded-full bg-white shadow-smooth ring-1 ring-slate-200 hover:ring-primary/40 hover:shadow-md transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-5 text-slate-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M9 6l6 6-6 6"/>
                </svg>
            </button>

            <!-- Track - Centered -->
            <div id="track"
                 class="no-scrollbar overflow-x-auto scroll-smooth snap-x snap-mandatory flex gap-6 sm:gap-8 pb-3 justify-center">
                <!-- Slide 1 -->
                <article class="min-w-[85%] sm:min-w-[46%] lg:min-w-[31%] snap-start rounded-2xl bg-white shadow-smooth ring-1 ring-slate-100 fade-in">
                    <div class="card-grad-1 rounded-t-2xl overflow-hidden">
                        <!-- header image placeholder -->
                        <div class="h-48 sm:h-56 bg-cover bg-center"
                             style="background-image: radial-gradient( circle at 30% 20%, #991b1b 0%, #7f1d1d 40%, #111827 100%)"></div>

                        <!-- badge -->
                        <div class="-mt-5 px-5">
                            <span class="inline-block px-4 py-2 rounded-full bg-rose-600 text-white text-sm font-semibold shadow">
                                Rekayasa Perangkat Lunak
                            </span>
                        </div>
                    </div>

                    <div class="p-5 sm:p-6">
                        <p class="text-slate-700 leading-relaxed">
                            Jurusan RPL adalah bidang di SMK yang mempelajari pembuatan dan pengembangan perangkat lunak untuk mencetak tenaga IT profesional.
                        </p>
                    </div>

                    <div class="p-5 sm:p-6">
                        <a href="#rpl" class="btn-grad w-full inline-flex items-center justify-center gap-2 text-white font-semibold py-3 rounded-xl transition hover:opacity-95">
                            Selengkapnya
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M5 12h14M12 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                </article>

                <!-- Slide 2 -->
                <article class="min-w-[85%] sm:min-w-[46%] lg:min-w-[31%] snap-start rounded-2xl bg-white shadow-smooth ring-1 ring-slate-100 fade-in">
                    <div class="card-grad-2 rounded-t-2xl overflow-hidden">
                        <div class="h-48 sm:h-56 bg-cover bg-center"
                             style="background-image: radial-gradient(circle at 70% 30%, #334155 0%, #0f172a 70%)"></div>

                        <div class="-mt-5 px-5">
                            <span class="inline-block px-4 py-2 rounded-full bg-orange-600 text-white text-sm font-semibold shadow">
                                Bisnis Digital
                            </span>
                        </div>
                    </div>

                    <div class="p-5 sm:p-6">
                        <p class="text-slate-700 leading-relaxed">
                            Jurusan Bisnis Digital mempersiapkan siswa mengelola bisnis digital, membuka peluang wirausaha, dan mencetak profesional siap pakai.
                        </p>
                    </div>

                    <div class="p-5 sm:p-6">
                        <a href="#bisnis" class="btn-grad w-full inline-flex items-center justify-center gap-2 text-white font-semibold py-3 rounded-xl transition hover:opacity-95">
                            Selengkapnya
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M5 12h14M12 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                </article>

                <!-- Slide 3 -->
                <article class="min-w-[85%] sm:min-w-[46%] lg:min-w-[31%] snap-start rounded-2xl bg-white shadow-smooth ring-1 ring-slate-100 fade-in">
                    <div class="card-grad-3 rounded-t-2xl overflow-hidden">
                        <div class="h-48 sm:h-56 bg-cover bg-center"
                             style="background-image: radial-gradient(circle at 60% 20%, #0ea5e9 0%, #0369a1 50%, #0f172a 100%)"></div>

                        <div class="-mt-5 px-5">
                            <span class="inline-block px-4 py-2 rounded-full bg-emerald-600 text-white text-sm font-semibold shadow">
                                Akuntansi
                            </span>
                        </div>
                    </div>

                    <div class="p-5 sm:p-6">
                        <p class="text-slate-700 leading-relaxed">
                            Jurusan Akuntansi SMK mempelajari pencatatan dan pelaporan keuangan untuk mendukung keputusan bisnis.
                        </p>
                    </div>

                    <div class="p-5 sm:p-6">
                        <a href="#akuntansi" class="btn-grad w-full inline-flex items-center justify-center gap-2 text-white font-semibold py-3 rounded-xl transition hover:opacity-95">
                            Selengkapnya
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M5 12h14M12 5l7 7-7 7"/>
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
                <img src="https://via.placeholder.com/800x450" alt="Berita Utama" class="w-full h-64 md:h-80 object-cover">
                <div class="des p-6">
                    <div class="flex justify-between items-center mb-3">
                        <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded">Prestasi</span>
                        <span class="text-gray-500 text-sm">12 Mei 2023</span>
                    </div>
                    <h1 class="text-2xl md:text-3xl font-bold text-gray-800 mb-4">Siswa SMKN 6 Jember Raih Juara 1 Kompetisi Nasional</h1>
                    <p class="text-gray-600 mb-4">Tim siswa SMKN 6 Jember berhasil meraih juara pertama dalam kompetisi teknologi informasi tingkat nasional yang diikuti oleh lebih dari 100 sekolah se-Indonesia.</p>
                    <p class="text-gray-600 mb-6">Kompetisi yang berlangsung selama tiga hari ini menguji berbagai aspek kemampuan siswa dalam bidang teknologi informasi, mulai dari pemrograman, jaringan, hingga pengembangan aplikasi.</p>
                    <a href="#" class="text-blue-600 font-medium hover:text-blue-800 inline-flex items-center">
                        Baca selengkapnya <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>

            <!-- Konten kanan -->
            <div class="kontenn lg:w-1/3 flex flex-col gap-6">
                <!-- Card 1 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:shadow-lg hover:-translate-y-1">
                    <img src="https://via.placeholder.com/600x400" alt="Universitas Muhammadiyah" class="w-full h-48 object-cover">
                    <div class="p-5">
                        <div class="flex justify-between items-center mb-3">
                            <span class="bg-green-100 text-green-800 text-xs font-semibold px-2.5 py-0.5 rounded">Kegiatan</span>
                            <span class="text-gray-500 text-sm">10 Mei 2023</span>
                        </div>
                        <h3 class="text-lg font-bold text-gray-800 mb-2">Kerjasama dengan Universitas Muhammadiyah Jember</h3>
                        <p class="text-gray-600 mb-4">SMKN 6 Jember menjalin kerjasama dengan Universitas Muhammadiyah Jember dalam program pengembangan kurikulum dan magang siswa.</p>
                        <a href="#" class="text-blue-600 font-medium hover:text-blue-800 inline-flex items-center">
                            Baca selengkapnya <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:shadow-lg hover:-translate-y-1">
                    <img src="https://via.placeholder.com/600x400" alt="Juara Lomba EPIM" class="w-full h-48 object-cover">
                    <div class="p-5">
                        <div class="flex justify-between items-center mb-3">
                            <span class="bg-purple-100 text-purple-800 text-xs font-semibold px-2.5 py-0.5 rounded">Kompetisi</span>
                            <span class="text-gray-500 text-sm">8 Mei 2023</span>
                        </div>
                        <h3 class="text-lg font-bold text-gray-800 mb-2">Juara Lomba EPIM JTI Polije</h3>
                        <p class="text-gray-600 mb-4">Tim robotik SMKN 6 Jember berhasil meraih juara dalam lomba Electronic and Polytronics Innovation Match (EPIM) yang diselenggarakan oleh JTI Polije.</p>
                        <a href="#" class="text-blue-600 font-medium hover:text-blue-800 inline-flex items-center">
                            Baca selengkapnya <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
        
    <div
      class="min-h-screen flex flex-col items-center justify-center p-4 md:p-6 lg:p-8"
    >
      <div
        class="w-full max-w-4xl bg-white rounded-xl shadow-lg p-6 md:p-8 lg:p-10"
      >
        <h1
          class="text-2xl md:text-3xl font-bold text-center text-gray-800 mb-8"
        >
          Tracer Study
        </h1>

        <div
          class="flex flex-col lg:flex-row items-center justify-between gap-8"
        >
          <!-- Pie Chart -->
          <div class="w-full lg:w-1/2 flex justify-center">
            <div class="relative w-64 h-64 md:w-72 md:h-72">
              <canvas id="tracerChart"></canvas>
            </div>
          </div>

          <!-- Legend and Button -->
          <div class="w-full lg:w-1/2">
            <div class="space-y-4 mb-8">
              <div class="flex items-center">
                <div class="w-4 h-4 rounded-full bg-blue-500 mr-3"></div>
                <span class="text-gray-700"
                  >Siswa bekerja: <span class="font-semibold">62,5%</span></span
                >
              </div>
              <div class="flex items-center">
                <div class="w-4 h-4 rounded-full bg-green-500 mr-3"></div>
                <span class="text-gray-700"
                  >Siswa melanjutkan:
                  <span class="font-semibold">25%</span></span
                >
              </div>
              <div class="flex items-center">
                <div class="w-4 h-4 rounded-full bg-yellow-500 mr-3"></div>
                <span class="text-gray-700"
                  >Siswa wirausaha:
                  <span class="font-semibold">12,5%</span></span
                >
              </div>
            </div>
          </div>
        </div>
        <button
          class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-6 rounded-lg transition duration-300 w-full md:w-auto"
        >
          Selengkapnya
        </button>
      </div>
    </div>
    
    <div
      class="min-h-screen flex items-center justify-center p-4 md:p-6 lg:p-8"
    >
      <div
        class="w-full max-w-6xl bg-gradient-to-r from-blue-600 to-blue-400 rounded-2xl shadow-xl overflow-hidden"
      >
        <div class="flex flex-col lg:flex-row">
          <!-- Konten Kiri -->
          <div class="w-full lg:w-1/2 p-8 md:p-12 lg:p-16 text-white">
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">
              Siap Kerja? Temukan Peluangmu di BKK
            </h1>
            <p class="text-lg md:text-xl mb-8 opacity-90">
              SMKN 6 Jember menjembatani lulusan dengan dunia kerja melalui
              informasi lowongan, pelatihan, dan rekrutmen perusahaan mitra.
            </p>
            <div class="flex flex-col sm:flex-row gap-4">
              <button
                class="bg-white text-blue-600 hover:bg-gray-100 font-semibold py-3 px-6 rounded-lg transition duration-300 text-center"
              >
                Kunjungi BKK
              </button>
              <button
                class="bg-transparent border-2 border-white hover:bg-white/10 font-semibold py-3 px-6 rounded-lg transition duration-300 text-center"
              >
                Selengkapnya
              </button>
            </div>
          </div>

          <!-- Konten Kanan (Gambar) -->
          <div
            class="w-full lg:w-1/2 flex items-center justify-center p-6 md:p-8"
          >
            <div class="relative">
              <img
                src="https://picsum.photos/seed/students-working/600/400.jpg"
                alt="Students working"
                class="rounded-xl shadow-lg w-full max-w-md"
              />
              <div
                class="absolute -bottom-4 -right-4 bg-white p-2 rounded-lg shadow-lg"
              >
                <div class="flex items-center space-x-2">
                  <div class="bg-blue-100 p-2 rounded-full">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="h-6 w-6 text-blue-600"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                      />
                    </svg>
                  </div>
                  <span class="font-medium text-gray-800">Lowongan Kerja</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="font-poppins bg-gray-100 min-h-screen flex items-center justify-center p-4 md:p-8">
        <div class="container max-w-6xl w-full flex flex-col lg:flex-row gap-6 md:gap-8">
            <!-- Card Utama -->
            <div class="w-full lg:w-1/3">
                <div class="card-main bg-gradient-to-br from-blue-500 to-blue-700 text-white p-6 md:p-8 rounded-xl shadow-2xl flex flex-col gap-4 md:gap-6" style="min-height: 400px;">
                    <h3 class="text-lg md:text-xl font-light opacity-90">Kamu Lagi ada Masalah?</h3>
                    <h1 class="text-2xl md:text-3xl font-bold leading-tight">Yuk, konsultasi sekarang!</h1>
                    <div class="card-des flex flex-col gap-4">
                        <p class="text-blue-100 leading-relaxed">
                            Jangan biarkan masalahmu mengganggu harimu. Tim konselor kami siap mendengarkan dan membantu menemukan solusi terbaik untukmu.
                        </p>
                        <button class="self-start bg-white text-blue-600 hover:bg-blue-50 font-medium py-2.5 px-6 rounded-lg transition duration-300">
                            Selanjutnya
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Grid Card dengan pendekatan berbeda -->
            <div class="w-full lg:w-2/3 grid grid-cols-2 grid-rows-2 gap-4 md:gap-6" style="min-height: 400px;">
                <div class="rounded-xl overflow-hidden shadow-lg">
                    <img src="https://picsum.photos/seed/counseling1/600/400.jpg" alt="Konsultasi" class="w-full h-full object-cover">
                </div>
                <div class="rounded-xl overflow-hidden shadow-lg row-span-2">
                    <img src="https://picsum.photos/seed/counseling2/600/800.jpg" alt="Konseling" class="w-full h-full object-cover">
                </div>
                <div class="rounded-xl overflow-hidden shadow-lg row-span-2">
                    <img src="https://picsum.photos/seed/counseling3/600/800.jpg" alt="Sesi konseling" class="w-full h-full object-cover">
                </div>
                <div class="rounded-xl overflow-hidden shadow-lg">
                    <img src="https://picsum.photos/seed/counseling4/600/400.jpg" alt="Konselor" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </div>
    
    <div class="flex justify-center my-8">
        <div class="relative w-full max-w-4xl">
            <!-- Tombol Prev -->
            <button id="prevBtn"
                class="absolute left-3 top-1/2 -translate-y-1/2 z-20 grid place-items-center w-10 h-10 rounded-full bg-white/90 shadow hover:bg-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-slate-800" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path d="M15 18l-6-6 6-6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>

            <!-- Tombol Next -->
            <button id="nextBtn"
                class="absolute right-3 top-1/2 -translate-y-1/2 z-20 grid place-items-center w-10 h-10 rounded-full bg-white/90 shadow hover:bg-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-slate-800" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path d="M9 6l6 6-6 6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>

            <!-- Track -->
            <div id="track2" class="flex gap-4 px-4 py-4 overflow-x-auto snap-x snap-mandatory scroll-smooth no-scrollbar">
                
                <!-- Slide 1 -->
                <div class="shrink-0 w-[85%] sm:w-[78%] md:w-[92%] lg:w-[92%] snap-start mx-auto" style="width:850px; height:50vh;">
                    <div class="grid grid-cols-2 gap-3">
                        <figure class="relative col-span-2 sm:col-span-1 rounded-xl overflow-hidden shadow" style="height:50vh;">
                            <img class="w-full h-48 sm:h-56 md:h-64 object-cover" src="{{ asset('image/rpl/fas1.png') }}" style="height:50vh;">
                            <figcaption class="absolute left-4 top-4">
                                <span class="inline-flex rounded-e-2xl rounded-s-xl bg-red-600 text-white font-semibold px-4 py-2 shadow">
                                    Lab RPL
                                </span>
                            </figcaption>
                        </figure>
                        <figure class="relative col-span-2 sm:col-span-1 rounded-xl overflow-hidden shadow" style="height:50vh;">
                            <img class="w-full h-48 sm:h-56 md:h-64 object-cover" src="{{ asset('image/rpl/fas2.png') }}" style="height:50vh;">
                            <figcaption class="absolute left-4 top-4">
                                <span class="inline-flex rounded-e-2xl rounded-s-xl bg-red-600 text-white font-semibold px-4 py-2 shadow">
                                    Teaching Factory
                                </span>
                            </figcaption>
                        </figure>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="shrink-0 w-[85%] sm:w-[78%] md:w-[92%] lg:w-[92%] snap-start mx-auto" style="width:1000px; height:50vh;">
                    <div class="grid grid-cols-2 gap-3">
                        <figure class="relative col-span-2 sm:col-span-1 rounded-xl overflow-hidden shadow" style="height:50vh;">
                            <img class="w-full h-48 sm:h-56 md:h-64 object-cover" src="{{ asset('image/rpl/fas3.png') }}" style="height:50vh;">
                            <figcaption class="absolute left-4 top-4">
                                <span class="inline-flex rounded-e-2xl rounded-s-xl bg-red-600 text-white font-semibold px-4 py-2 shadow">
                                    Kelas
                                </span>
                            </figcaption>
                        </figure>
                    </div>
                </div>

            </div>
        </div>
    </div>
    
    <div class="flex-grow flex items-center justify-center p-4">
        <div class="max-w-6xl w-full bg-white rounded-2xl shadow-xl overflow-hidden">
            <div class="md:flex">
                <!-- Left Section with Image and Text -->
                <div class="md:w-1/2 bg-gradient-to-br from-blue-500 to-blue-700 p-8 flex flex-col items-center justify-center">
                    <h1 class="text-3xl font-bold text-white mb-8 text-center">Bergabunglah bersama kami dan wujudkan masa depan mu</h1>
                    <div class="relative">
                        <div class="absolute -inset-4 bg-blue-400 rounded-full opacity-20 blur-xl"></div>
                        <div class="relative bg-white p-4 rounded-xl shadow-lg">
                            <img src="https://z-cdn-media.chatglm.cn/files/12e2b92c-6dc5-4a13-85e0-b61c6ed252fd_pasted_image_1759187173153.png?auth_key=1790723189-6589604663c7496ba05b9fb79a12ccb-0-867ac09b110bf7fa4413bf12cf8ef096" alt="Students working together" class="rounded-lg">
                        </div>
                    </div>
                </div>
                
                <!-- Right Section with Form -->
                <div class="md:w-1/2 p-8 md:p-12">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-6">Ada Pertanyaan? Hubungi Kami</h2>
                    
                    <form class="space-y-6">
                        <div>
                            <label for="name" class="block text-gray-700 mb-2">Nama</label>
                            <input type="text" id="name" name="name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition" placeholder="Nama lengkap Anda">
                        </div>
                        
                        <div>
                            <label for="email" class="block text-gray-700 mb-2">Email</label>
                            <input type="email" id="email" name="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition" placeholder="alamat@email.com">
                        </div>
                        
                        <div>
                            <label for="phone" class="block text-gray-700 mb-2">Telepon</label>
                            <input type="tel" id="phone" name="phone" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition" placeholder="Nomor telepon Anda">
                        </div>
                        
                        <div>
                            <label for="message" class="block text-gray-700 mb-2">Pesan</label>
                            <textarea id="message" name="message" rows="4" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition" placeholder="Tulis pesan Anda di sini"></textarea>
                        </div>
                        
                        <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-300 flex items-center justify-center">
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

    
    <!-- Footer -->
    <footer class="bg-gray-800 text-white pt-12 pb-6">
        <div class="max-w-6xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Tautan Cepat -->
                <div>
                    <h3 class="text-xl font-bold mb-4">Tautan Cepat</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-blue-300 transition">Beranda</a></li>
                        <li><a href="#" class="hover:text-blue-300 transition">Tentang</a></li>
                        <li><a href="#" class="hover:text-blue-300 transition">Berita</a></li>
                        <li><a href="#" class="hover:text-blue-300 transition">Kontak</a></li>
                    </ul>
                </div>
                
                <!-- Alamat -->
                <div>
                    <h3 class="text-xl font-bold mb-4">Alamat</h3>
                    <p class="mb-2">JL. PB. SUDIRMAN NO. 114 TANGGUL - JEMBER</p>
                    <p class="mb-2">Email: smkn6.jember@yahoo.com</p>
                    <p>Telepon: 0336441347</p>
                </div>
                
                <!-- Follow Us -->
                <div>
                    <h3 class="text-xl font-bold mb-4">Follow Us</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="bg-gray-700 hover:bg-blue-600 w-10 h-10 rounded-full flex items-center justify-center transition">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="bg-gray-700 hover:bg-blue-400 w-10 h-10 rounded-full flex items-center justify-center transition">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="bg-gray-700 hover:bg-pink-600 w-10 h-10 rounded-full flex items-center justify-center transition">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="bg-gray-700 hover:bg-blue-700 w-10 h-10 rounded-full flex items-center justify-center transition">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="bg-gray-700 hover:bg-red-600 w-10 h-10 rounded-full flex items-center justify-center transition">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Copyright -->
            <div class="border-t border-gray-700 mt-8 pt-6 text-center">
                <p>&copy; 2025 SMKN 6 Jember All Rights Reserved</p>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            // Slider 1
            const track = document.getElementById('track');
            const btnPrev = document.getElementById('btnPrev');
            const btnNext = document.getElementById('btnNext');
            const dotsWrap = document.getElementById('dots');
            
            // Get all slides
            const slides = () => Array.from(track.children);
            
            // Get the width of a card including gap
            const getCardWidth = () => {
                if (slides().length === 0) return 0;
                const slide = slides()[0];
                const slideWidth = slide.getBoundingClientRect().width;
                const style = window.getComputedStyle(track);
                const gap = parseInt(style.gap) || 0;
                return slideWidth + gap;
            };
            
            // Scroll by one card
            function scrollByCards(direction = 1) {
                const cardWidth = getCardWidth();
                if (cardWidth === 0) return;
                track.scrollBy({ 
                    left: direction * cardWidth, 
                    behavior: "smooth" 
                });
            }
            
            // Calculate how many cards are visible at once
            function getVisibleCardsCount() {
                if (slides().length === 0) return 1;
                const trackWidth = track.getBoundingClientRect().width;
                const cardWidth = getCardWidth();
                return Math.max(1, Math.floor(trackWidth / cardWidth));
            }
            
            // Calculate total pages
            function pagesCount() {
                const slideCount = slides().length;
                const visibleCards = getVisibleCardsCount();
                return Math.max(1, Math.ceil(slideCount / visibleCards));
            }
            
            // Create dots
            function updateDots() {
                dotsWrap.innerHTML = "";
                const pageCount = pagesCount();
                
                for (let i = 0; i < pageCount; i++) {
                    const dot = document.createElement("button");
                    dot.className = "size-2.5 sm:size-3 rounded-full bg-slate-300 data-[active=true]:bg-primary transition";
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
            
            // Set active dot based on scroll position
            function setActiveDot() {
                const pageCount = pagesCount();
                if (pageCount === 0) return;
                
                const maxScroll = track.scrollWidth - track.clientWidth;
                const scrollPosition = track.scrollLeft;
                
                // Calculate which page we're on
                let activePage;
                if (maxScroll <= 0) {
                    activePage = 0;
                } else {
                    const scrollPercentage = scrollPosition / maxScroll;
                    activePage = Math.min(pageCount - 1, Math.round(scrollPercentage * (pageCount - 1)));
                }
                
                // Update dots
                [...dotsWrap.children].forEach((dot, i) => {
                    dot.dataset.active = i === activePage;
                });
            }
            
            // Event listeners
            btnPrev.addEventListener("click", () => scrollByCards(-1));
            btnNext.addEventListener("click", () => scrollByCards(1));
            
            // Touch/swipe support
            let touchStartX = 0;
            let touchEndX = 0;
            
            track.addEventListener('touchstart', (e) => {
                touchStartX = e.changedTouches[0].screenX;
            }, { passive: true });
            
            track.addEventListener('touchend', (e) => {
                touchEndX = e.changedTouches[0].screenX;
                handleSwipe();
            }, { passive: true });
            
            function handleSwipe() {
                const swipeThreshold = 50;
                const diff = touchStartX - touchEndX;
                
                if (Math.abs(diff) > swipeThreshold) {
                    if (diff > 0) {
                        // Swipe left, go to next
                        scrollByCards(1);
                    } else {
                        // Swipe right, go to previous
                        scrollByCards(-1);
                    }
                }
            }
            
            // Update on resize
            let resizeTimeout;
            window.addEventListener("resize", () => {
                clearTimeout(resizeTimeout);
                resizeTimeout = setTimeout(() => {
                    updateDots();
                }, 200);
            });
            
            // Update on scroll
            let scrollTimeout;
            track.addEventListener("scroll", () => {
                clearTimeout(scrollTimeout);
                scrollTimeout = setTimeout(setActiveDot, 50);
            }, { passive: true });
            
            // Initialize
            updateDots();
            
            // Slider 2
            const track2 = document.getElementById('track2');
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');
            
            // Get all slides for second slider
            const slides2 = () => Array.from(track2.children);
            
            // Get the width of a card including gap for second slider
            const getCardWidth2 = () => {
                if (slides2().length === 0) return 0;
                const slide = slides2()[0];
                const slideWidth = slide.getBoundingClientRect().width;
                const style = window.getComputedStyle(track2);
                const gap = parseInt(style.gap) || 0;
                return slideWidth + gap;
            };
            
            // Scroll by one card for second slider
            function scrollByCards2(direction = 1) {
                const cardWidth = getCardWidth2();
                if (cardWidth === 0) return;
                track2.scrollBy({ 
                    left: direction * cardWidth, 
                    behavior: "smooth" 
                });
            }
            
            // Event listeners for second slider
            prevBtn.addEventListener("click", () => scrollByCards2(-1));
            nextBtn.addEventListener("click", () => scrollByCards2(1));
            
            // Touch/swipe support for second slider
            let touchStartX2 = 0;
            let touchEndX2 = 0;
            
            track2.addEventListener('touchstart', (e) => {
                touchStartX2 = e.changedTouches[0].screenX;
            }, { passive: true });
            
            track2.addEventListener('touchend', (e) => {
                touchEndX2 = e.changedTouches[0].screenX;
                handleSwipe2();
            }, { passive: true });
            
            function handleSwipe2() {
                const swipeThreshold = 50;
                const diff = touchStartX2 - touchEndX2;
                
                if (Math.abs(diff) > swipeThreshold) {
                    if (diff > 0) {
                        // Swipe left, go to next
                        scrollByCards2(1);
                    } else {
                        // Swipe right, go to previous
                        scrollByCards2(-1);
                    }
                }
            }
            
            // Form submission
            const form = document.querySelector('form');
            
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Get form values
                const name = document.getElementById('name').value;
                const email = document.getElementById('email').value;
                const phone = document.getElementById('phone').value;
                const message = document.getElementById('message').value;
                
                // Simple validation
                if (!name || !email || !message) {
                    showNotification('Harap isi semua field yang diperlukan', 'error');
                    return;
                }
                
                // Here you would normally send the form data to a server
                // For this example, we'll just show a success message
                showNotification('Pesan Anda telah berhasil dikirim!', 'success');
                
                // Reset form
                form.reset();
            });
            
            function showNotification(message, type) {
                // Create notification element
                const notification = document.createElement('div');
                notification.className = `fixed top-4 right-4 px-6 py-3 rounded-lg shadow-lg text-white ${type === 'success' ? 'bg-green-500' : 'bg-red-500'} transform transition-transform duration-300 translate-x-full`;
                notification.textContent = message;
                
                // Add to DOM
                document.body.appendChild(notification);
                
                // Animate in
                setTimeout(() => {
                    notification.classList.remove('translate-x-full');
                }, 10);
                
                // Remove after 3 seconds
                setTimeout(() => {
                    notification.classList.add('translate-x-full');
                    setTimeout(() => {
                        document.body.removeChild(notification);
                    }, 300);
                }, 3000);
            }
        });
    </script>
@endsection