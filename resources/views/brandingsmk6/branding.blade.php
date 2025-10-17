@extends('layouts.app')
@section('title', 'Home')

@section('content')
    <style>
        .btn {
            padding: 12px 20px;
            color: white;
            font-weight: bold;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            background: linear-gradient(to right, #3C71F8, #24437C);
        }

        .swiper-button-next::after,
        .swiper-button-prev::after {
            display: none !important;

        }
    </style>
    <!-- Hero Section -->
    <section class="h-screen bg-gray-50 py-10 px-8 md:px-16">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="h-[70vh] swiper-slide flex flex-col md:flex-row items-center justify-between gap-8">
                    <div class="text-left md:w-1/2 ml-8 md:ml-[110px]">
                        <h1 class="text-3xl md:text-4xl font-bold mb-4 text-gray-800">
                            Karya Nyata Siswa, <br />Kualitas Profesional.
                        </h1>
                        <p class="text-gray-600 mb-6">
                            Dukung talenta muda dan dapatkan produk berkualitas hasil pembelajaran
                            berbasis proyek dari SMKN 6 Jember.
                        </p>
                        <a href="#"
                            class="px-6 py-3 border border-gray-800 rounded-md text-gray-800 font-medium hover:bg-gray-800 hover:text-white transition">
                            View More
                        </a>
                    </div>

                    <div class="md:w-1/2 flex justify-center relative">
                        <!-- Gambar dengan z-index lebih tinggi -->
                        <img src="{{ asset('image/branding/object.png') }}" alt="Produk"
                            class="w-80 h-auto object-contain drop-shadow-lg relative z-30" />

                        <!-- Card di belakang gambar -->
                        <div class="absolute bottom-6 right-96 bg-white shadow-lg rounded-xl p-4 w-52 z-20">
                            <h3 class="font-semibold text-gray-800">Design Packaging</h3>
                            <p class="text-sm text-yellow-400 mb-2">★★★★★ 5.0</p>
                            <p class="font-bold text-gray-800">Rp 20.000</p>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="h-[70vh] swiper-slide flex flex-col md:flex-row items-center justify-between gap-8">
                    <div class="text-left md:w-1/2 ml-8 md:ml-20">
                        <h1 class="text-3xl md:text-4xl font-bold mb-4 text-gray-800">
                            Karya Nyata Siswa, <br />Kualitas Profesional.
                        </h1>
                        <p class="text-gray-600 mb-6">
                            Dukung talenta muda dan dapatkan produk berkualitas hasil pembelajaran
                            berbasis proyek dari SMKN 6 Jember.
                        </p>
                        <a href="#"
                            class="px-6 py-3 border border-gray-800 rounded-md text-gray-800 font-medium hover:bg-gray-800 hover:text-white transition">
                            View More
                        </a>
                    </div>

                    <div class="md:w-1/2 flex justify-center relative">
                        <!-- Gambar dengan z-index lebih tinggi -->
                        <img src="{{ asset('image/branding/object2.png') }}" alt="Produk"
                            class="w-80 h-auto object-contain drop-shadow-lg relative z-30" />

                        <!-- Card di belakang gambar -->
                        <div class="absolute bottom-6 right-96 bg-white shadow-lg rounded-xl p-4 w-52 z-20">
                            <h3 class="font-semibold text-gray-800">Batik</h3>
                            <p class="text-sm text-yellow-400 mb-2">★★★★★ 5.0</p>
                            <p class="font-bold text-gray-800">Rp 220.000</p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Navigasi -->
            <div
                class="swiper-button-prev !w-10 !h-10 !rounded-full !border !border-gray-400 !bg-transparent flex justify-center items-center text-gray-600 hover:!bg-gray-100 transition">
                <i class="fa-solid fa-arrow-left"></i>
            </div>
            <div
                class="swiper-button-next !w-10 !h-10 !rounded-full !border !border-gray-400 !bg-transparent flex justify-center items-center text-gray-600 hover:!bg-gray-100 transition">
                <i class="fa-solid fa-arrow-right"></i>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <!-- Best Seller Section -->
    <section class="py-10 mt-12" style="margin-top: 15em">
        <h2 class="text-center text-2xl font-bold mb-8">Best Seller</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 px-6">
            @foreach ($bestsellers as $product)
                <div
                    class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition transform hover:-translate-y-1 flex flex-col">
                    <img src="{{ Storage::url('products/' . $product->image) }}" alt="{{ $product->name }}"
                        class="w-full h-40 object-cover">
                    <div class="p-4 flex flex-col flex-grow justify-between">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800">{{ $product->name }}</h3>
                            <p class="text-gray-600 mt-2 text-sm">
                                {{ $product->description }}
                            </p>
                        </div>
                        <a href="{{ route('product.show', $product) }}"
                            class="mt-4 px-4 py-2 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition w-40">
                            Detail
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <section class="mt-12">
        <div class="category-product">
            <h2 class="text-center text-2xl font-bold">Kategori Produk</h2>
            <div class="min-h-screen bg-gray-50 py-12">

                <!-- Grid Produk -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 px-8">
                    @foreach ($products as $product)
                        <div
                            class="bg-white rounded-2xl shadow-md hover:shadow-lg transition overflow-hidden flex flex-col">
                            <!-- Gambar Produk -->
                            <img src="{{ Storage::url('products/' . $product->image) }}" alt="{{ $product->name }}"
                                class="w-full h-55 object-cover">

                            <!-- Deskripsi Produk -->
                            <div class="p-5 flex flex-col justify-between flex-grow relative">
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-800">{{ $product->name }}</h3>
                                    <p class="text-gray-500 text-sm">{{ $product->description }}</p>
                                    <p class="mt-2 text-gray-900 font-semibold">Rp
                                        {{ number_format($product->price, 0, ',', '.') }}</p>
                                </div>

                                <!-- Tombol Panah -->
                                <a href="{{ route('product.show', $product) }}"
                                    class="absolute bottom-4 right-4 bg-blue-600 hover:bg-blue-700 text-white p-3 rounded-full shadow-md transition"
                                    style="width: 46px;">
                                    <i class="fa-solid fa-arrow-right flex justify-center items-center h-5"></i>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize Swiper
            var swiper = new Swiper('.mySwiper', {
                // Optional parameters
                direction: 'horizontal',
                loop: true,
                speed: 600,

                // Autoplay
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },

                // Pagination
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },

                // Navigation arrows
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },

                // Effect
                effect: 'slide',

                // Responsive breakpoints
                breakpoints: {
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 10
                    },
                    768: {
                        slidesPerView: 1,
                        spaceBetween: 20
                    },
                    1024: {
                        slidesPerView: 1,
                        spaceBetween: 30
                    }
                }
            });

            // Pause autoplay on hover
            const swiperContainer = document.querySelector('.mySwiper');
            if (swiperContainer) {
                swiperContainer.addEventListener('mouseenter', function() {
                    swiper.autoplay.stop();
                });

                swiperContainer.addEventListener('mouseleave', function() {
                    swiper.autoplay.start();
                });
            }

            console.log('Swiper initialized successfully');
        });
    </script>

@endsection
