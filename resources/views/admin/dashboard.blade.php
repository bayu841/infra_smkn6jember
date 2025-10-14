@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <h1 class="text-2xl font-bold text-gray-800 mb-4">Dashboard</h1>

    <!-- Statistik Card -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
        <div class="p-6 rounded-xl text-white shadow-md bg-[linear-gradient(to_right,#319F2C,#54C914)]">
            <div class="flex justify-between items-center">
                <div>
                    <h2 class="text-lg font-semibold">Jumlah Guru</h2>
                    <p class="text-3xl font-bold mt-2">103</p>
                </div>
                <i class="fas fa-users text-4xl opacity-80"></i>
            </div>
        </div>

        <div class="p-6 rounded-xl text-white shadow-md bg-[linear-gradient(to_right,#3C71F8,#4B88F9)]">
            <div class="flex justify-between items-center">
                <div>
                    <h2 class="text-lg font-semibold">Jumlah Artikel</h2>
                    <p class="text-3xl font-bold mt-2">6</p>
                </div>
                <i class="fas fa-file-alt text-4xl opacity-80"></i>
            </div>
        </div>

        <div class="p-6 rounded-xl text-white shadow-md bg-[linear-gradient(to_right,#F92626,#E22E2E)]">
            <div class="flex justify-between items-center">
                <div>
                    <h2 class="text-lg font-semibold">Jumlah Siswa</h2>
                    <p class="text-3xl font-bold mt-2">1501</p>
                </div>
                <i class="fas fa-user-graduate text-4xl opacity-80"></i>
            </div>
        </div>
    </div>

    <!-- Artikel dan Jadwal -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Artikel Terbaru -->
        <div class="md:col-span-2 bg-white rounded-xl shadow p-5">
            <div class="flex justify-between items-center mb-3">
                <h2 class="font-semibold text-lg text-gray-800">Artikel Terbaru</h2>
                <a href="#" class="text-blue-600 hover:underline text-sm">Lihat Semua</a>
            </div>
            <div class="space-y-4">
                <div class="flex items-center">
                    <div class="w-14 h-14 bg-gray-200 rounded-lg mr-4"></div>
                    <p class="text-gray-700">Guru SMKN 6 Jember raih penghargaan inovasi mengajar tingkat provinsi.</p>
                </div>
                <div class="flex items-center">
                    <div class="w-14 h-14 bg-gray-200 rounded-lg mr-4"></div>
                    <p class="text-gray-700">Siswa sukses ciptakan aplikasi sederhana berbasis Laravel di sekolah.</p>
                </div>
                <div class="flex items-center">
                    <div class="w-14 h-14 bg-gray-200 rounded-lg mr-4"></div>
                    <p class="text-gray-700">Kegiatan PMR bantu sesama dengan aksi donor darah di lingkungan sekolah.</p>
                </div>
            </div>
        </div>

        <!-- Jadwal Hari Ini -->
        <div class="bg-white rounded-xl shadow p-5">
            <h2 class="font-semibold text-lg text-gray-800 mb-3">Jadwal Hari Ini</h2>
            <div class="space-y-3">
                <div class="flex items-center justify-between bg-blue-100 text-blue-800 px-4 py-2 rounded-lg">
                    <span>Upacara Bendera</span>
                    <span class="text-sm">07.00–09.00</span>
                </div>
                <div class="flex items-center justify-between bg-red-100 text-red-800 px-4 py-2 rounded-lg">
                    <span>Ekstrakurikuler</span>
                    <span class="text-sm">07.00–09.00</span>
                </div>
                <div class="flex items-center justify-between bg-green-100 text-green-800 px-4 py-2 rounded-lg">
                    <span>Rapat OSIS</span>
                    <span class="text-sm">07.00–09.00</span>
                </div>
            </div>
        </div>
    </div>
@endsection
