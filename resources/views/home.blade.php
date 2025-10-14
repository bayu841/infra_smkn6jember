@extends('layouts.app')
@section('title', 'Home')

@section('content')
    <style>
        :root{
            --primary:#3C71F8;
            --primary-dark:#24437C;
        }
        body { background-color: #fdfdfd; }
        .btn{
            padding: 12px 20px;
            color: white;
            font-weight: 600;
            border: none;
            border-radius: 12px;
            cursor: pointer;
            background: linear-gradient(to right, var(--primary), var(--primary-dark));
        }

        /* Brand bar */
        .brand{
            display:flex;
            justify-content:flex-start;
            align-items:center;
            gap:16px;
            margin: 0 auto;
            padding: 10px 14px;
            background-color:#fff;
            max-width: clamp(320px, 95vw, 1100px);
            margin-top:-1rem;
            border-radius:20px;
            box-shadow:0 4px 8px rgba(0,0,0,.08);
            min-height:64px;
            overflow:auto;
            -webkit-overflow-scrolling:touch;
        }
        .brand::-webkit-scrollbar{height:6px}
        .brand::-webkit-scrollbar-thumb{background:#e5e7eb;border-radius:999px}
        .brand img{ width:44px; height:44px; object-fit:cover; border-radius:999px; }

        /* About */
        .about{ padding-inline: clamp(16px, 5vw, 48px); margin-top: clamp(16px, 6vw, 48px); }

        .profile-a{ border-radius: 60px 0 0 0; }
        .card, .card-1{
            width:100%;
            max-width:320px;
            height: auto;
            min-height: 280px;
            border-radius:20px;
            margin-top:1rem;
        }
        .card{ background-color:#24437C; }
        .card-1{ background-color:#EFEFEF; }
        .card p,.card-1 p{ padding:24px; padding-top:2rem; }
        .card p{ color:#fff; } .card-1 p{ color:#111827; }

        .red-box{
            margin-top:-1rem;
            height: 56px;
            width: 56px;
            background-color:#1e6891;
            border-radius:12px;
        }

        .title-box{ background: linear-gradient(to right, var(--primary), var(--primary-dark)); }

        .fasility{
            background-image: url('{{ asset('image/home/eskul.png') }}');
            background-size: cover; background-position:center; background-repeat:no-repeat;
        }

        .text-major{ margin-top: 0; }

        .study{ background-image: url('{{ asset('image/rpl/pemrpl.png') }}'); background-size:cover; }
        .study h2{ padding-top: 4rem; }

        .class{ margin-left: 0; }

        .teacher{
            display:grid; grid-template-columns: repeat( auto-fit, minmax(220px,1fr) );
            gap:20px; max-width:1100px; margin:0 auto;
        }
        .card-teacher1{
            width:100%; height:auto; min-height: 320px; border-radius:10px; margin-bottom:2rem; position:relative; overflow:hidden;
        }

        .no-scrollbar::-webkit-scrollbar{ display:none; }
        .no-scrollbar{ -ms-overflow-style:none; scrollbar-width:none; }

        .btn-grad{ background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 50%, #0ea5e9 100%); }
        .card-grad-1{ background: linear-gradient(135deg, #e0e7ff 0%, #fff 35%); }
        .card-grad-2{ background: linear-gradient(135deg, #dbeafe 0%, #fff 35%); }
        .card-grad-3{ background: linear-gradient(135deg, #e0f2fe 0%, #fff 35%); }

        .fade-in{ animation: fade .4s ease-out; }
        @keyframes fade{ from{ opacity:.6; transform: translateY(6px) } to{ opacity:1; transform: translateY(0) } }

        .form-container{ background-image: url('{{ asset('image/home/footer.png') }}'); }

        /* Lazy image helpers */
        .lazy-image-container{ position:relative; display:block; }
        .lazy-image{ opacity:0; transition: opacity .4s ease; }
        .lazy-image.is-loaded{ opacity:1; }
        .image-placeholder{
            position:absolute; inset:0; display:grid; place-items:center; background: #f3f4f6;
        }
        .placeholder-spinner{
            width:24px; height:24px; border-radius:999px; border:3px solid #e5e7eb; border-top-color:#60a5fa; animation: spin .9s linear infinite;
        }
        @keyframes spin{ to{ transform: rotate(360deg)} }
    </style>

    <!-- HERO -->
    <section class="bg-cover bg-center flex flex-col md:flex-row items-center md:items-center justify-between text-black"
        style="background-image: url('{{ asset('image/home/herohome.png') }}'); min-height: clamp(60vh, 80vh, 96vh); padding: clamp(24px, 6vw, 64px);">
        <div class="flex-1 w-full max-w-3xl mx-auto md:mx-0 mb-8 md:mb-0 md:ml-10 lg:ml-20">
            <h1 class="text-3xl sm:text-4xl font-bold mb-2">Selamat Datang di</h1>
            <h1 class="text-3xl sm:text-4xl font-bold mb-5 text-blue-600">SMKN 6 Jember</h1>
            <p class="text-base sm:text-lg md:text-xl mb-7 leading-relaxed">
                Smk bisa, SMK Hebat. <br>
                SMK Negeri 6 Jember, Berenergi Untuk Bisa Hebat.
            </p>
            <a href="#" class="btn">Daftar Sekarang</a>
        </div>
    </section>

    <!-- BRAND STRIP -->
    <div class="brand">
        @php
            $brands = [
                'image/logoinfra.png' => 'Infra',
                'image/logokom.png' => 'Kom',
                'image/logomaspion.png' => 'Maspion',
                'image/logoiqo.png' => 'IQO',
                'image/logorpl.png' => 'RPL',
                'image/logobd.png' => 'BD',
                'image/logoak.png' => 'AK',
                'image/logomp.png' => 'MP',
                'image/logodkv.png' => 'DKV',
                'image/logokkbt.png' => 'KKBT',
                'image/brand1.png' => 'Brand 1',
                'image/brand2.png' => 'Brand 2',
                'image/brand3.png' => 'Brand 3',
                'image/brand4.png' => 'Brand 4',
            ];
        @endphp
        @foreach($brands as $src => $alt)
        <div class="lazy-image-container">
            <div class="image-placeholder"><div class="placeholder-spinner"></div></div>
            <img class="lazy-image" data-src="{{ asset($src) }}" alt="{{ $alt }}" width="48" height="48">
        </div>
        @endforeach
    </div>

    <!-- ABOUT -->
    <section class="about">
        <div class="flex flex-col md:flex-row items-start justify-between gap-8 md:gap-10 max-w-7xl mx-auto">
            <div class="md:w-1/2 space-y-4 px-4 md:px-0">
                <p class="text-blue-500 font-semibold text-sm">Tentang Kami</p>
                <h2 class="text-2xl md:text-3xl font-bold leading-snug">
                    SMKN 6 Jember <br> Sekolah Pusat Sekolah
                </h2>
                <p class="text-gray-700">
                    Video Profil SMKN 6 Jember mengajak penonton mengenal lebih dekat sekolah yang penuh cerita dan prestasi.
                    Dari sejarah yang membentuk jati diri, berlanjut pada visi dan misi yang menjadi arah masa depan.
                </p>
                <br>
                <a href="https://youtu.be/ubqR8YJGiSQ" class="bg-red-500 text-white text-sm px-3 py-2 rounded-md btn">
                    Tonton Video Profil
                </a>
            </div>

            <div class="relative w-full max-w-xs sm:max-w-sm md:max-w-md h-80 md:h-96 mx-auto md:mx-0">
                <div class="bg-gray-300 w-full h-full rounded-bl-xl overflow-hidden relative bg-cover bg-center lazy-image-container">
                    <div class="image-placeholder"><div class="placeholder-spinner"></div></div>
                    <img class="lazy-image w-full h-full rounded-bl-xl object-cover"
                         data-src="{{ asset('image/home/kepalasekolah.png') }}"
                         alt="Kepala Sekolah">
                    <div class="absolute bottom-0 left-0 bg-red-500 text-white text-sm font-bold px-4 py-2 rounded-tr-lg title-box">
                        Kepala Sekolah
                    </div>
                </div>
                <div class="absolute top-2 right-2 red-box"></div>
                <div class="absolute top-1/3 -right-3 hidden sm:flex flex-col gap-2">
                    <span class="w-3 h-3 bg-blue-300 rounded-full"></span>
                    <span class="w-3 h-3 bg-blue-300 rounded-full"></span>
                    <span class="w-3 h-3 bg-blue-300 rounded-full"></span>
                    <span class="w-3 h-3 bg-blue-300 rounded-full"></span>
                    <span class="w-3 h-3 bg-blue-300 rounded-full"></span>
                </div>
                <div class="absolute -bottom-5 right-6 hidden sm:flex gap-2">
                    <span class="w-3 h-3 bg-blue-300 rounded-full"></span>
                    <span class="w-3 h-3 bg-blue-300 rounded-full"></span>
                    <span class="w-3 h-3 bg-blue-300 rounded-full"></span>
                    <span class="w-3 h-3 bg-blue-300 rounded-full"></span>
                </div>
            </div>
        </div>
    </section>

    <!-- JURUSAN SLIDER -->
    <section class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-10">
        <div class="mb-6">
            <p class="text-primary font-semibold text-blue-600">Jurusan di sekolah</p>
            <h2 class="text-2xl sm:text-3xl font-bold leading-tight mt-2">Pilih Jurusan Sesuai Minat Anda</h2>
        </div>

        <div class="relative">
            <button id="btnPrev"
                class="absolute -left-2 sm:-left-4 top-1/2 -translate-y-1/2 z-10 size-11 sm:size-12 grid place-items-center rounded-full bg-white shadow ring-1 ring-slate-200 hover:ring-blue-400 hover:shadow-md transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-5 text-slate-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 18l-6-6 6-6"/></svg>
            </button>

            <button id="btnNext"
                class="absolute -right-2 sm:-right-4 top-1/2 -translate-y-1/2 z-10 size-11 sm:size-12 grid place-items-center rounded-full bg-white shadow ring-1 ring-slate-200 hover:ring-blue-400 hover:shadow-md transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-5 text-slate-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 6l6 6-6 6"/></svg>
            </button>

            <div id="track" class="no-scrollbar overflow-x-auto scroll-smooth snap-x snap-mandatory flex gap-5 sm:gap-6 pb-3">
                <!-- Slide 1 -->
                <article class="min-w-[88%] sm:min-w-[48%] lg:min-w-[32%] snap-start rounded-2xl bg-white shadow ring-1 ring-slate-100 fade-in">
                    <div class="card-grad-1 rounded-t-2xl overflow-hidden">
                        <div class="h-44 sm:h-56 md:h-60 bg-cover bg-center lazy-image-container" style="background-color:#e5e7eb;">
                            <div class="image-placeholder"><div class="placeholder-spinner"></div></div>
                            <img class="lazy-image w-full h-full object-cover" data-src="{{ asset('image/home/rpl.png') }}" alt="Rekayasa Perangkat Lunak">
                            <div class="px-5 -mt-5">
                                <span class="inline-block px-4 py-2 rounded-full bg-red-600 text-white text-sm font-semibold shadow">Rekayasa Perangkat Lunak</span>
                            </div>
                        </div>
                        <div class="p-5 sm:p-6">
                            <p class="text-slate-700 leading-relaxed mt-2">
                                Jurusan RPL mempelajari pembuatan dan pengembangan perangkat lunak untuk mencetak tenaga IT profesional.
                            </p>
                        </div>
                        <div class="p-5 sm:p-6 -mt-3">
                            <a href="#rpl" class="btn-grad w-full inline-flex items-center justify-center gap-2 text-white font-semibold py-3 rounded-xl transition hover:opacity-95">
                                Selengkapnya
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Slide 2 -->
                <article class="min-w-[88%] sm:min-w-[48%] lg:min-w-[32%] snap-start rounded-2xl bg-white shadow ring-1 ring-slate-100 fade-in">
                    <div class="card-grad-1 rounded-t-2xl overflow-hidden">
                        <div class="h-44 sm:h-56 md:h-60 bg-cover bg-center lazy-image-container" style="background-color:#e5e7eb;">
                            <div class="image-placeholder"><div class="placeholder-spinner"></div></div>
                            <img class="lazy-image w-full h-full object-cover" data-src="{{ asset('image/home/bd.png') }}" alt="Bisnis Digital">
                            <div class="px-5 -mt-5">
                                <span class="inline-block px-4 py-2 rounded-full bg-orange-600 text-white text-sm font-semibold shadow">Bisnis Digital</span>
                            </div>
                        </div>
                        <div class="p-5 sm:p-6">
                            <p class="text-slate-700 leading-relaxed mt-2">
                                Mempersiapkan siswa mengelola bisnis digital, membuka peluang wirausaha, dan siap kerja.
                            </p>
                        </div>
                        <div class="p-5 sm:p-6 -mt-3">
                            <a href="#bd" class="btn-grad w-full inline-flex items-center justify-center gap-2 text-white font-semibold py-3 rounded-xl transition hover:opacity-95">
                                Selengkapnya
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Slide 3 -->
                <article class="min-w-[88%] sm:min-w-[48%] lg:min-w-[32%] snap-start rounded-2xl bg-white shadow ring-1 ring-slate-100 fade-in">
                    <div class="card-grad-1 rounded-t-2xl overflow-hidden">
                        <div class="h-44 sm:h-56 md:h-60 bg-cover bg-center lazy-image-container" style="background-color:#e5e7eb;">
                            <div class="image-placeholder"><div class="placeholder-spinner"></div></div>
                            <img class="lazy-image w-full h-full object-cover" data-src="{{ asset('image/home/akl.png') }}" alt="Akuntansi">
                            <div class="px-5 -mt-5">
                                <span class="inline-block px-4 py-2 rounded-full bg-green-600 text-white text-sm font-semibold shadow">Akuntansi</span>
                            </div>
                        </div>
                        <div class="p-5 sm:p-6">
                            <p class="text-slate-700 leading-relaxed mt-2">
                                Mempelajari pencatatan dan pelaporan keuangan untuk mendukung keputusan bisnis.
                            </p>
                        </div>
                        <div class="p-5 sm:p-6 -mt-3">
                            <a href="#akuntansi" class="btn-grad w-full inline-flex items-center justify-center gap-2 text-white font-semibold py-3 rounded-xl transition hover:opacity-95">
                                Selengkapnya
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                            </a>
                        </div>
                    </div>
                </article>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-center gap-2" id="dots"></div>
    </section>

    <!-- BERITA -->
    <main class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="mb-8 text-center md:text-left">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-2">Berita dan Pengumuman</h2>
            <p class="text-gray-600">Informasi terkini seputar kegiatan sekolah dan prestasi siswa</p>
        </div>

        @if ($beritas->count() > 0)
        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Kiri -->
            <div class="lg:w-2/3 bg-white rounded-lg shadow-md overflow-hidden">
                <div class="lazy-image-container w-full h-64 sm:h-80 md:h-[480px]">
                    <div class="image-placeholder"><div class="placeholder-spinner"></div></div>
                    <img class="lazy-image w-full h-full object-cover"
                         data-src="{{ Storage::url('berita/' . $beritas[0]->image) }}"
                         alt="{{ $beritas[0]->title }}">
                </div>
                <div class="p-6">
                    <div class="flex justify-between items-center mb-3">
                        <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded">Terbaru</span>
                        <span class="text-gray-500 text-sm">{{ $beritas[0]->created_at->format('d M Y') }}</span>
                    </div>
                    <h1 class="text-2xl md:text-3xl font-bold text-gray-800 mb-4">{{ $beritas[0]->title }}</h1>
                    <p class="text-gray-600 mb-6">{{ Str::limit($beritas[0]->content, 200) }}</p>
                    <a href="{{ route('berita.show', $beritas[0]) }}" class="text-blue-600 font-medium hover:text-blue-800 inline-flex items-center">
                        Baca selengkapnya <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>

            <!-- Kanan -->
            <div class="lg:w-1/3 flex flex-col gap-6">
                @if (isset($beritas[1]))
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition duration-300 hover:shadow-lg hover:-translate-y-1">
                    <div class="lazy-image-container w-full h-44 sm:h-48">
                        <div class="image-placeholder"><div class="placeholder-spinner"></div></div>
                        <img class="lazy-image w-full h-full object-cover"
                             data-src="{{ Storage::url('berita/' . $beritas[1]->image) }}"
                             alt="{{ $beritas[1]->title }}">
                    </div>
                    <div class="p-5">
                        <div class="flex justify-between items-center mb-3">
                            <span class="bg-green-100 text-green-800 text-xs font-semibold px-2.5 py-0.5 rounded">Kegiatan</span>
                            <span class="text-gray-500 text-sm">{{ $beritas[1]->created_at->format('d M Y') }}</span>
                        </div>
                        <h3 class="text-lg font-bold text-gray-800 mb-2">{{ $beritas[1]->title }}</h3>
                        <a href="{{ route('berita.show', $beritas[1]) }}" class="text-blue-600 font-medium hover:text-blue-800 inline-flex items-center mt-4">
                            Baca selengkapnya <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
                @endif

                @if (isset($beritas[2]))
                <div class="bg-white rounded-lg shadow-md overflow-hidden transition duration-300 hover:shadow-lg hover:-translate-y-1">
                    <div class="lazy-image-container w-full h-44 sm:h-48">
                        <div class="image-placeholder"><div class="placeholder-spinner"></div></div>
                        <img class="lazy-image w-full h-full object-cover"
                             data-src="{{ Storage::url('berita/' . $beritas[2]->image) }}"
                             alt="{{ $beritas[2]->title }}">
                    </div>
                    <div class="p-5">
                        <div class="flex justify-between items-center mb-3">
                            <span class="bg-purple-100 text-purple-800 text-xs font-semibold px-2.5 py-0.5 rounded">Kompetisi</span>
                            <span class="text-gray-500 text-sm">{{ $beritas[2]->created_at->format('d M Y') }}</span>
                        </div>
                        <h3 class="text-lg font-bold text-gray-800 mb-2">{{ $beritas[2]->title }}</h3>
                        <a href="{{ route('berita.show', $beritas[2]) }}" class="text-blue-600 font-medium hover:text-blue-800 inline-flex items-center mt-4">
                            Baca selengkapnya <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
                @endif
            </div>
        </div>

        <div class="text-center mt-10">
            <a href="{{ route('berita.index') }}" class="btn w-44 inline-block">Lihat Semua Berita</a>
        </div>
        @else
        <div class="text-center py-10">
            <p class="text-gray-500">Belum ada berita untuk ditampilkan.</p>
        </div>
        @endif
    </main>

    <!-- PRODUK -->
    <section class="bg-[#4B6BFF] py-16 px-4 sm:px-6 lg:px-16">
        <div class="max-w-7xl mx-auto text-center lg:text-left">
            <h2 class="text-3xl lg:text-4xl font-bold text-white mb-3">Produk Sekolah</h2>
            <p class="text-white/90 max-w-2xl mx-auto lg:mx-0 mb-10">
                Karya unggulan dari siswa SMKN 6 Jember yang mencerminkan kreativitas, inovasi, dan semangat wirausaha muda.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
                <div class="bg-white rounded-3xl shadow-md p-6 flex flex-col transition hover:-translate-y-2 hover:shadow-xl duration-300">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-1">Energi Enem</h3>
                        <p class="text-gray-500 text-sm mb-4">Air minum sehat hasil produksi oleh Depo SMKN 6 Jember</p>
                        <div class="rounded-2xl overflow-hidden">
                            <img src="{{ asset('image/home/energienem.png') }}" alt="Energi Enem" class="w-full h-56 object-cover" />
                        </div>
                    </div>
                    <div class="flex justify-end mt-4">
                        <div class="bg-blue-100 hover:bg-blue-600 hover:text-white text-blue-600 p-3 rounded-full transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-3xl shadow-md p-6 flex flex-col transition hover:-translate-y-2 hover:shadow-xl duration-300">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-1">Batik Enem</h3>
                        <p class="text-gray-500 text-sm mb-4">Batik karya siswa SMKN 6 Jember yang memadukan tradisi dan gaya modern.</p>
                        <div class="rounded-2xl overflow-hidden">
                            <img src="{{ asset('image/home/batikenem.png') }}" alt="Batik Enem" class="w-full h-56 object-cover" />
                        </div>
                    </div>
                    <div class="flex justify-end mt-4">
                        <div class="bg-blue-100 hover:bg-blue-600 hover:text-white text-blue-600 p-3 rounded-full transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-3xl shadow-md p-6 flex flex-col transition hover:-translate-y-2 hover:shadow-xl duration-300">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-1">Studio Enem</h3>
                        <p class="text-gray-500 text-sm mb-4">Studio foto kreatif karya siswa SMKN 6 Jember.</p>
                        <div class="rounded-2xl overflow-hidden">
                            <img src="{{ asset('image/home/studioenem.png') }}" alt="Studio Enem" class="w-full h-56 object-cover" />
                        </div>
                    </div>
                    <div class="flex justify-end mt-4">
                        <div class="bg-blue-100 hover:bg-blue-600 hover:text-white text-blue-600 p-3 rounded-full transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- EKSTRAKURIKULER -->
    <section class="fasility bg-slate-900 px-4 sm:px-6 lg:px-10 py-16">
        <div class="flex flex-col lg:flex-row items-start gap-10 max-w-7xl mx-auto">
            <div class="lg:w-1/3 px-1" style="margin-top: 0;">
                <h2 class="text-white text-2xl sm:text-3xl font-bold mb-4">Ekstrakurikuler</h2>
                <p class="text-white/90 leading-relaxed">
                    SMKN 6 Jember menyediakan berbagai ekstrakurikuler yang mendukung bakat, minat, prestasi, serta membentuk
                    karakter disiplin, mandiri, dan kreatif siswa.
                </p>
                <div class="btn w-44 mt-5 text-center">Lihat Lainnya</div>
            </div>

            <div class="relative lg:w-2/3">
                <div id="track2" class="flex gap-4 px-1 py-1 overflow-x-auto snap-x snap-mandatory scroll-smooth no-scrollbar">
                    @php
                        $eskul = [
                            ['image' => 'image/eskul/paskib.png', 'title' => 'Paskibraka'],
                            ['image' => 'image/eskul/pmr.png', 'title' => 'Palang Merah Remaja'],
                            ['image' => 'image/eskul/tari.png', 'title' => 'Sanggar Tari'],
                            ['image' => 'image/rpl/fas2.png', 'title' => 'Marching Band'],
                            ['image' => 'image/rpl/fas1.png', 'title' => 'Hadroh'],
                            ['image' => 'image/rpl/fas2.png', 'title' => 'Osis'],
                        ];
                    @endphp

                    @foreach($eskul as $i => $e)
                    <div class="shrink-0 w-[88%] sm:w-[70%] md:w-[60%] lg:w-[48%] snap-start">
                        <figure class="relative rounded-xl overflow-hidden shadow group h-[48vh] min-h-[300px]">
                            <img src="{{ asset($e['image']) }}" alt="{{ $e['title'] }}" class="w-full h-full object-cover transition duration-500 group-hover:scale-105" />
                            <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-500 grid place-items-center">
                                <span class="text-white text-lg sm:text-xl font-semibold">{{ $e['title'] }}</span>
                            </div>
                        </figure>
                    </div>
                    @endforeach
                </div>
                <div class="mt-4 flex items-center justify-center gap-2" id="dots2"></div>
            </div>
        </div>
    </section>

    <!-- TRACER STUDY -->
    <section class="bg-gray-50 py-16 px-4">
        <div class="max-w-5xl mx-auto text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-8">Tracer Study</h2>

            <div class="flex flex-col md:flex-row items-center justify-center gap-8 md:gap-10">
                <div class="w-60 h-60 bg-white p-4 rounded-xl shadow">
                    <canvas id="tracerChart"></canvas>
                </div>
                <div class="text-left space-y-4">
                    <div class="flex items-center space-x-3">
                        <div class="w-6 h-6 rounded-full bg-cyan-300"></div>
                        <p class="font-semibold text-gray-700">Siswa bekerja : <span class="font-normal">62,5%</span></p>
                    </div>
                    <div class="flex items-center space-x-3">
                        <div class="w-6 h-6 rounded-full bg-cyan-500"></div>
                        <p class="font-semibold text-gray-700">Siswa melanjutkan : <span class="font-normal">25%</span></p>
                    </div>
                    <div class="flex items-center space-x-3">
                        <div class="w-6 h-6 rounded-full bg-cyan-700"></div>
                        <p class="font-semibold text-gray-700">Siswa wirausaha : <span class="font-normal">12,5%</span></p>
                    </div>
                </div>
            </div>

            <div class="mt-10">
                <a href="#" class="px-6 py-2.5 rounded-lg bg-gradient-to-r from-blue-600 to-blue-900 text-white font-semibold hover:opacity-90 transition">Selengkapnya</a>
            </div>
        </div>

        <!-- BKK CTA -->
        <section class="bg-cover bg-center rounded-2xl overflow-hidden flex flex-col md:flex-row items-center justify-between px-6 sm:px-8 py-10 md:py-16 text-white max-w-6xl mx-auto mt-16"
                 style="background-image: url('{{ asset('image/home/bkk.png') }}'); min-height: 340px;">
            <div class="max-w-lg">
                <h2 class="text-2xl md:text-3xl font-bold mb-4 leading-snug">
                    Siap Kerja? Temukan Peluangmu di <span class="text-white font-extrabold">BKK</span>
                </h2>
                <p class="text-sm md:text-base text-slate-100 mb-6">
                    SMKN 6 Jember menjembatani lulusan dengan dunia kerja melalui informasi lowongan, pelatihan, dan rekrutmen perusahaan mitra.
                </p>
                <button class="bg-white text-[#3C71F8] px-6 py-2 rounded font-semibold shadow hover:bg-slate-100 transition">
                    Kunjungi BKK
                </button>
            </div>
        </section>

        <!-- BK/Konseling -->
        <div class="font-poppins bg-gray-100 mt-16 flex items-center justify-center p-4 md:p-8">
            <div class="max-w-6xl w-full flex flex-col lg:flex-row gap-6 md:gap-8">
                <div class="w-full lg:w-1/3">
                    <div class="bg-gradient-to-br from-blue-500 to-blue-700 text-white p-6 md:p-8 rounded-xl shadow-2xl flex flex-col gap-4 md:gap-6 min-h-[360px]">
                        <h3 class="text-lg md:text-xl font-light opacity-90">Kamu lagi ada masalah?</h3>
                        <h1 class="text-2xl md:text-3xl font-bold leading-tight">Yuk, konsultasi sekarang!</h1>
                        <div class="flex flex-col gap-4">
                            <p class="text-blue-100 leading-relaxed">
                                Jangan biarkan masalahmu mengganggu harimu. Tim konselor kami siap mendengarkan dan membantu menemukan solusi terbaik untukmu.
                            </p>
                            <button onclick="window.location.href='https://wa.me/6281333794278'"
                                class="self-start bg-white text-blue-600 hover:bg-blue-50 font-medium py-2.5 px-6 rounded-lg transition duration-300">
                                Konsultasi sekarang
                            </button>
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-2/3 grid grid-cols-2 grid-rows-2 gap-4 md:gap-6 min-h-[360px]">
                    <div class="rounded-xl overflow-hidden shadow-lg">
                        <img src="{{ asset('image/home/atas.png') }}" alt="Konsultasi" class="w-full h-full object-cover">
                    </div>
                    <div class="rounded-xl overflow-hidden shadow-lg row-span-2">
                        <div class="lazy-image-container w-full h-full">
                            <div class="image-placeholder"><div class="placeholder-spinner"></div></div>
                            <img class="lazy-image w-full h-full object-cover"
                                 data-src="{{ asset('image/home/konseling2.jpg') }}"
                                 alt="Konseling">
                        </div>
                    </div>
                    <div class="rounded-xl overflow-hidden shadow-lg row-span-2">
                        <div class="lazy-image-container w-full h-full">
                            <div class="image-placeholder"><div class="placeholder-spinner"></div></div>
                            <img class="lazy-image w-full h-full object-cover"
                                 data-src="{{ asset('image/home/konseling3.jpg') }}"
                                 alt="Sesi konseling">
                        </div>
                    </div>
                    <div class="rounded-xl overflow-hidden shadow-lg">
                        <img src="{{ asset('image/home/bawah.png') }}" alt="Konselor" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </div>

        <!-- FORM KONTAK -->
        <section class="w-full flex flex-col lg:flex-row items-center justify-between px-4 sm:px-8 lg:px-20 py-12 bg-cover bg-center bg-no-repeat"
                 style="background-image: url('{{ asset('image/home/footer.png') }}');">
            <div class="w-full lg:w-1/2 flex flex-col items-center lg:items-start text-center lg:text-left">
                <h2 class="text-2xl lg:text-3xl font-bold text-gray-900 leading-snug mb-6">
                    Bergabunglah bersama kami dan wujudkan masa depanmu
                </h2>
            </div>

            <div class="w-full lg:w-1/2 mt-8 lg:mt-0 bg-white p-6 sm:p-8 shadow-lg rounded-2xl">
                <h3 class="text-2xl font-bold text-blue-900 mb-6">Ada Pertanyaan? Hubungi Kami</h3>

                <form action="#" method="POST" class="space-y-4" id="contactForm">
                    @csrf
                    <input id="name" type="text" placeholder="Nama"
                        class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                    <input id="email" type="email" placeholder="Email"
                        class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                    <input id="phone" type="tel" placeholder="No Telepon"
                        class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                    <textarea id="message" rows="4" placeholder="Pesan"
                        class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                    <button type="submit"
                        class="w-full bg-gradient-to-r from-blue-500 to-blue-700 text-white font-semibold py-3 rounded-xl hover:opacity-90 transition">
                        Kirim Pesan
                    </button>
                </form>
            </div>
        </section>
    </section>

    <script>
        // Lazy loading images
        (function(){
            const imgs = document.querySelectorAll('.lazy-image');
            const onIntersect = (entries, obs) => {
                entries.forEach(entry=>{
                    if(entry.isIntersecting){
                        const img = entry.target;
                        const src = img.dataset.src || img.getAttribute('data-src');
                        if(src){
                            img.src = src;
                            img.onload = () => {
                                img.classList.add('is-loaded');
                                const ph = img.closest('.lazy-image-container')?.querySelector('.image-placeholder');
                                if(ph) ph.style.display = 'none';
                            };
                        }
                        obs.unobserve(img);
                    }
                });
            };
            if('IntersectionObserver' in window){
                const io = new IntersectionObserver(onIntersect, { rootMargin: '120px' });
                imgs.forEach(img=> io.observe(img));
            }else{
                // Fallback
                imgs.forEach(img=>{
                    const src = img.dataset.src || img.getAttribute('data-src');
                    if(src){ img.src = src; img.onload = ()=> img.classList.add('is-loaded'); }
                });
            }
        })();

        document.addEventListener("DOMContentLoaded", () => {
            // Slider 1 (Jurusan)
            const track = document.getElementById('track');
            const btnPrev = document.getElementById('btnPrev');
            const btnNext = document.getElementById('btnNext');
            const dotsWrap = document.getElementById('dots');

            const slides = () => Array.from(track.children);
            const getCardWidth = () => {
                if (!slides().length) return 0;
                const slide = slides()[0];
                const slideWidth = slide.getBoundingClientRect().width;
                const gap = parseInt(getComputedStyle(track).gap) || 0;
                return slideWidth + gap;
            };
            function scrollByCards(dir=1){
                const w = getCardWidth();
                if(!w) return;
                track.scrollBy({ left: dir * w, behavior: 'smooth' });
            }
            function getVisibleCardsCount(){
                if(!slides().length) return 1;
                const tw = track.getBoundingClientRect().width;
                const cw = getCardWidth();
                return Math.max(1, Math.floor(tw / cw));
            }
            function pagesCount(){
                const count = slides().length;
                const vis = getVisibleCardsCount();
                return Math.max(1, Math.ceil(count / vis));
            }
            function setActiveDot(){
                const pageCount = pagesCount();
                const maxScroll = track.scrollWidth - track.clientWidth;
                const pos = track.scrollLeft;
                let active = 0;
                if (maxScroll > 0){
                    const pct = pos / maxScroll;
                    active = Math.min(pageCount-1, Math.round(pct * (pageCount-1)));
                }
                [...dotsWrap.children].forEach((d,i)=> d.dataset.active = (i===active));
            }
            function updateDots(){
                dotsWrap.innerHTML = '';
                const count = pagesCount();
                for(let i=0;i<count;i++){
                    const dot = document.createElement('button');
                    dot.className = 'size-2.5 sm:size-3 rounded-full bg-slate-300 data-[active=true]:bg-blue-500 transition';
                    dot.dataset.index = i;
                    dot.addEventListener('click', ()=>{
                        const cw = getCardWidth();
                        const vis = getVisibleCardsCount();
                        track.scrollTo({ left: i * cw * vis, behavior: 'smooth' });
                    });
                    dotsWrap.appendChild(dot);
                }
                setActiveDot();
            }
            btnPrev.addEventListener('click', ()=>scrollByCards(-1));
            btnNext.addEventListener('click', ()=>scrollByCards(1));
            let sx=0, ex=0;
            track.addEventListener('touchstart', e=> sx = e.changedTouches[0].screenX, {passive:true});
            track.addEventListener('touchend', e=>{
                ex = e.changedTouches[0].screenX;
                const diff = sx - ex;
                if(Math.abs(diff) > 50) scrollByCards(diff>0?1:-1);
            }, {passive:true});
            window.addEventListener('resize', ()=> setTimeout(updateDots, 150));
            track.addEventListener('scroll', ()=> setTimeout(setActiveDot, 50), {passive:true});
            updateDots();

            // Slider 2 (Ekstrakurikuler) - auto scroll
            const track2 = document.getElementById('track2');
            const dotsWrap2 = document.getElementById('dots2');
            const slides2 = () => Array.from(track2.children);

            // Duplicate for loop effect
            slides2().forEach(slide => track2.appendChild(slide.cloneNode(true)));

            let scrollAmount = 0;
            let speed = 0.8;
            function autoScroll(){
                scrollAmount += speed;
                if(scrollAmount >= track2.scrollWidth / 2){
                    scrollAmount = 0;
                }
                track2.scrollLeft = scrollAmount;
                requestAnimationFrame(autoScroll);
            }
            autoScroll();

            function getCardWidth2(){
                if(!slides2().length) return 0;
                const slide = slides2()[0];
                const gap = parseInt(getComputedStyle(track2).gap) || 0;
                return slide.getBoundingClientRect().width + gap;
            }
            function updateDots2(){
                dotsWrap2.innerHTML = '';
                const pageCount = Math.max(1, slides2().length / 2);
                for(let i=0;i<pageCount;i++){
                    const dot = document.createElement('button');
                    dot.className = 'size-2.5 sm:size-3 rounded-full bg-slate-300 data-[active=true]:bg-blue-500 transition';
                    dot.addEventListener('click', ()=>{
                        const cw = getCardWidth2();
                        track2.scrollTo({ left: i * cw, behavior: 'smooth' });
                    });
                    dotsWrap2.appendChild(dot);
                }
                setActiveDot2();
            }
            function setActiveDot2(){
                const pageCount = Math.max(1, slides2().length / 2);
                const maxScroll = track2.scrollWidth/2 - track2.clientWidth;
                const pos = track2.scrollLeft;
                let active = 0;
                if (maxScroll > 0){
                    const pct = pos / maxScroll;
                    active = Math.min(pageCount-1, Math.round(pct * (pageCount-1)));
                }
                [...dotsWrap2.children].forEach((d,i)=> d.dataset.active = (i===active));
            }
            window.addEventListener('resize', ()=> setTimeout(updateDots2, 150));
            track2.addEventListener('scroll', ()=> setTimeout(setActiveDot2, 50), {passive:true});
            updateDots2();

            // Form handler
            const form = document.getElementById('contactForm');
            function showNotification(message, type){
                const el = document.createElement('div');
                el.className = `fixed top-4 right-4 px-6 py-3 rounded-lg shadow-lg text-white ${type==='success'?'bg-green-500':'bg-red-500'} transform transition-transform duration-300 translate-x-full z-50`;
                el.textContent = message;
                document.body.appendChild(el);
                requestAnimationFrame(()=> el.classList.remove('translate-x-full'));
                setTimeout(()=> {
                    el.classList.add('translate-x-full');
                    setTimeout(()=> el.remove(), 300);
                }, 2800);
            }
            if(form){
                form.addEventListener('submit', (e)=>{
                    e.preventDefault();
                    const name = document.getElementById('name').value.trim();
                    const email = document.getElementById('email').value.trim();
                    const message = document.getElementById('message').value.trim();
                    if(!name || !email || !message) return showNotification('Harap isi semua field yang diperlukan', 'error');
                    showNotification('Pesan Anda telah berhasil dikirim!', 'success');
                    form.reset();
                });
            }

            // Tracer chart (Chart.js must be included in layout or page)
            const ctx = document.getElementById('tracerChart');
            if (ctx && window.Chart){
                new Chart(ctx.getContext('2d'), {
                    type: 'pie',
                    data: {
                        labels: ['Siswa Bekerja', 'Siswa Melanjutkan', 'Siswa Wirausaha'],
                        datasets: [{ data: [45, 35, 20], backgroundColor: ['#3C71F8', '#4ADE80', '#FACC15'], borderWidth: 1 }]
                    },
                    options: {
                        responsive:true,
                        plugins:{ legend:{ position:'bottom', labels:{ color:'#374151', font:{ size:14 } } } }
                    }
                });
            }
        });
    </script>
@endsection
