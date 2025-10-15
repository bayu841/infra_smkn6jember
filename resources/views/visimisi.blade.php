@extends('layouts.app')

@section('title', 'Home')
@section('content')
<div class="min-h-screen flex items-center justify-center py-10 px-4 bg-[url('{{ asset('image/home/bg-pattern.png') }}')] bg-cover bg-center bg-fixed">
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
    </div>
</div>
@endsection
