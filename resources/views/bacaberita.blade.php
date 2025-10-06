@extends('layouts.app')
@section('title', 'Home')

@section('content')
    <div class="max-w-6xl mx-auto px-4 py-10 grid grid-cols-1 md:grid-cols-3 gap-8 pt-10">

    <!-- Main Content -->
    <div class="md:col-span-2 bg-white rounded-lg shadow-md p-6">
      <img src="{{asset('image/berita/bacaberita.png')}}"
           alt="Berita"
           class="rounded-lg mb-6 w-full object-cover">

      <h1 class="text-2xl md:text-3xl font-bold mb-2">
        Dua Siswa KKBT berhasil menjual karyanya omset melonjak naik!
      </h1>
      <p class="text-gray-500 mb-6">Selasa, 12 Agustus 2025</p>

      <p class="text-gray-700 leading-relaxed mb-4">
        Dua siswa SMKN 6 Jember dari jurusan KKBT berhasil mencatatkan prestasi membanggakan melalui karya kreatif yang mereka hasilkan. Dengan semangat kewirausahaan yang tinggi, keduanya mampu menjual produk hasil tangan mereka hingga mendapatkan omset yang terus meningkat.
      </p>

      <p class="text-gray-700 leading-relaxed mb-4">
        Keberhasilan ini menjadi bukti nyata bahwa siswa tidak hanya mampu berprestasi di bidang akademik, tetapi juga dapat mengembangkan keterampilan praktis yang bermanfaat untuk masa depan. Produk yang mereka hasilkan berupa kerajinan tangan dengan desain unik, memadukan unsur tradisional dan modern sehingga menarik perhatian banyak konsumen.
      </p>

      <p class="text-gray-700 leading-relaxed">
        Prestasi ini diharapkan dapat menjadi inspirasi bagi siswa lainnya untuk terus berinovasi, menemukan peluang usaha, serta membuktikan bahwa kreativitas bisa menjadi jalan menuju kesuksesan.
      </p>
    </div>

    <!-- Sidebar -->
    <aside class="space-y-8">

      <!-- Kategori -->
      <div class="bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-xl font-bold mb-4">Kategori</h2>
        <ul class="space-y-2 text-gray-700">
          <li><a href="#" class="hover:text-blue-600">Prestasi Siswa</a></li>
          <li><a href="#" class="hover:text-blue-600">Kegiatan Sekolah</a></li>
          <li><a href="#" class="hover:text-blue-600">Pengumuman</a></li>
          <li><a href="#" class="hover:text-blue-600">Akademik</a></li>
          <li><a href="#" class="hover:text-blue-600">Seni & Budaya</a></li>
        </ul>
      </div>

      <!-- Top Posts -->
      <div class="bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-xl font-bold mb-4">Top Posts</h2>
        <ol class="space-y-3 list-decimal list-inside text-gray-700">
          <li><a href="#" class="hover:text-blue-600">SMK 6 Jember Juara Futsal Cup 2025</a></li>
          <li><a href="#" class="hover:text-blue-600">Siswa RPL Sukses di Lomba Coding Nasional</a></li>
          <li><a href="#" class="hover:text-blue-600">Ekstrakurikuler Musik Raih Penghargaan</a></li>
          <li><a href="#" class="hover:text-blue-600">Workshop Desain Grafis di SMKN 6</a></li>
          <li><a href="#" class="hover:text-blue-600">Tips Belajar Efektif untuk Siswa</a></li>
        </ol>
      </div>

    </aside>

  </div>
@endsection
