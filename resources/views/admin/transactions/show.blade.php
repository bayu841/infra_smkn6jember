@extends('layouts.admin')

@section('title', 'Detail Transaksi ' . $transaction->order_id)

@section('content')
    <h1 class="text-2xl font-bold text-gray-800 mb-4">Detail Transaksi</h1>

    <div class="bg-white p-6 rounded-xl shadow-md">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Detail Pelanggan -->
            <div>
                <h2 class="text-lg font-semibold border-b pb-2 mb-4">Detail Pelanggan</h2>
                <div class="space-y-2 text-sm">
                    <p><strong>Nama:</strong> {{ $transaction->customer_name }}</p>
                    <p><strong>Email:</strong> {{ $transaction->customer_email }}</p>
                    <p><strong>Telepon:</strong> {{ $transaction->customer_phone }}</p>
                    <p><strong>Alamat:</strong><br>{{ $transaction->address }}</p>
                    <p><strong>Tipe:</strong> 
                        @if($transaction->user) 
                            <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-full text-xs">User Terdaftar</span>
                        @else 
                            <span class="bg-gray-100 text-gray-800 px-2 py-1 rounded-full text-xs">Tamu</span>
                        @endif
                    </p>
                </div>
            </div>

            <!-- Detail Pesanan -->
            <div>
                <h2 class="text-lg font-semibold border-b pb-2 mb-4">Item Pesanan</h2>
                <div class="space-y-4">
                    @foreach ($transaction->items as $item)
                        <div class="flex justify-between items-center text-sm">
                            <div>
                                <p class="font-semibold">{{ $item->product->name }}</p>
                                <p class="text-gray-600">{{ $item->quantity }} x Rp {{ number_format($item->price, 0, ',', '.') }}</p>
                            </div>
                            <p class="font-medium">Rp {{ number_format($item->quantity * $item->price, 0, ',', '.') }}</p>
                        </div>
                    @endforeach
                </div>
                <div class="border-t mt-4 pt-4 flex justify-between font-bold">
                    <span>Total Harga:</span>
                    <span>Rp {{ number_format($transaction->total_price, 0, ',', '.') }}</span>
                </div>
            </div>
        </div>

        <!-- Tombol Kembali -->
        <div class="mt-8 border-t pt-6">
            <a href="{{ route('admin.transactions.index') }}" class="text-blue-600 hover:underline">
                &larr; Kembali ke Daftar Transaksi
            </a>
        </div>
    </div>
@endsection
