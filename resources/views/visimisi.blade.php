@extends('layouts.app')

@section('title', 'Home')
@section('content')
    <div
        class="min-h-screen flex items-center justify-center py-10 px-4 bg-[url('{{ asset('image/home/bg-pattern.png') }}')] bg-cover bg-center bg-fixed">
        <div class="max-w-3xl w-full bg-white/90 backdrop-blur-lg rounded-2xl shadow-xl p-10 text-center">
            {{-- Logo Sekolah --}}
            <div class="flex justify-center mb-6">
                <img src="{{ asset('image/logosmk.png') }}" alt="Logo SMK Negeri 6 Jember" class="w-40 h-40 object-contain">
            </div>

            {{-- Judul --}}
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Visi Misi SMK Negeri 6 Jember</h2>

            {{-- Visi --}}
            <div class="text-left mb-6">
                <h3 class="font-semibold text-lg text-gray-800 mb-2">Visi:</h3>
                <p class="text-gray-700 leading-relaxed">
                    Terwujudnya lulusan yang unggul dalam prestasi serta memiliki kecakapan hidup (lifeskill)
                    berdasarkan IMTAQ dan IPTEK.
                </p>
            </div>

            {{-- Misi --}}
            <div class="text-left">
                <h3 class="font-semibold text-lg text-gray-800 mb-2">Misi:</h3>
                <ol class="list-decimal list-inside text-gray-700 leading-relaxed space-y-1">
                    <li>Meningkatkan karakter siswa yang sesuai dengan profil pelajar Pancasila.</li>
                    <li>Meningkatkan ekosistem sekolah yang sehat dan menyenangkan.</li>
                    <li>Melakukan upaya pelestarian lingkungan hidup.</li>
                </ol>
            </div>
            <br>
            <div class="text-left">
                <h3 class="font-semibold text-lg text-gray-800 mb-2">Sejarah</h3>
                <ol class="list-decimal list-inside text-gray-700 leading-relaxed space-y-1">
                    <p>SMK Negeri 6 Jember memiliki sejarah panjang yang berawal dari berdirinya SMEA Swadaya pada tahun
                        1965. Seiring waktu, sekolah ini mengalami berbagai perubahan nama dan status. Pada tanggal 2
                        Agustus 1972, berdasarkan SK Menteri Pendidikan dan Kebudayaan RI No. 0116/0/1972, sekolah ini
                        berubah menjadi SMEA Negeri Persiapan yang berlokasi di Jalan Semboro No. 83, Tanggul. Kemudian,
                        pada tahun 1991, sekolah mendapatkan bantuan pembangunan gedung dan sarana fisik melalui proyek
                        pendidikan (SK Pimpro Jatim No. A.0195/1991/1992 tanggal 10 Juli 1991). Gedung baru tersebut
                        dibangun di Jalan PB. Sudirman No. 114, Tanggul dan diresmikan langsung oleh Menteri Pendidikan
                        dan Kebudayaan, Prof. Dr. Ing. Wardiman Djojonegoro, pada 29 Agustus 1994.

                        Selanjutnya, pada tahun 2003, sekolah ini berganti nama menjadi SMK Negeri 1 Tanggul. Namun,
                        berdasarkan Keputusan Bupati Jember Nomor 188.45/356/012/2012 tentang nomenklatur lembaga satuan
                        pendidikan, pada tanggal 5 November 2012 nama sekolah resmi berubah menjadi SMK Negeri 6
                        Jember. Saat ini, SMK Negeri 6 Jember berlokasi di Jalan PB. Sudirman No. 114, Desa Tanggul
                        Kulon, Kecamatan Tanggul, Kabupaten Jember, dengan luas lahan sekitar 11.500 m². Perjalanan
                        panjang tersebut mencerminkan komitmen sekolah dalam meningkatkan mutu pendidikan kejuruan dan
                        berperan aktif dalam mencetak sumber daya manusia yang unggul di Kabupaten Jember dan sekitarnya.
                    </p>
                </ol>
            </div>
        </div>
    </div>
@endsection
