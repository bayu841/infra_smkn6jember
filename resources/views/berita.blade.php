@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <style>
        .berita-section {
            background-image: url("{{ asset('image/berita/bgberita.png') }}");
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
        }
    </style>

    <div class="berita-section text-black pt-10">
        <div class="p-20">
            <h2 class="text-4xl font-bold">Berita Dan Pengumuman</h2>
            <p class="mt-4 text-lg max-w-3xl">
                Informasi dan Berita Terkini SMK Negeri 6 Jember, dari Prestasi hingga Kegiatan Siswa
            </p>
        </div>
        <h2 class="font-semibold ml-20 text-2xl">Last Post</h2><br>
        <!-- Grid Card -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 px-10 pb-20">
            <!-- Card 1 -->
            <div
                class="w-[360px] h-[440px] bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition mx-auto">
                <img class="w-full h-52 object-cover" src="{{asset('image/berita/prestasi/pres1.jpg')}}" alt="Berita">
                <div class="p-6 flex flex-col justify-between h-[calc(420px-208px)]">
                    <div>
                        <h3 class="text-xl font-bold mb-2">Siswa RPL Raih Juara Aplikasi</h3>
                        <p class="text-gray-600 text-base">
                           Tim RPL SMKN 6 Jember meraih juara harapan 1 lomba EPIM JTI
                           aplikasi tingkat provinsi berkat ide kreatif dan kerja sama solid.
                        </p>
                    </div>
                    <a href="#"
                        class="mt-4 inline-block text-white px-4 py-2 rounded-lg
                      bg-gradient-to-r from-[#3C71F8] to-[#24437C]
                      hover:opacity-90 transition w-40 text-center">
                        Selengkapnya
                    </a>
                </div>
            </div>

            <!-- Card 2 -->
            <div
                class="w-[360px] h-[440px] bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition mx-auto">
                <img class="w-full h-52 object-cover" src="https://source.unsplash.com/600x400/?student" alt="Berita">
                <div class="p-6 flex flex-col justify-between h-[calc(420px-208px)]">
                    <div>
                        <h3 class="text-xl font-bold mb-2">SMK 6 Juara Basket Putra</h3>
                        <p class="text-gray-600 text-base">
                            Tim basket putra SMKN 6 Jember meraih juara pertama pada turnamen antar sekolah dengan penuh
                            semangat.
                        </p>
                    </div>
                    <a href="#"
                        class="mt-4 inline-block text-white px-4 py-2 rounded-lg
                      bg-gradient-to-r from-[#3C71F8] to-[#24437C]
                      hover:opacity-90 transition w-40 text-center">
                        Selengkapnya
                    </a>
                </div>
            </div>

            <!-- Kolom 3 (Search + Card List) -->
            <div class="flex flex-col gap-6">
                <!-- Search & Filter -->
                <div class="flex items-center gap-2">
                    <div class="relative flex-1">
                        <span class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400">
                            🔍
                        </span>
                        <input type="text" placeholder="Cari Berita..."
                            class="w-full pl-10 pr-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    </div>
                    <button
                        class="flex items-center gap-1 px-4 py-2 rounded-lg border border-gray-300 bg-white hover:bg-gray-100">
                        <span>Filter</span> ⚙️
                    </button>
                </div>

                <!-- List Item 1 -->
                <div class="flex items-start gap-4 bg-white rounded-xl shadow p-4 hover:shadow-lg transition">
                    <div class="w-60 h-20 bg-gray-200 rounded-lg"></div>
                    <div>
                        <h3 class="font-bold text-lg">Siswa RPL Raih Juara Aplikasi</h3>
                        <p class="text-gray-600 text-sm">
                            Tim RPL SMKN 6 Jember meraih juara 1 lomba inovasi aplikasi tingkat provinsi berkat ide kreatif
                            dan kerja sama solid.
                        </p>
                    </div>
                </div>

                <!-- List Item 2 -->
                <div class="flex items-start gap-4 bg-white rounded-xl shadow p-4 hover:shadow-lg transition">
                    <div class="w-60 h-20 bg-gray-200 rounded-lg"></div>
                    <div>
                        <h3 class="font-bold text-lg">Workshop Desain Grafis di SMKN 6</h3>
                        <p class="text-gray-600 text-sm">
                            Puluhan siswa antusias ikuti workshop desain grafis, belajar teknik kreatif digital untuk bekal
                            di dunia industri modern.
                        </p>
                    </div>
                </div>

                <!-- List Item 3 -->
                <div class="flex items-start gap-4 bg-white rounded-xl shadow p-4 hover:shadow-lg transition">
                    <div class="w-60 h-20 bg-gray-200 rounded-lg"></div>
                    <div>
                        <h3 class="font-bold text-lg">PMR Bawa Pulang Juara Bina 2</h3>
                        <p class="text-gray-600 text-sm">
                            PMR Wira SMKN 6 Jember berhasil meraih juara bina 2 dalam LKBB Kandita, bukti kedisiplinan serta
                            kekompakan tim.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section>
        <h2 class="font-semibold text-2xl p-20">Populer Minggu Ini</h2>
        <div class="popular-container flex">
            <div class="card">
            </div>
            <div class="text">
                <h2 class="font-semibold">Siswa SMKN 6 Jember Raih Juara dalam Lomba Desain Grafis Tingkat Kabupaten</h2>
                <p class="text-p">Siswa SMKN 6 Jember kembali menorehkan prestasi gemilang dengan meraih juara Lomba Desain
                    Grafis tingkat Kabupaten. Kompetisi ini diikuti puluhan peserta dari SMK. Karya siswa SMKN 6 Jember
                    dinilai unggul karena kreativitas, keunikan, serta ketepatan konsep.
                    Keberhasilan ini bukti nyata kualitas pendidikan dan potensi siswa.</p>
                <a href="#"
                    class="mt-4 inline-block text-white px-4 py-2 rounded-lg
                      bg-gradient-to-r from-[#3C71F8] to-[#24437C]
                      hover:opacity-90 transition w-40 text-center text-sm">
                    Selengkapnya
                </a>
            </div>
        </div><br><br><br><br>
        <div class="popular-container flex">
            <div class="card" style="background-image: url('/image/berita/pmr.jpg'); background-size: cover;">
            </div>
            <div class="text">
                <h2 class="font-semibold">PMR SMKN 6 Jember Gelar Donor Darah untuk Sosial</h2>
                <p class="text-p">PMR SMKN 6 Jember mengadakan kegiatan donor darah untuk membantu sesama sekaligus
                    meningkatkan kepedulian sosial. Acara ini bekerja sama dengan PMI Kabupaten Jember dan mendapat
                    antusiasme warga sekolah.
                    Melalui kegiatan ini, siswa belajar berbagi serta menumbuhkan empati dan kepedulian masyarakat sekitar.
                </p>
                <a href="#"
                    class="mt-4 inline-block text-white px-4 py-2 rounded-lg
                      bg-gradient-to-r from-[#3C71F8] to-[#24437C]
                      hover:opacity-90 transition w-40 text-center text-sm">
                    Selengkapnya
                </a>
            </div>
        </div><br><br><br><br>
        <div class="popular-container flex">
            <div class="card">
            </div>
            <div class="text">
                <h2 class="font-semibold">Siswa SMKN 6 Jember Berhasil Ciptakan Aplikasi Inovatif</h2>
                <p class="text-p">Siswa jurusan Rekayasa Perangkat Lunak SMKN 6 Jember menciptakan aplikasi inovatif yang
                    membantu guru dan siswa mengatur jadwal belajar.
                    Aplikasi ini mendapat apresiasi sekolah karena mempermudah komunikasi dan meningkatkan efektivitas
                    belajar.
                    Prestasi ini bukti kreativitas serta kemampuan teknologi generasi muda SMKN 6 Jember.</p>
                <a href="#"
                    class="mt-4 inline-block text-white px-4 py-2 rounded-lg
                      bg-gradient-to-r from-[#3C71F8] to-[#24437C]
                      hover:opacity-90 transition w-40 text-center text-sm">
                    Selengkapnya
                </a>
            </div>
        </div>
    </section>
    <section class="prestasi">
        <h2 class="font-semibold text-2xl p-20">Lomba Dan Prestasi</h2>
        <div class="px-8 py-12">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Card -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition">
                    <img src="https://source.unsplash.com/600x400/?basketball" alt="Berita"
                        class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-semibold text-lg">SMK 6 Juara Basket Putra</h3>
                        <p class="text-gray-600 text-sm mt-2">
                            Tim basket putra SMKN 6 Jember meraih juara pertama pada turnamen antar sekolah dengan penuh
                            semangat.
                        </p>
                        <a href="#"
                            class="mt-4 inline-block bg-blue-600 text-white px-4 py-2 rounded text-sm hover:bg-blue-700 transition">
                            Selengkapnya
                        </a>
                    </div>
                </div>

                <!-- Card -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition">
                    <img src="https://source.unsplash.com/600x400/?students" alt="Berita"
                        class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-semibold text-lg">SMK 6 Juara Basket Putra</h3>
                        <p class="text-gray-600 text-sm mt-2">
                            Tim basket putra SMKN 6 Jember meraih juara pertama pada turnamen antar sekolah dengan penuh
                            semangat.
                        </p>
                        <a href="#"
                            class="mt-4 inline-block bg-blue-600 text-white px-4 py-2 rounded text-sm hover:bg-blue-700 transition">
                            Selengkapnya
                        </a>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition">
                    <img src="https://source.unsplash.com/600x400/?students" alt="Berita"
                        class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-semibold text-lg">SMK 6 Juara Basket Putra</h3>
                        <p class="text-gray-600 text-sm mt-2">
                            Tim basket putra SMKN 6 Jember meraih juara pertama pada turnamen antar sekolah dengan penuh
                            semangat.
                        </p>
                        <a href="#"
                            class="mt-4 inline-block bg-blue-600 text-white px-4 py-2 rounded text-sm hover:bg-blue-700 transition">
                            Selengkapnya
                        </a>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition">
                    <img src="https://source.unsplash.com/600x400/?students" alt="Berita"
                        class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-semibold text-lg">SMK 6 Juara Basket Putra</h3>
                        <p class="text-gray-600 text-sm mt-2">
                            Tim basket putra SMKN 6 Jember meraih juara pertama pada turnamen antar sekolah dengan penuh
                            semangat.
                        </p>
                        <a href="#"
                            class="mt-4 inline-block bg-blue-600 text-white px-4 py-2 rounded text-sm hover:bg-blue-700 transition">
                            Selengkapnya
                        </a>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition">
                    <img src="https://source.unsplash.com/600x400/?students" alt="Berita"
                        class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-semibold text-lg">SMK 6 Juara Basket Putra</h3>
                        <p class="text-gray-600 text-sm mt-2">
                            Tim basket putra SMKN 6 Jember meraih juara pertama pada turnamen antar sekolah dengan penuh
                            semangat.
                        </p>
                        <a href="#"
                            class="mt-4 inline-block bg-blue-600 text-white px-4 py-2 rounded text-sm hover:bg-blue-700 transition">
                            Selengkapnya
                        </a>
                    </div>
                </div>

                <!-- Card -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition">
                    <img src="https://source.unsplash.com/600x400/?school" alt="Berita"
                        class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-semibold text-lg">SMK 6 Juara Basket Putra</h3>
                        <p class="text-gray-600 text-sm mt-2">
                            Tim basket putra SMKN 6 Jember meraih juara pertama pada turnamen antar sekolah dengan penuh
                            semangat.
                        </p>
                        <a href="#"
                            class="mt-4 inline-block bg-blue-600 text-white px-4 py-2 rounded text-sm hover:bg-blue-700 transition">
                            Selengkapnya
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="btn">
        <button class="previous">← Kembali</button>
        <button class="next">Selanjutnya →</button>
    </div>
    <br>
@endsection
