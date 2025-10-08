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
                    <div class="text-left md:w-1/2">
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
                        <img src="https://cdn.pixabay.com/photo/2014/12/27/15/40/camera-581126_1280.jpg" alt="Produk"
                            class="w-80 h-auto object-contain drop-shadow-lg" />
                        <div class="absolute bottom-6 right-8 bg-white shadow-lg rounded-xl p-4 w-52">
                            <p class="text-xs text-gray-400">Computer/Electronic</p>
                            <h3 class="font-semibold text-gray-800">Canon EOS 800D</h3>
                            <p class="text-sm text-yellow-400 mb-2">★★★★★ 5.0</p>
                            <p class="font-bold text-gray-800">Rp 20.000</p>
                            <a href="#" class="text-sm text-blue-600 hover:underline">View More →</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="h-[70vh] swiper-slide flex flex-col md:flex-row items-center justify-between gap-8">
                    <div class="text-left md:w-1/2">
                        <h1 class="text-3xl md:text-4xl font-bold mb-4 text-gray-800">
                            Inovasi Desain, <br />Cipta Karya Modern.
                        </h1>
                        <p class="text-gray-600 mb-6">
                            Produk kreatif hasil karya siswa SMKN 6 Jember yang siap bersaing secara profesional.
                        </p>
                        <a href="#"
                            class="px-6 py-3 border border-gray-800 rounded-md text-gray-800 font-medium hover:bg-gray-800 hover:text-white transition">
                            View More
                        </a>
                    </div>

                    <div class="md:w-1/2 flex justify-center relative">
                        <img src="https://cdn.pixabay.com/photo/2017/01/22/19/20/laptop-2004499_1280.jpg" alt="Produk"
                            class="w-80 h-auto object-contain drop-shadow-lg" />
                        <div class="absolute bottom-6 right-8 bg-white shadow-lg rounded-xl p-4 w-52">
                            <p class="text-xs text-gray-400">Digital Product</p>
                            <h3 class="font-semibold text-gray-800">Modern Design Pack</h3>
                            <p class="text-sm text-yellow-400 mb-2">★★★★☆ 4.8</p>
                            <p class="font-bold text-gray-800">Rp 25.000</p>
                            <a href="#" class="text-sm text-blue-600 hover:underline">View More →</a>
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
    <section class="py-10 mb-20">
        <h2 class="text-center text-2xl font-bold mb-8">Best Seller</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 px-6">
            <!-- Card 1 -->
            <div
                class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition transform hover:-translate-y-1 flex flex-col">
                <img src="https://via.placeholder.com/400x200" alt="Card 1" class="w-full h-40 object-cover">
                <div class="p-4 flex flex-col flex-grow justify-between">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800">Card Satu</h3>
                        <p class="text-gray-600 mt-2 text-sm">
                            Deskripsi singkat tentang card pertama. Bisa berisi informasi produk, profil, atau kegiatan
                            sekolah.
                        </p>
                    </div>
                    <button
                        class="mt-4 px-4 py-2 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition w-40">
                        Detail
                    </button>
                </div>
            </div>

            <!-- Card 2 -->
            <div
                class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition transform hover:-translate-y-1 flex flex-col">
                <img src="https://via.placeholder.com/400x200" alt="Card 2" class="w-full h-40 object-cover">
                <div class="p-4 flex flex-col flex-grow justify-between">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800">Card Dua</h3>
                        <p class="text-gray-600 mt-2 text-sm">
                            Deskripsi singkat tentang card kedua. Dapat digunakan untuk menampilkan data, profil, atau
                            kegiatan siswa.
                        </p>
                    </div>
                    <button
                        class="mt-4 px-4 py-2 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition w-40">
                        Detail
                    </button>
                </div>
            </div>

            <!-- Card 3 -->
            <div
                class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition transform hover:-translate-y-1 flex flex-col">
                <img src="https://via.placeholder.com/400x200" alt="Card 3" class="w-full h-40 object-cover">
                <div class="p-4 flex flex-col flex-grow justify-between">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800">Card Tiga</h3>
                        <p class="text-gray-600 mt-2 text-sm">
                            Deskripsi singkat tentang card ketiga. Cocok untuk galeri, portofolio, atau informasi alumni.
                        </p>
                    </div>
                    <button
                        class="mt-4 px-4 py-2 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition w-40">
                        Detail
                    </button>
                </div>
            </div>

            <div
                class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition transform hover:-translate-y-1 flex flex-col">
                <img src="https://via.placeholder.com/400x200" alt="Card 3" class="w-full h-40 object-cover">
                <div class="p-4 flex flex-col flex-grow justify-between">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800">Card Empat</h3>
                        <p class="text-gray-600 mt-2 text-sm">
                            Deskripsi singkat tentang card ketiga. Cocok untuk galeri, portofolio, atau informasi alumni.
                        </p>
                    </div>
                    <button
                        class="mt-4 px-4 py-2 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition w-40">
                        Detail
                    </button>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="category-product">
            <h2 class="text-center text-2xl font-bold">Kategori Produk</h2>
            <div class="min-h-screen bg-gray-50 py-12">

                <!-- Filter Kategori -->
                <div class="flex justify-center space-x-4 mb-10">
                    <button
                        class="px-6 py-2 rounded-full border border-blue-500 text-blue-600 font-semibold hover:bg-blue-100 transition">Batik
                        Enem</button>
                    <button
                        class="px-6 py-2 rounded-full border border-blue-500 text-blue-600 font-semibold hover:bg-blue-100 transition">Studio
                        Enem</button>
                    <button
                        class="px-6 py-2 rounded-full border border-blue-500 text-blue-600 font-semibold hover:bg-blue-100 transition">Energi
                        Enem</button>
                </div>

                <!-- Grid Produk -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 px-8">
                    @for ($i = 1; $i <= 6; $i++)
                        <div
                            class="bg-white rounded-2xl shadow-md hover:shadow-lg transition overflow-hidden flex flex-col">
                            <!-- Gambar Produk -->
                            <img src="https://via.placeholder.com/400x300" alt="Produk {{ $i }}"
                                class="w-full h-52 object-cover">

                            <!-- Deskripsi Produk -->
                            <div class="p-5 flex flex-col justify-between flex-grow relative">
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-800">Batik Oambakoro</h3>
                                    <p class="text-gray-500 text-sm">Buku catatan Custom UK A5</p>
                                    <p class="mt-2 text-gray-900 font-semibold">Rp 20.000</p>
                                </div>

                                <!-- Tombol Panah -->
                                <a href="#"
                                    class="absolute bottom-4 right-4 bg-blue-600 hover:bg-blue-700 text-white p-3 rounded-full shadow-md transition"
                                    style="width: 46px;">
                                    <i class="fa-solid fa-arrow-right flex justify-center items-center h-5"></i>
                                </a>
                            </div>
                        </div>
                    @endfor
                </div>

                <!-- Pagination -->
                <div class="flex justify-end items-center space-x-4 mt-10 mr-10">
                    <button class="px-5 py-2 bg-white border border-gray-300 rounded-md hover:bg-gray-100 text-gray-700">←
                        Previous</button>
                    <button class="px-5 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Next →</button>
                </div>
            </div>
        </div>
    </section>
    <section class="flex justify-between items-center px-10 py-6 bg-gray-50">
        <!-- Judul -->
        <h2 class="text-2xl font-bold text-gray-800">Studio Enem</h2>

        <!-- Kolom Pencarian & Tombol Filter -->
        <div class="flex items-center space-x-3">
            <!-- Kolom Pencarian -->
            <div class="flex items-center border border-gray-300 rounded-full px-4 py-2 w-72 bg-white">
                <i class="fa-solid fa-magnifying-glass text-gray-400 mr-2"></i>
                <input type="text" placeholder="Cari Produk..."
                    class="w-full bg-transparent focus:outline-none text-gray-600 placeholder-gray-400" />
            </div>

            <!-- Tombol Filter -->
            <button
                class="flex items-center border border-gray-300 rounded-md px-4 py-2 text-gray-500 hover:bg-gray-100 transition">
                <i class="fa-solid fa-filter mr-2"></i>
                <span>Filter</span>
            </button>
        </div>
    </section>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 px-8">
        @for ($i = 1; $i <= 4; $i++)
            <div class="bg-white rounded-2xl shadow-md hover:shadow-lg transition overflow-hidden flex flex-col">
                <!-- Gambar Produk -->
                <img src="https://via.placeholder.com/400x300" alt="Produk {{ $i }}"
                    class="w-full h-52 object-cover">

                <!-- Deskripsi Produk -->
                <div class="p-5 flex flex-col justify-between flex-grow relative">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800">Notebook A5</h3>
                        <p class="text-gray-500 text-sm">Buku catatan Custom UK A5</p>
                        <p class="mt-2 text-gray-900 font-semibold">Rp 20.000</p>
                    </div>

                    <!-- Tombol Panah -->
                    <a href="#"
                        class="absolute bottom-4 right-4 bg-blue-600 hover:bg-blue-700 text-white p-3 rounded-full shadow-md transition"
                        style="width: 46px;">
                        <i class="fa-solid fa-arrow-right flex justify-center items-center h-5"></i>
                    </a>
                </div>
            </div>
        @endfor
    </div>
    <section class="flex justify-between items-center px-10 py-6 bg-gray-50">
        <h2 class="text-2xl font-bold text-gray-800 mt-10">Batik Enem</h2>
    </section>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 px-8">
        @for ($i = 1; $i <= 4; $i++)
            <div class="bg-white rounded-2xl shadow-md hover:shadow-lg transition overflow-hidden flex flex-col">
                <!-- Gambar Produk -->
                <img src="https://via.placeholder.com/400x300" alt="Produk {{ $i }}"
                    class="w-full h-52 object-cover">

                <!-- Deskripsi Produk -->
                <div class="p-5 flex flex-col justify-between flex-grow relative">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800">Notebook A5</h3>
                        <p class="text-gray-500 text-sm">Buku catatan Custom UK A5</p>
                        <p class="mt-2 text-gray-900 font-semibold">Rp 20.000</p>
                    </div>

                    <!-- Tombol Panah -->
                    <a href="#"
                        class="absolute bottom-4 right-4 bg-blue-600 hover:bg-blue-700 text-white p-3 rounded-full shadow-md transition"
                        style="width: 46px;">
                        <i class="fa-solid fa-arrow-right flex justify-center items-center h-5"></i>
                    </a>
                </div>
            </div>
        @endfor
    </div><br><br>
    <script>
        const swiper = new Swiper(".mySwiper", {
            loop: true,
            autoplay: {
                delay: 5000,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>

@endsection
