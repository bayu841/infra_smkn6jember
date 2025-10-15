@extends('layouts.admin')

@section('title', 'Manajemen Produk')

@section('content')
    <div class="flex justify-between items-center mb-6 fade-in">
        <h1 class="text-2xl font-bold text-gray-800">Manajemen Produk</h1>
        <a href="{{ route('admin.products.create') }}" class="px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 font-semibold">
            + Tambah Produk Baru
        </a>
    </div>

    <div class="bg-white p-6 rounded-xl shadow-md fade-in">
        <table class="min-w-full leading-normal">
            <thead>
                <tr>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Produk</th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Harga</th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($products as $product)
                    <tr>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 w-16 h-16 lazy-image-container">
                                    <div class="image-placeholder"><div class="placeholder-spinner"></div></div>
                                    <img class="lazy-image w-full h-full rounded-md object-cover" data-src="{{ asset($product->image) }}" alt="{{ $product->name }}" />
                                </div>
                                <div class="ml-4">
                                    <p class="text-gray-900 font-semibold whitespace-no-wrap">{{ $product->name }}</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <a href="{{ route('admin.products.edit', $product) }}" class="text-yellow-600 hover:text-yellow-900 font-semibold mr-4">Edit</a>
                            <form action="{{ route('admin.products.destroy', $product) }}" method="POST" class="inline-block" onsubmit="event.preventDefault(); confirmDelete(this);">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900 font-semibold">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center py-10">Tidak ada produk.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <div class="mt-6">
            {{ $products->links() }}
        </div>
    </div>
@endsection

@section('scripts')
<script>
    window.confirmDelete = function(form) {
        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: "Anda tidak akan dapat mengembalikan ini!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
            }
        });
    }
</script>
@endsection
