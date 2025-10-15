@extends('layouts.app')

@section('title', 'Detail Produk')

@section('content')
<section class="py-12 bg-gray-50">
    <div class="container mx-auto px-6">

        <div class="bg-white rounded-2xl shadow overflow-hidden mb-8">
            <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="w-full h-[420px] object-cover">
        </div>

        <div class="max-w-4xl mx-auto">
            <h3 class="text-2xl font-bold text-gray-800 mb-2">Rp {{ number_format($product->price, 0, ',', '.') }}</h3>
            <h1 class="text-xl font-semibold text-gray-700 mb-6">{{ $product->name }}</h1>

            <h2 class="text-lg font-bold text-gray-800 mb-3">Deskripsi Produk:</h2>
            <div class="text-gray-600 leading-relaxed space-y-4 mb-8">
                <p>{{ $product->description }}</p>
            </div>

            <div class="flex gap-3">
                <a href="{{ url()->previous() }}" class="px-6 py-3 rounded-lg border border-gray-400 text-gray-700 font-semibold hover:bg-gray-100 transition">
                    Kembali
                </a>
                @if ($product->stock > 0)
                    <form action="{{ route('cart.add') }}" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <button type="submit" class="px-8 py-3 rounded-lg bg-blue-600 text-white font-semibold hover:bg-blue-700 transition flex items-center">
                            <i class="fas fa-shopping-cart mr-2"></i> Tambah ke Keranjang
                        </button>
                    </form>
                @else
                    <button type="button" class="px-8 py-3 rounded-lg bg-red-600 text-white font-semibold cursor-not-allowed opacity-75 flex items-center" disabled>
                        <i class="fas fa-times-circle mr-2"></i> Stock Habis
                    </button>
                @endif
            </div>


        </div>
    </div>
</section>



<!-- Rekomendasi Produk -->
<section class="py-12 bg-white">
    <div class="container mx-auto px-6">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Rekomendasi Untuk Anda</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
            @forelse ($recommendedProducts as $recProduct)
                <div class="max-w-sm rounded-lg overflow-hidden shadow-lg group border border-gray-200 hover:shadow-xl transition-shadow duration-300">
                    <a href="{{ route('product.show', $recProduct) }}">
                        <img src="{{ asset($recProduct->image) }}" alt="{{ $recProduct->name }}" class="w-full h-64 object-cover">
                    </a>
                    <div class="p-4">
                        <h3 class="font-bold text-lg mb-2 truncate">{{ $recProduct->name }}</h3>
                        <p class="text-gray-700 text-base mb-4">Rp {{ number_format($recProduct->price, 0, ',', '.') }}</p>
                        <a href="{{ route('product.show', $recProduct) }}" class="block w-full text-center bg-gray-800 text-white font-bold py-2 px-4 rounded-lg hover:bg-gray-900 transition-colors duration-300">
                            Lihat Detail
                        </a>
                    </div>
                </div>
            @empty
                <p class="col-span-4 text-center text-gray-500">Tidak ada rekomendasi produk.</p>
            @endforelse
        </div>
    </div>
</section>
@endsection


