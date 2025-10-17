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
                    <p>Sejarah Singkat SMK Negeri 6 Jember

                        SMK Negeri 6 Jember berawal dari berdirinya SMEA Swasta “Swadaya” di Kecamatan Tanggul pada tahun
                        1965. Dua tahun kemudian, tepatnya tahun 1967, sekolah ini berganti nama menjadi SMEA Persiapan
                        Negeri yang beralamat di Jalan Semboro No. 83 Tanggul, Jember.
                        <br>
                        Pada tahun 1972, SMEA Persiapan Negeri resmi menjadi SMEA Negeri berdasarkan SK Mendikbud No.
                        0116/0/1972 tanggal 2 Agustus 1972, dengan kepala sekolah pertama Bapak Tiarum Siswohadi, B.A..
                        Setelah beliau pindah ke Banyuwangi pada tahun 1984, kepemimpinan diteruskan oleh Bapak Hasanudin,
                        B.A. dari Pamekasan.
                        <br>
                        Perkembangan sekolah semakin pesat, ditandai dengan diterimanya bantuan proyek pembangunan gedung
                        baru dan sarana pendidikan pada tahun 1991 melalui SK Pinpro Jatim No. A.0195/1991/1992 tanggal 10
                        Juli 1991. Pembangunan gedung baru di Jalan PB. Sudirman No. 114 Tanggul dimulai pada tahun 1992 dan
                        mulai digunakan pada tahun 1993, meskipun sebagian kegiatan belajar masih dilakukan di gedung lama.
                        <br>
                        Peresmian gedung baru dilakukan oleh Mendikbud Prof. Dr. Ing. Wardiman Djojonegoro pada hari Senin,
                        29 Agustus 1994. Selanjutnya, pada tahun 2003, nama sekolah berubah menjadi SMK Negeri 1 Tanggul,
                        dan pada tahun 2013, berdasarkan SK Bupati Jember, nama sekolah resmi menjadi SMK Negeri 6 Jember,
                        yang berlokasi di Jalan PB. Sudirman No. 114 Tanggul, Jember hingga sekarang.
                </ol>
            </div>
        </div>
    </div>
@endsection
