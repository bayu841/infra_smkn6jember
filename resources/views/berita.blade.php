@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <style>
        .berita-section {
            background-image: url("{{ asset('image/berita/beritabg.png') }}");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
            margin-top: -2rem;
        }

        .card {
            border-radius: 20px;
            margin-top: -3rem;
            background-color: #ebe7e7;
            width: 600px;
            height: 50vh;
            margin-left: 5rem;
        }

        .text {
            margin-left: 2rem;
            margin-top: -1rem;
            font-size: 20px;
            width: 500px;
        }

        .text-p {
            font-size: 15px;
            width: 600px;
            min-height: 80px;
            /* Batas height minimal */
            max-height: 120px;
            /* Batas height maksimal */
            overflow: hidden;
        }

        .card-content {
            min-height: 60px;
            /* Height minimal untuk card content */
            max-height: 100px;
            overflow: hidden;
        }

        .popular-content {
            min-height: 100px;
            /* Height minimal untuk popular section */
            max-height: 150px;
            overflow: hidden;
        }

        .previous {
            padding: 10px 10px;
            background-color: rgb(255, 255, 255);
            color: black;
            box-shadow: 0px 0px 1px 1px rgb(0, 0, 0, 0.3);
            border-radius: 4px;
        }

        .next {
            padding: 10px 10px;
            background-color: #406AE7;
            color: #ebe7e7;
            border-radius: 4px;
            width: 150px;
        }

        .btn {
            display: flex;
            justify-content: flex-end;
            margin-right: 2rem;
            gap: 10px;
        }

        .text-warning {
            color: #e74c3c;
            font-size: 12px;
            font-style: italic;
        }

        .text-minimal {
            min-height: 80px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f8f9fa;
            border-radius: 8px;
            padding: 10px;
            text-align: center;
        }

        @media (max-width: 1024px) {
            .card {
                width: 100%;
                max-width: 500px;
                margin-left: auto;
                margin-right: auto;
                height: auto;
            }

            .text {
                width: 100%;
                max-width: 500px;
                margin-left: auto;
                margin-right: auto;
                font-size: 18px;
            }

            .text-p {
                width: 100%;
                max-width: 500px;
                font-size: 14px;
                min-height: 70px;
                max-height: 100px;
            }

            .popular-container {
                flex-direction: column;
                align-items: center;
                gap: 1.5rem;
            }
        }

        /* Mobile */
        @media (max-width: 768px) {
            .berita-section {
                padding: 1rem;
                margin-top: 0;
            }

            .card {
                width: 100%;
                max-width: 90%;
                margin: 0 auto;
                height: auto;
            }

            .text {
                width: 100%;
                max-width: 90%;
                margin: 0 auto;
                font-size: 16px;
            }

            .text-p {
                width: 100%;
                max-width: 90%;
                font-size: 13px;
                min-height: 60px;
                max-height: 80px;
            }

            .grid {
                grid-template-columns: 1fr !important;
            }

            .btn {
                flex-direction: column;
                align-items: center;
                gap: 1rem;
                margin-right: 0;
            }

            .next,
            .previous {
                width: 100%;
                max-width: 300px;
                text-align: center;
            }

            .card-content {
                min-height: 50px;
                max-height: 80px;
            }
        }
    </style>

    <div class="berita-section text-black pt-10">
        <div class="p-20">
            <h2 class="text-4xl font-bold">Berita Dan Pengumuman</h2>
            <p class="mt-4 text-lg max-w-3xl">
                Informasi dan Berita Terkini SMK Negeri 6 Jember, dari Prestasi hingga Kegiatan Siswa
            </p>
            <a href="{{ route('halaman-utama') }}" class="mt-4 inline-block bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
                <i class="fas fa-arrow-left mr-2"></i>
                Kembali ke Halaman Utama
            </a>
        </div>
        <!-- Grid Card -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 px-10 pb-20">
            @foreach ($lastPosts as $berita)
                <div
                    class="w-[360px] h-[440px] bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition mx-auto">
                    <img class="w-full h-52 object-cover" src="{{ Storage::url('berita/' . $berita->image) }}"
                        alt="{{ $berita->title }}">
                    <div class="p-6 flex flex-col justify-between h-[calc(420px-208px)]">
                        <div>
                            <h3 class="text-xl font-bold mb-2 truncate">{{ $berita->title }}</h3>
                            <div class="card-content">
                                @if (strlen($berita->content) < 30)
                                    <div class="text-minimal">
                                        <span class="text-warning">Konten sedang dalam proses update...</span>
                                    </div>
                                @else
                                    <p class="text-gray-600 text-base line-clamp-3">
                                        {{ $berita->description }}
                                    </p>
                                @endif
                            </div>
                        </div>
                        <a href="{{ route('berita.show', $berita) }}"
                            class="mt-4 inline-block text-white px-4 py-2 rounded-lg
                      bg-gradient-to-r from-[#3C71F8] to-[#24437C]
                      hover:opacity-90 transition w-40 text-center">
                            Selengkapnya
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <section><br><br><br><br><br>
        @foreach ($popularNews as $berita)
            <div class="popular-container flex">
                <div class="card"
                    style="background-image: url('{{ Storage::url('berita/' . $berita->image) }}'); background-size: cover;">
                </div>
                <div class="text">
                    <h2 class="font-semibold truncate">{{ $berita->title }}</h2>
                    <div class="popular-content">
                        @if (strlen($berita->content) < 50)
                            <div class="text-minimal">
                                <span class="text-warning">Konten sedang dalam proses update. Silakan klik selengkapnya
                                    untuk informasi lebih lanjut.</span>
                            </div>
                        @else
                            <p class="text-p line-clamp-4">{{ $berita->description }}</p>
                        @endif
                    </div>
                    <a href="{{ route('berita.show', $berita) }}"
                        class="mt-4 inline-block text-white px-4 py-2 rounded-lg
                      bg-gradient-to-r from-[#3C71F8] to-[#24437C]
                      hover:opacity-90 transition w-40 text-center text-sm">
                        Selengkapnya
                    </a>
                </div>
            </div>
            <br><br><br>
        @endforeach
    </section>

    <section class="prestasi">
        @if(request('search'))
            <div class="px-10 pb-4">
                <h2 class="text-2xl font-semibold">Hasil pencarian untuk: "{{ request('search') }}"</h2>
            </div>
        @else
            <h2 class="font-semibold text-2xl p-10">Semua Berita</h2><br>
        @endif
        <div class="px-8 py-12">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 -mt-20">
                @forelse ($beritas as $berita)
                    <!-- Card -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition">
                        <img src="{{ Storage::url('berita/' . $berita->image) }}" alt="{{ $berita->title }}"
                            class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="font-semibold text-lg truncate">{{ $berita->title }}</h3>
                            <div class="card-content">
                                @if (strlen($berita->content) < 30)
                                    <div class="text-minimal">
                                        <span class="text-warning">Konten sedang dalam proses update...</span>
                                    </div>
                                @else
                                    <p class="text-gray-600 text-sm mt-2 line-clamp-3">
                                        {{ $berita->description }}
                                    </p>
                                @endif
                            </div>
                            <a href="{{ route('berita.show', $berita) }}"
                                class="mt-4 inline-block bg-blue-600 text-white px-4 py-2 rounded text-sm hover:bg-blue-700 transition">
                                Selengkapnya
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="col-span-3 text-center">
                        <p class="text-gray-500 text-lg">Tidak ada berita yang ditemukan.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <div class="btn">
        {{ $beritas->appends(request()->query())->links() }}
    </div>
    <br>

    {{-- Script untuk validasi client-side --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Validasi untuk form (jika ada)
            const forms = document.querySelectorAll('form');
            forms.forEach(form => {
                form.addEventListener('submit', function(e) {
                    const textareas = form.querySelectorAll('textarea[minlength]');
                    let isValid = true;

                    textareas.forEach(textarea => {
                        const minLength = parseInt(textarea.getAttribute('minlength'));
                        if (textarea.value.length < minLength) {
                            isValid = false;
                            Swal.fire({
                                icon: 'error',
                                title: 'Validasi Gagal!',
                                text: `Konten harus minimal ${minLength} karakter`,
                                showConfirmButton: false,
                                timer: 2000
                            });
                            textarea.focus();
                        }
                    });

                    if (!isValid) {
                        e.preventDefault();
                    }
                });
            });

            // Auto-resize untuk textarea
            const textareas = document.querySelectorAll('textarea');
            textareas.forEach(textarea => {
                textarea.addEventListener('input', function() {
                    this.style.height = 'auto';
                    this.style.height = (this.scrollHeight) + 'px';
                });
            });
        });
    </script>
@endsection
