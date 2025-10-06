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
        .fade-in { animation: fade .4s ease-out; }
        @keyframes fade { from {opacity:.6; transform: translateY(6px)} to {opacity:1; transform: translateY(0)} }

        /* Slider styles */
        .slider-container {
            position: relative;
            overflow: hidden;
        }

        .slider-track {
            display: flex;
            transition: transform 0.3s ease-out;
        }

        .slider-slide {
            min-width: 100%;
            position: relative;
        }

        .slider-dots {
            display: flex;
            justify-content: center;
            gap: 8px;
            margin-top: 16px;
        }

        .slider-dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background-color: #cbd5e1;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .slider-dot.active {
            background-color: #3b82f6;
        }
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
        <img src="{{ asset('image/logoinfra.png') }}" alt="" >
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
                <a href="https://youtu.be/ubqR8YJGiSQ" class="bg-red-500 text-white text-sm px-3 py-2 rounded-md btn">
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
                        <div class="h-48 sm:h-56 bg-cover bg-center"
                            style="background-image: radial-gradient( circle at 30% 20%, #991b1b 0%, #7f1d1d 40%, #111827 100%)">
                        </div>

                        <!-- badge -->
                        <div class="-mt-5 px-5">
                            <span
                                class="inline-block px-4 py-2 rounded-full bg-rose-600 text-white text-sm font-semibold shadow">
                                Rekayasa Perangkat Lunak
                            </span>
                        </div>
                    </div>

                    <div class="p-5 sm:p-6">
                        <p class="text-slate-700 leading-relaxed">
                            Jurusan RPL adalah bidang di SMK yang mempelajari pembuatan dan pengembangan perangkat lunak
                            untuk mencetak tenaga IT profesional.
                        </p>
                    </div>

                    <div class="p-5 sm:p-6">
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
                    <div class="card-grad-2 rounded-t-2xl overflow-hidden">
                        <div class="h-48 sm:h-56 bg-cover bg-center"
                            style="background-image: radial-gradient(circle at 70% 30%, #334155 0%, #0f172a 70%)"></div>

                        <div class="-mt-5 px-5">
                            <span
                                class="inline-block px-4 py-2 rounded-full bg-orange-600 text-white text-sm font-semibold shadow">
                                Bisnis Digital
                            </span>
                        </div>
                    </div>

                    <div class="p-5 sm:p-6">
                        <p class="text-slate-700 leading-relaxed">
                            Jurusan Bisnis Digital mempersiapkan siswa mengelola bisnis digital, membuka peluang wirausaha,
                            dan mencetak profesional siap pakai.
                        </p>
                    </div>

                    <div class="p-5 sm:p-6">
                        <a href="#bisnis"
                            class="btn-grad w-full inline-flex items-center justify-center gap-2 text-white font-semibold py-3 rounded-xl transition hover:opacity-95">
                            Selengkapnya
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2">
                                <path d="M5 12h14M12 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </article>

                <!-- Slide 3 -->
                <article
                    class="min-w-[85%] sm:min-w-[46%] lg:min-w-[31%] snap-start rounded-2xl bg-white shadow-smooth ring-1 ring-slate-100 fade-in">
                    <div class="card-grad-3 rounded-t-2xl overflow-hidden">
                        <div class="h-48 sm:h-56 bg-cover bg-center"
                            style="background-image: radial-gradient(circle at 60% 20%, #0ea5e9 0%, #0369a1 50%, #0f172a 100%)">
                        </div>

                        <div class="-mt-5 px-5">
                            <span
                                class="inline-block px-4 py-2 rounded-full bg-emerald-600 text-white text-sm font-semibold shadow">
                                Akuntansi
                            </span>
                        </div>
                    </div>

                    <div class="p-5 sm:p-6">
                        <p class="text-slate-700 leading-relaxed">
                            Jurusan Akuntansi SMK mempelajari pencatatan dan pelaporan keuangan untuk mendukung keputusan
                            bisnis.
                        </p>
                    </div>

                    <div class="p-5 sm:p-6">
                        <a href="#akuntansi"
                            class="btn-grad w-full inline-flex items-center justify-center gap-2 text-white font-semibold py-3 rounded-xl transition hover:opacity-95">
                            Selengkapnya
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2">
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
<!-- Berita dan Pengumuman Section -->
<section class="py-12 px-4 md:px-8 lg:px-16 bg-gray-50">
    <div class="max-w-7xl mx-auto">
        <!-- Judul -->
        <div class="flex items-center mb-8">
            <h2 class="text-3xl font-bold text-gray-800">Berita dan Pengumuman</h2>
            <div class="ml-4 h-1 w-24 bg-blue-600"></div>
        </div>


        <!-- Grid Utama -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            @forelse($news as $index => $item)
                @if($index === 0)
                <!-- Card 1 (besar, kiri) -->
                <div class="md:col-span-2 bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <div class="relative">
                        @if($item->image)
                            <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}"
                                class="w-full h-80 object-cover">
                        @else
                            <img src="https://via.placeholder.com/800x400/cccccc/666666?text=No+Image" alt="{{ $item->title }}"
                                class="w-full h-80 object-cover">
                        @endif
                        <span class="absolute bottom-4 right-4 bg-blue-600 text-white text-sm px-4 py-2 rounded-lg shadow-md">
                            {{ $item->published_at ? $item->published_at->format('j F') : $item->created_at->format('j F') }}
                        </span>
                    </div>
                    <div class="p-6">
                        <h3 class="font-bold text-2xl mb-3 text-gray-800">{{ $item->title }}</h3>
                        <p class="text-gray-600 text-base leading-relaxed mb-4">{{ Str::limit(strip_tags($item->description), 150) }}</p>
                        <a href="{{ route('news.show', $item->id) }}" class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-800 transition-colors">
                            Baca Selengkapnya
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
                @endif

                @if($index === 0)
                <!-- Kolom kanan (card 2 dan 3 ditumpuk) -->
                <div class="flex flex-col gap-6">
                @endif

                @if($index > 0 && $index < 3)
                    <!-- Card 2 & 3 in the right column -->
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <div class="relative">
                            @if($item->image)
                                <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}"
                                    class="w-full h-48 object-cover">
                            @else
                                <img src="https://via.placeholder.com/400x240/cccccc/666666?text=No+Image" alt="{{ $item->title }}"
                                    class="w-full h-48 object-cover">
                            @endif
                            <span class="absolute bottom-4 right-4 bg-blue-600 text-white text-sm px-4 py-2 rounded-lg shadow-md">
                                {{ $item->published_at ? $item->published_at->format('j F') : $item->created_at->format('j F') }}
                            </span>
                        </div>
                        <div class="p-4">
                            <h3 class="font-bold text-lg mb-2 text-gray-800">{{ $item->title }}</h3>
                            <p class="text-gray-600 text-sm leading-relaxed mb-3">{{ Str::limit(strip_tags($item->description), 100) }}</p>
                            <a href="{{ route('news.show', $item->id) }}" class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-800 transition-colors text-sm">
                                Baca Selengkapnya
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                @endif

                @if($index === 2 || ($index === $news->count()-1 && $index >= 2))
                </div> <!-- End of right column container -->
                @endif
            @empty
                <!-- No news card -->
                <div class="md:col-span-2 bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 flex items-center justify-center" style="min-height: 400px;">
                    <div class="text-center p-6">
                        <p class="text-gray-600 text-lg">Belum ada berita terbaru.</p>
                    </div>
                </div>
                <div class="flex flex-col gap-6">
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 flex items-center justify-center" style="min-height: 300px;">
                        <div class="text-center p-4">
                            <p class="text-gray-600 text-base">Belum ada berita terbaru.</p>
                        </div>
                    </div>
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 flex items-center justify-center" style="min-height: 300px;">
                        <div class="text-center p-4">
                            <p class="text-gray-600 text-base">Belum ada berita terbaru.</p>
                        </div>
                    </div>
                </div>
            @endforelse
        </div>

        <!-- Tombol Selengkapnya -->
        <div class="text-center mt-10">
            <a href="{{ route('news.index') }}"
                class="inline-flex items-center px-8 py-3 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 transition-colors">
                Lihat Semua Berita
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </a>
        </div>
    </div>
</section>

    <!-- Tracer Study Section -->
    <div class="min-h-screen flex flex-col items-center justify-center p-4 md:p-6 lg:p-8">
      <div class="w-full max-w-4xl bg-white rounded-xl shadow-lg p-6 md:p-8 lg:p-10">
        <h1 class="text-2xl md:text-3xl font-bold text-center text-gray-800 mb-8">
          Tracer Study
        </h1>

        <div class="flex flex-col lg:flex-row items-center justify-between gap-8">
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
                <span class="text-gray-700">
                  Siswa bekerja: <span class="font-semibold">62,5%</span>
                </span>
              </div>
              <div class="flex items-center">
                <div class="w-4 h-4 rounded-full bg-green-500 mr-3"></div>
                <span class="text-gray-700">
                  Siswa melanjutkan:
                  <span class="font-semibold">25%</span>
                </span>
              </div>
              <div class="flex items-center">
                <div class="w-4 h-4 rounded-full bg-yellow-500 mr-3"></div>
                <span class="text-gray-700">
                  Siswa wirausaha:
                  <span class="font-semibold">12,5%</span>
                </span>
              </div>
            </div>
          </div>
        </div>
        <button class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-6 rounded-lg transition duration-300 w-full md:w-auto">
          Selengkapnya
        </button>
      </div>
    </div>

    <div class="min-h-screen flex items-center justify-center p-4 md:p-6 lg:p-8">
      <div class="w-full max-w-6xl bg-gradient-to-r from-blue-600 to-blue-400 rounded-2xl shadow-xl overflow-hidden">
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
              <button class="bg-white text-blue-600 hover:bg-gray-100 font-semibold py-3 px-6 rounded-lg transition duration-300 text-center">
                Kunjungi BKK
              </button>
              <button class="bg-transparent border-2 border-white hover:bg-white/10 font-semibold py-3 px-6 rounded-lg transition duration-300 text-center">
                Selengkapnya
              </button>
            </div>
          </div>

          <!-- Konten Kanan (Gambar) -->
          <div class="w-full lg:w-1/2 flex items-center justify-center p-6 md:p-8">
            <div class="relative">
              <img src="https://picsum.photos/seed/students-working/600/400.jpg" alt="Students working" class="rounded-xl shadow-lg w-full max-w-md" />
              <div class="absolute -bottom-4 -right-4 bg-white p-2 rounded-lg shadow-lg">
                <div class="flex items-center space-x-2">
                  <div class="bg-blue-100 p-2 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                  </div>
                  <span class="font-medium text-gray-800">Lowongan Kerja</span>

    <section
        class="flex flex-col lg:flex-row justify-center items-stretch min-h-screen p-4 md:p-6 lg:p-10 gap-6 md:gap-8 lg:gap-10">
        <div class="w-full lg:w-1/2 flex flex-col">
            <div class="card bg-white rounded-xl shadow-lg overflow-hidden flex-grow flex flex-col">
                <img src="/1.png" alt="" class="w-full h-48 sm:h-56 md:h-64 lg:h-72 object-cover" />
                <div class="des p-4 sm:p-5 md:p-6 flex-grow flex flex-col justify-center">
                    <h1 class="text-xl sm:text-2xl md:text-3xl font-bold mb-3 sm:mb-4">
                        juara 1
                    </h1>
                    <p class="text-gray-600 text-sm sm:text-base md:text-lg">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque
                        sunt accusantium dolor porro sapiente! Ipsam corrupti non tempore
                        aperiam nobis consequuntur ullam sequi dolorem, quo excepturi
                        nisi, voluptatem praesentium provident.
                    </p>
                </div>
            </div>
        </div>
        <div class="w-full lg:w-1/2 flex flex-col gap-4 sm:gap-5 md:gap-6">
            <div class="flex-grow flex flex-col justify-center">
                <img src="/2.png" alt=""
                    class="w-full h-full max-h-48 sm:max-h-56 md:max-h-64 lg:max-h-72 object-cover rounded-xl shadow-lg" />
            </div>
            <div class="flex-grow flex flex-col justify-center">
                <img src="/3.png" alt=""
                    class="w-full h-full max-h-48 sm:max-h-56 md:max-h-64 lg:max-h-72 object-cover rounded-xl shadow-lg" />
            </div>
        </div>
    </section>

    <div class="relative min-h-screen bg-gradient-to-b from-blue-500 to-blue-300 overflow-hidden">
        <!-- Gelombang Background -->
        <div class="absolute bottom-0 left-0 w-full">
            <svg viewBox="0 0 1440 320" class="w-full h-auto">
                <path fill="#f5f5f5" fill-opacity="1"
                    d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,122.7C672,117,768,139,864,154.7C960,171,1056,181,1152,165.3C1248,149,1344,107,1392,85.3L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                </path>
            </svg>
        </div>

        <!-- Konten Utama -->
        <div class="relative z-10 container mx-auto px-4 py-12 md:py-16 lg:py-24">
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white text-center mb-12 md:mb-16 lg:mb-20">
                Guru dan Staf
            </h1>

            <div class="flex flex-col md:flex-row justify-center items-center gap-12 md:gap-16 lg:gap-20">
                <!-- Card 1 -->
                <div class="relative flex flex-col items-center">
                    <!-- Lingkaran Foto -->
                    <div
                        class="w-32 h-32 md:w-40 md:h-40 lg:w-48 lg:h-48 rounded-full border-4 border-white overflow-hidden shadow-lg z-10 mb-4">
                        <img src="https://picsum.photos/seed/surita/300/300.jpg" alt="Surita S.Pd"
                            class="w-full h-full object-cover" />
                    </div>

                    <!-- Card Nama dan Gelar -->
                    <div
                        class="bg-white/80 backdrop-blur-sm rounded-lg shadow-lg px-6 py-3 text-center z-0 border border-white/50">
                        <h2 class="text-sm md:text-base font-semibold text-blue-800">
                            Surita S.Pd
                        </h2>
                        <p class="text-xs md:text-sm text-blue-600">Waka Kurikulum</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="relative flex flex-col items-center">
                    <!-- Lingkaran Foto -->
                    <div
                        class="w-32 h-32 md:w-40 md:h-40 lg:w-48 lg:h-48 rounded-full border-4 border-white overflow-hidden shadow-lg z-10 mb-4">
                        <img src="https://picsum.photos/seed/erni/300/300.jpg" alt="Erni Sumarliah S.Pd"
                            class="w-full h-full object-cover" />
                    </div>

                    <!-- Card Nama dan Gelar -->
                    <div
                        class="bg-white/80 backdrop-blur-sm rounded-lg shadow-lg px-6 py-3 text-center z-0 border border-white/50">
                        <h2 class="text-sm md:text-base font-semibold text-blue-800">
                            Erni Sumarliah S.Pd
                        </h2>
                        <p class="text-xs md:text-sm text-blue-600">Waka Kesiswaan</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="relative flex flex-col items-center">
                    <!-- Lingkaran Foto -->
                    <div
                        class="w-32 h-32 md:w-40 md:h-40 lg:w-48 lg:h-48 rounded-full border-4 border-white overflow-hidden shadow-lg z-10 mb-4">
                        <img src="https://picsum.photos/seed/syaiful/300/300.jpg" alt="M. Syaiful Rizal"
                            class="w-full h-full object-cover" />
                    </div>

                    <!-- Card Nama dan Gelar -->
                    <div
                        class="bg-white/80 backdrop-blur-sm rounded-lg shadow-lg px-6 py-3 text-center z-0 border border-white/50">
                        <h2 class="text-sm md:text-base font-semibold text-blue-800">
                            M. Syaiful Rizal
                        </h2>
                        <p class="text-xs md:text-sm text-blue-600">Waka Sarpras</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="min-h-screen flex flex-col items-center justify-center p-4 md:p-6 lg:p-8">
        <div class="w-full max-w-4xl bg-white rounded-xl shadow-lg p-6 md:p-8 lg:p-10">
            <h1 class="text-2xl md:text-3xl font-bold text-center text-gray-800 mb-8">
                Tracer Study
            </h1>

            <div class="flex flex-col lg:flex-row items-center justify-between gap-8">
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
                            <span class="text-gray-700">Siswa bekerja: <span class="font-semibold">62,5%</span></span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-4 h-4 rounded-full bg-green-500 mr-3"></div>
                            <span class="text-gray-700">Siswa melanjutkan:
                                <span class="font-semibold">25%</span></span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-4 h-4 rounded-full bg-yellow-500 mr-3"></div>
                            <span class="text-gray-700">Siswa wirausaha:
                                <span class="font-semibold">12,5%</span></span>
                        </div>
                    </div>
                </div>
            </div>
            <button
                class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-6 rounded-lg transition duration-300 w-full md:w-auto">
                Selengkapnya
            </button>
        </div>
    </div>

    <div class="min-h-screen flex items-center justify-center p-4 md:p-6 lg:p-8">
        <div class="w-full max-w-6xl bg-gradient-to-r from-blue-600 to-blue-400 rounded-2xl shadow-xl overflow-hidden">
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
                            class="bg-white text-blue-600 hover:bg-gray-100 font-semibold py-3 px-6 rounded-lg transition duration-300 text-center">
                            Kunjungi BKK
                        </button>
                        <button
                            class="bg-transparent border-2 border-white hover:bg-white/10 font-semibold py-3 px-6 rounded-lg transition duration-300 text-center">
                            Selengkapnya
                        </button>
                    </div>
                </div>

                <!-- Konten Kanan (Gambar) -->
                <div class="w-full lg:w-1/2 flex items-center justify-center p-6 md:p-8">
                    <div class="relative">
                        <img src="https://picsum.photos/seed/students-working/600/400.jpg" alt="Students working"
                            class="rounded-xl shadow-lg w-full max-w-md" />
                        <div class="absolute -bottom-4 -right-4 bg-white p-2 rounded-lg shadow-lg">
                            <div class="flex items-center space-x-2">
                                <div class="bg-blue-100 p-2 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
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
                <div class="card-main bg-gradient-to-br from-blue-500 to-blue-700 text-white p-6 md:p-8 rounded-xl shadow-2xl flex flex-col gap-4 md:gap-6"
                    style="min-height: 400px;">
                    <h3 class="text-lg md:text-xl font-light opacity-90">Kamu Lagi ada Masalah?</h3>
                    <h1 class="text-2xl md:text-3xl font-bold leading-tight">Yuk, konsultasi sekarang!</h1>
                    <div class="card-des flex flex-col gap-4">
                        <p class="text-blue-100 leading-relaxed">
                            Jangan biarkan masalahmu mengganggu harimu. Tim konselor kami siap mendengarkan dan membantu
                            menemukan solusi terbaik untukmu.
                        </p>
                        <button
                            class="self-start bg-white text-blue-600 hover:bg-blue-50 font-medium py-2.5 px-6 rounded-lg transition duration-300">
                            Selanjutnya
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
    </div>


    <!-- Fasilitas Slider Section -->
    <div class="flex justify-center my-8">
        <div class="relative w-full max-w-4xl">
            <!-- Tombol Prev -->
            <button id="prevBtn" class="absolute left-3 top-1/2 -translate-y-1/2 z-20 grid place-items-center w-10 h-10 rounded-full bg-white/90 shadow hover:bg-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-slate-800" viewBox="0 0 24 24" fill="none" stroke="currentColor">

    <div class="flex justify-center my-8">
        <div class="relative w-full max-w-4xl">
            <!-- Tombol Prev -->
            <button id="prevBtn"
                class="absolute left-3 top-1/2 -translate-y-1/2 z-20 grid place-items-center w-10 h-10 rounded-full bg-white/90 shadow hover:bg-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-slate-800" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor">

                    <path d="M15 18l-6-6 6-6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>

            <!-- Tombol Next -->
            <button id="nextBtn" class="absolute right-3 top-1/2 -translate-y-1/2 z-20 grid place-items-center w-10 h-10 rounded-full bg-white/90 shadow hover:bg-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-slate-800" viewBox="0 0 24 24" fill="none" stroke="currentColor">

            <button id="nextBtn"
                class="absolute right-3 top-1/2 -translate-y-1/2 z-20 grid place-items-center w-10 h-10 rounded-full bg-white/90 shadow hover:bg-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-slate-800" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor">
                    <path d="M9 6l6 6-6 6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>

            <!-- Track -->
            <div id="track2"
                class="flex gap-4 px-4 py-4 overflow-x-auto snap-x snap-mandatory scroll-smooth no-scrollbar">

                <!-- Slide 1 -->
                <div class="shrink-0 w-[85%] sm:w-[78%] md:w-[92%] lg:w-[92%] snap-start mx-auto"
                    style="width:850px; height:50vh;">
                    <div class="grid grid-cols-2 gap-3">
                        <figure class="relative col-span-2 sm:col-span-1 rounded-xl overflow-hidden shadow"
                            style="height:50vh;">
                            <img class="w-full h-48 sm:h-56 md:h-64 object-cover" src="{{ asset('image/rpl/fas1.png') }}"
                                style="height:50vh;">
                            <figcaption class="absolute left-4 top-4">
                                <span
                                    class="inline-flex rounded-e-2xl rounded-s-xl bg-red-600 text-white font-semibold px-4 py-2 shadow">
                                    Lab RPL
                                </span>
                            </figcaption>
                        </figure>
                        <figure class="relative col-span-2 sm:col-span-1 rounded-xl overflow-hidden shadow"
                            style="height:50vh;">
                            <img class="w-full h-48 sm:h-56 md:h-64 object-cover" src="{{ asset('image/rpl/fas2.png') }}"
                                style="height:50vh;">
                            <figcaption class="absolute left-4 top-4">
                                <span
                                    class="inline-flex rounded-e-2xl rounded-s-xl bg-red-600 text-white font-semibold px-4 py-2 shadow">
                                    Teaching Factory
                                </span>
                            </figcaption>
                        </figure>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="shrink-0 w-[85%] sm:w-[78%] md:w-[92%] lg:w-[92%] snap-start mx-auto"
                    style="width:1000px; height:50vh;">
                    <div class="grid grid-cols-2 gap-3">
                        <figure class="relative col-span-2 sm:col-span-1 rounded-xl overflow-hidden shadow"
                            style="height:50vh;">
                            <img class="w-full h-48 sm:h-56 md:h-64 object-cover" src="{{ asset('image/rpl/fas3.png') }}"
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
            <div class="mt-4 flex justify-center gap-2" id="slider2-dots">
                <button class="w-2 h-2 rounded-full bg-blue-600" data-slide="0"></button>
                <button class="w-2 h-2 rounded-full bg-gray-300" data-slide="1"></button>
            </div>
        </div>
    </div>

    <div class="flex-grow flex items-center justify-center p-4">
        <div class="max-w-6xl w-full bg-white rounded-2xl shadow-xl overflow-hidden">
            <div class="md:flex">
                <!-- Left Section with Image and Text -->
                <div
                    class="md:w-1/2 bg-gradient-to-br from-blue-500 to-blue-700 p-8 flex flex-col items-center justify-center">
                    <h1 class="text-3xl font-bold text-white mb-8 text-center">Bergabunglah bersama kami dan wujudkan masa
                        depan mu</h1>
                    <div class="relative">
                        <div class="absolute -inset-4 bg-blue-400 rounded-full opacity-20 blur-xl"></div>
                        <div class="relative bg-white p-4 rounded-xl shadow-lg">
                            <img src="https://z-cdn-media.chatglm.cn/files/12e2b92c-6dc5-4a13-85e0-b61c6ed252fd_pasted_image_1759187173153.png?auth_key=1790723189-6589604663c7496ba05b9fb793a12ccb-0-867ac09b110bf7fa4413bf12cf8ef096"
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
     *  TRACER STUDY CHART
     *  ========================= */
    const tracerCtx = document.getElementById('tracerChart').getContext('2d');
    new Chart(tracerCtx, {
        type: 'pie',
        data: {
            labels: ['Siswa Bekerja', 'Siswa Melanjutkan', 'Siswa Wirausaha'],
            datasets: [{
                data: [62.5, 25, 12.5],
                backgroundColor: [
                    'rgba(59, 130, 246, 0.8)',
                    'rgba(34, 197, 94, 0.8)',
                    'rgba(234, 179, 8, 0.8)'
                ],
                borderColor: [
                    'rgba(59, 130, 246, 1)',
                    'rgba(34, 197, 94, 1)',
                    'rgba(234, 179, 8, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: true,
            plugins: {
                legend: { display: false },
                tooltip: {
                    callbacks: {
                        label: (ctx) => `${ctx.label}: ${ctx.raw}%`
                    }
                }
            }
        }
    });


    const track = document.getElementById('track');
    const btnPrev = document.getElementById('btnPrev');
    const btnNext = document.getElementById('btnNext');
    const dotsWrap = document.getElementById('dots');

    let currentSlide = 0;

    const slides = () => Array.from(track.children);

    const getCardWidth = () => {
        if (slides().length === 0) return 0;
        const slide = slides()[0];
        const slideWidth = slide.getBoundingClientRect().width;
        const style = window.getComputedStyle(track);
        const gap = parseInt(style.gap) || 0;
        return slideWidth + gap;
    };

    function goToSlide(index) {
        if (index < 0) index = slides().length - 1;
        if (index >= slides().length) index = 0;

        currentSlide = index;
        const cardWidth = getCardWidth();
        track.scrollTo({
            left: index * cardWidth,
            behavior: "smooth"
        });

        updateDots();
    }

    function scrollByCards(direction = 1) {
        goToSlide(currentSlide + direction);
    }

    function updateDots() {
        dotsWrap.innerHTML = "";
        for (let i = 0; i < slides().length; i++) {
            const dot = document.createElement("button");
            dot.className = `size-2.5 sm:size-3 rounded-full ${i === currentSlide ? 'bg-blue-600' : 'bg-slate-300'} transition`;
            dot.addEventListener("click", () => goToSlide(i));
            dotsWrap.appendChild(dot);
        }
    }

    btnPrev.addEventListener("click", () => scrollByCards(-1));
    btnNext.addEventListener("click", () => scrollByCards(1));

    // Swipe support
    let touchStartX = 0, touchEndX = 0;
    track.addEventListener('touchstart', (e) => {
        touchStartX = e.changedTouches[0].screenX;
    }, { passive: true });

    track.addEventListener('touchend', (e) => {
        touchEndX = e.changedTouches[0].screenX;
        const diff = touchStartX - touchEndX;
        if (Math.abs(diff) > 50) scrollByCards(diff > 0 ? 1 : -1);
    }, { passive: true });

    // Resize update
    let resizeTimeout;
    window.addEventListener("resize", () => {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(() => goToSlide(currentSlide), 200);
    });

    updateDots();

    const track2 = document.getElementById('track2');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const dots2 = document.getElementById('slider2-dots');

    let currentSlide2 = 0;
    const slides2 = () => Array.from(track2.children);

    const getCardWidth2 = () => {
        if (slides2().length === 0) return 0;
        const slide = slides2()[0];
        const slideWidth = slide.getBoundingClientRect().width;
        const style = window.getComputedStyle(track2);
        const gap = parseInt(style.gap) || 0;
        return slideWidth + gap;
    };

    function goToSlide2(index) {
        if (index < 0) index = slides2().length - 1;
        if (index >= slides2().length) index = 0;

        currentSlide2 = index;
        const cardWidth = getCardWidth2();
        track2.scrollTo({
            left: index * cardWidth,
            behavior: "smooth"
        });

        updateDots2();
    }

    function scrollByCards2(direction = 1) {
        goToSlide2(currentSlide2 + direction);
    }

    function updateDots2() {
        if (!dots2) return;
        dots2.innerHTML = "";
        for (let i = 0; i < slides2().length; i++) {
            const dot = document.createElement("button");
            dot.className = `w-2 h-2 rounded-full ${i === currentSlide2 ? 'bg-blue-600' : 'bg-gray-300'}`;
            dot.addEventListener("click", () => goToSlide2(i));
            dots2.appendChild(dot);
        }
    }

    prevBtn.addEventListener("click", () => scrollByCards2(-1));
    nextBtn.addEventListener("click", () => scrollByCards2(1));

    // Swipe for slider 2
    let touchStartX2 = 0, touchEndX2 = 0;
    track2.addEventListener('touchstart', (e) => {
        touchStartX2 = e.changedTouches[0].screenX;
    }, { passive: true });

    track2.addEventListener('touchend', (e) => {
        touchEndX2 = e.changedTouches[0].screenX;
        const diff = touchStartX2 - touchEndX2;
        if (Math.abs(diff) > 50) scrollByCards2(diff > 0 ? 1 : -1);
    }, { passive: true });

    // Resize update slider 2
    window.addEventListener("resize", () => {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(() => goToSlide2(currentSlide2), 200);
    });

    updateDots2();


    /** =========================
     *  FORM KONTAK (NOTIF)
     *  ========================= */
    const form = document.querySelector('form');
    if (form) {
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const message = document.getElementById('message').value;

            if (!name || !email || !message) {
                showNotification('Harap isi semua field yang diperlukan', 'error');
                return;
            }

            showNotification('Pesan Anda telah berhasil dikirim!', 'success');
            form.reset();
        });
    }

    function showNotification(message, type) {
        const notification = document.createElement('div');
        notification.className =
            `fixed top-4 right-4 px-6 py-3 rounded-lg shadow-lg text-white
            ${type === 'success' ? 'bg-green-500' : 'bg-red-500'}
            transform transition-transform duration-300 translate-x-full`;
        notification.textContent = message;

        document.body.appendChild(notification);

        setTimeout(() => notification.classList.remove('translate-x-full'), 10);
        setTimeout(() => {
            notification.classList.add('translate-x-full');
            setTimeout(() => document.body.removeChild(notification), 300);
        }, 3000);
    }

});
</script>
@endsection
