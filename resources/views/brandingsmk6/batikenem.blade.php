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
            background: linear-gradient(to right, #CA4016, #E64817);
        }
    </style>
    <section class="h-screen bg-cover bg-center flex items-center justify-center text-black"
        style="background-image: url('image/batikenem/hero.png'); width:100%; height:110vh; background-size:cover;">
        <!-- Teks -->
        <div class="flex-1 mb-10 md:mb-0 ml-40">
            <h1 class="text-4xl md:text-1xl font-bold mb-5">Menggali Sejarah, Menjalin Masa <br>
                Depan Bersama Batik Enem
            </h1>
            <p class="text-lg md:text-x mb-7">
                Batik Enem — harmoni antara sejarah dan inovasi. Setiap motif <br>
                membawa cerita masa lalu yang diolah menjadi gaya masa <br>
                kini, menciptakan identitas baru bagi karya batik lokal. <br>
            </p>
            <a href="#" class="btn" style="background color">
                Jelajahi Produk
            </a>
        </div>
        </div>
    </section>
    <section>
        <h2 class="text-3xl font-bold p-10 text-[#DB6007]">Produk</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 px-6 mb-10">
            <div class="max-w-sm rounded-lg overflow-hidden shadow-lg">
                <img src="{{ asset('image/batikenem/batik (1).png') }}" alt="Produk" class="w-full">
            </div>
            <div class="max-w-sm rounded-lg overflow-hidden shadow-lg">
                <img src="{{ asset('image/batikenem/batik (2).png') }}" alt="Produk" class="w-full">
            </div>
            <div class="max-w-sm rounded-lg overflow-hidden shadow-lg">
                <img src="{{ asset('image/batikenem/batik (3).png') }}" alt="Produk" class="w-full">
            </div>
            <div class="max-w-sm rounded-lg overflow-hidden shadow-lg">
                <img src="{{ asset('image/batikenem/batik (4).png') }}" alt="Produk" class="w-full">
            </div>
        </div>
    </section>
    <section class="flex flex-col md:flex-row items-center justify-center gap-6 bg-white p-6 md:p-10 rounded-2xl">
        <!-- Gambar -->
        <div class="w-full md:w-1/2 rounded-3xl overflow-hidden">
            <img src="{{asset('image/batikenem/about.png')}}" alt="Batik Enem" class="w-full h-full object-cover">
        </div>

        <!-- Card Teks -->
        <div class="w-full md:w-1/2 bg-[#E14F1A] text-white p-8 rounded-3xl shadow-lg">
            <h2 class="text-2xl font-bold mb-3">Apa itu Batik Enem?</h2>
            <p class="text-sm md:text-base leading-relaxed mb-6">
                Batik Enem adalah karya batik khas SMKN 6 Jember yang memadukan nilai tradisi dan inovasi.
                Terinspirasi dari sejarah dan kearifan lokal Jember, setiap motif Batik Enem mencerminkan
                semangat kreatif generasi muda dalam melestarikan budaya sekaligus menghadirkan desain modern
                yang elegan dan berkarakter.
            </p>
            <a href="#"
                class="inline-block bg-white text-[#E14F1A] font-semibold px-5 py-2 rounded-full hover:bg-gray-100 transition">
                Selengkapnya
            </a>
        </div>
    </section>

@endsection
