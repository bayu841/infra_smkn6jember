@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <br>

    <section class="max-w-3xl mx-auto bg-white p-8 rounded-lg shadow-md">
        <!-- Harga dan Judul -->
        <h2 class="text-2xl font-extrabold text-gray-900 mb-2">Rp 100.000</h2>
        <p class="text-lg font-semibold text-gray-800 mb-6">Batik Oambakoro – Tulis/Print By Batik Enem</p>

        <!-- Deskripsi Produk -->
        <h3 class="text-lg font-bold text-gray-900 mb-2">Deskripsi Produk:</h3>
        <p class="text-gray-700 leading-relaxed mb-4">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <p class="text-gray-700 leading-relaxed mb-4">
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
            totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
            explicabo.
            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores
            eos
            qui ratione voluptatem sequi nesciunt.
        </p>
        <p class="text-gray-700 leading-relaxed mb-6">
            But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born
            and I will give you a complete account of the system, and expound the actual teachings of the great explorer of
            the truth,
            the master-builder of human happiness.
        </p>

        <!-- Tombol Aksi -->
        <div class="flex gap-3">
            <button
                class="px-6 py-2 border border-blue-500 text-blue-600 font-semibold rounded-md hover:bg-blue-50 transition">
                Kembali
            </button>
            <button class="px-6 py-2 bg-blue-600 text-white font-semibold rounded-md hover:bg-blue-700 transition">
                Beli Sekarang
            </button>
        </div>
    </section>
    <br>
@endsection
