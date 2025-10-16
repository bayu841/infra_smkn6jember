@extends('layouts.admin')

@section('title', 'Data Berita')

@section('content')
<div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <!-- Header Section -->
    <div class="mb-8">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <div>
                <h1 class="text-3xl font-bold text-gray-900 flex items-center gap-3">
                    <div class="p-3 bg-gradient-to-br from-blue-500 to-blue-700 rounded-xl shadow-md">
                        <i class="fas fa-newspaper text-white text-xl"></i>
                    </div>
                    <span>Kelola Berita</span>
                </h1>
                <p class="text-gray-600 mt-2">Kelola dan publikasi berita untuk website Anda</p>
            </div>
            <div class="flex gap-3">

                <a href="{{ route('admin.news.create') }}"
                   class="inline-flex items-center gap-2 bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white font-semibold py-3 px-5 rounded-xl shadow-md transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg">
                    <i class="fas fa-plus-circle"></i>
                    <span>Tambah Berita Baru</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <div class="bg-gradient-to-br from-blue-50 to-blue-100 border border-blue-200 rounded-xl p-5 shadow-sm">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-blue-800 font-medium">Total Berita</p>
                    <h3 class="text-2xl font-bold text-gray-900 mt-1">{{ $beritas->total() }}</h3>
                </div>
                <div class="p-3 bg-blue-500 rounded-lg">
                    <i class="fas fa-newspaper text-white text-xl"></i>
                </div>
            </div>
        </div>

        <div class="bg-gradient-to-br from-green-50 to-green-100 border border-green-200 rounded-xl p-5 shadow-sm">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-green-800 font-medium">Berita Ditampilkan</p>
                    <h3 class="text-2xl font-bold text-gray-900 mt-1">{{ $beritas->total() }}</h3>
                </div>
                <div class="p-3 bg-green-500 rounded-lg">
                    <i class="fas fa-eye text-white text-xl"></i>
                </div>
            </div>
        </div>


    </div>

    <!-- Search and Filter -->
    <form action="{{ route('admin.news.index') }}" method="GET">
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-5 mb-6">
            <div class="flex flex-col md:flex-row gap-4">
                <div class="flex-1">
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-search text-gray-400"></i>
                        </div>
                        <input type="text" name="search"
                               class="block w-full pl-10 pr-3 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                               placeholder="Cari berita..." value="{{ request('search') }}">
                    </div>
                </div>
                <div class="flex gap-3">
                    <select name="category" class="block w-full md:w-auto border border-gray-300 rounded-lg py-2.5 px-3 focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <option value="">Semua Kategori</option>
                        @foreach (App\Models\Category::all() as $category)
                            <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                        @endforeach
                    </select>
                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2.5 px-4 rounded-lg transition-colors duration-200 flex items-center gap-2">
                        <i class="fas fa-filter"></i>
                        <span class="hidden md:inline">Filter</span>
                    </button>
                </div>
            </div>
        </div>
    </form>

    <form id="delete-selected-form" action="{{ route('admin.news.destroyMultiple') }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus berita yang dipilih?');">
        @csrf
        @method('DELETE')
        <div class="mb-4">
            <button id="delete-selected-btn" style="display: none;" type="submit"
               class="inline-flex items-center gap-2 bg-gradient-to-r from-red-500 to-red-600 hover:from-red-600 hover:to-red-700 text-white font-semibold py-3 px-5 rounded-xl shadow-md transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg">
                <i class="fas fa-trash"></i>
                <span>Hapus Terpilih</span>
            </button>
        </div>
        <!-- Table Section -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gradient-to-r from-blue-600 to-blue-800">
                    <tr>
                        <th scope="col" class="p-4">
                            <div class="flex items-center">
                                <input id="select-all" type="checkbox" class="h-4 w-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-4 text-left text-xs font-semibold text-white uppercase tracking-wider">
                            <div class="flex items-center gap-2">
                                <i class="fas fa-image"></i>
                                <span>Gambar</span>
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-4 text-left text-xs font-semibold text-white uppercase tracking-wider">
                            <div class="flex items-center gap-2">
                                <i class="fas fa-heading"></i>
                                <span>Judul Berita</span>
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-4 text-left text-xs font-semibold text-white uppercase tracking-wider">
                            <div class="flex items-center gap-2">
                                <i class="fas fa-calendar"></i>
                                <span>Tanggal</span>
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-4 text-center text-xs font-semibold text-white uppercase tracking-wider">
                            <div class="flex items-center justify-center gap-2">
                                <i class="fas fa-cog"></i>
                                <span>Aksi</span>
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse ($beritas as $berita)
                    <tr class="hover:bg-gray-50 transition duration-200 card-hover">
                        <td class="p-4">
                            <div class="flex items-center">
                                <input type="checkbox" name="selected_news[]" value="{{ $berita->id }}" class="h-4 w-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 news-checkbox">
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="w-16 h-16 rounded-lg overflow-hidden shadow-sm border border-gray-200 flex-shrink-0">
                                    <img src="{{ Storage::url('berita/'.$berita->image) }}"
                                         alt="{{ $berita->title }}"
                                         class="w-full h-full object-cover">
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-sm font-medium text-gray-900">{{ Str::limit($berita->title, 50) }}</div>
                            <div class="text-xs text-gray-500 mt-1 flex items-center gap-2">
                                <span class="inline-flex items-center gap-1 bg-green-100 text-green-800 px-2 py-0.5 rounded-full text-xs">
                                    <i class="fas fa-eye"></i>
                                    @php
                                        $views = $berita->views;
                                        if ($views >= 1000) {
                                            echo round($views / 1000, 1) . 'k dilihat';
                                        } else {
                                            echo $views . ' dilihat';
                                        }
                                    @endphp
                                </span>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">{{ $berita->created_at->format('d M Y') }}</div>
                            <div class="text-xs text-gray-500">{{ $berita->created_at->format('H:i') }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center">
                            <div class="flex justify-center gap-2">
                                <a href="{{ route('admin.news.show', $berita->id) }}"
                                   class="inline-flex items-center gap-1 bg-blue-50 hover:bg-blue-100 text-blue-700 hover:text-blue-800 py-2 px-3 rounded-lg text-sm font-medium transition-colors duration-200">
                                    <i class="fas fa-eye text-xs"></i>
                                    <span>Lihat</span>
                                </a>

                                <a href="{{ route('admin.news.edit', $berita->id) }}"
                                   class="inline-flex items-center gap-1 bg-yellow-50 hover:bg-yellow-100 text-yellow-700 hover:text-yellow-800 py-2 px-3 rounded-lg text-sm font-medium transition-colors duration-200">
                                    <i class="fas fa-edit text-xs"></i>
                                    <span>Edit</span>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="px-6 py-12 text-center">
                            <div class="flex flex-col items-center justify-center text-gray-500">
                                <div class="p-4 bg-gray-100 rounded-full mb-4">
                                    <i class="fas fa-newspaper text-3xl text-gray-400"></i>
                                </div>
                                <h3 class="text-lg font-medium text-gray-700 mb-1">Belum Ada Berita</h3>
                                <p class="text-gray-500 mb-4">Mulai dengan menambahkan berita pertama Anda</p>
                                <a href="{{ route('admin.news.create') }}"
                                   class="inline-flex items-center gap-2 bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded-lg transition-colors duration-200">
                                    <i class="fas fa-plus"></i>
                                    <span>Tambah Berita Pertama</span>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        @if($beritas->hasPages())
        <div class="px-6 py-4 bg-gray-50 border-t border-gray-200 flex flex-col sm:flex-row items-center justify-between gap-4">
            <div class="text-sm text-gray-700">
                Menampilkan <span class="font-medium">{{ $beritas->firstItem() }}</span> sampai
                <span class="font-medium">{{ $beritas->lastItem() }}</span> dari
                <span class="font-medium">{{ $beritas->total() }}</span> hasil
            </div>
            <div class="flex items-center space-x-1">
                {{ $beritas->links() }}
            </div>
        </div>
        @endif
    </div>
    </form>

    <!-- Quick Actions -->
    <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 border border-blue-200 rounded-xl p-5">
            <h3 class="text-lg font-semibold text-gray-800 mb-3 flex items-center gap-2">
                <i class="fas fa-lightbulb text-blue-500"></i>
                Tips Manajemen Berita
            </h3>
            <ul class="text-sm text-gray-600 space-y-2">
                <li class="flex items-start gap-2">
                    <i class="fas fa-check text-green-500 mt-0.5"></i>
                    <span>Gunakan gambar berkualitas tinggi untuk menarik perhatian</span>
                </li>
                <li class="flex items-start gap-2">
                    <i class="fas fa-check text-green-500 mt-0.5"></i>
                    <span>Buat judul yang informatif dan menarik</span>
                </li>
                <li class="flex items-start gap-2">
                    <i class="fas fa-check text-green-500 mt-0.5"></i>
                    <span>Perbarui berita secara berkala</span>
                </li>
            </ul>
        </div>

        <div class="bg-gradient-to-br from-green-50 to-emerald-50 border border-green-200 rounded-xl p-5">
            <h3 class="text-lg font-semibold text-gray-800 mb-3 flex items-center gap-2">
                <i class="fas fa-chart-line text-green-500"></i>
                Statistik Cepat
            </h3>
            <div class="grid grid-cols-2 gap-4 text-sm">
                <div class="text-center p-3 bg-white rounded-lg shadow-sm">
                    <div class="text-green-600 font-bold text-lg">1.2k</div>
                    <div class="text-gray-600">Pengunjung</div>
                </div>
                <div class="text-center p-3 bg-white rounded-lg shadow-sm">
                    <div class="text-blue-600 font-bold text-lg">156</div>
                    <div class="text-gray-600">Interaksi</div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .fade-in {
        animation: fadeIn 0.5s ease-in-out;
    }
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .card-hover {
        transition: all 0.3s ease;
    }
    .card-hover:hover {
        transform: translateY(-2px);
    }
</style>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const selectAllCheckbox = document.getElementById('select-all');
        const newsCheckboxes = document.querySelectorAll('.news-checkbox');
        const deleteSelectedBtn = document.getElementById('delete-selected-btn');
        const deleteSelectedForm = document.getElementById('delete-selected-form');

        selectAllCheckbox.addEventListener('change', function () {
            newsCheckboxes.forEach(checkbox => {
                checkbox.checked = this.checked;
            });
            toggleDeleteButton();
        });

        newsCheckboxes.forEach(checkbox => {
            checkbox.addEventListener('change', function () {
                if (!this.checked) {
                    selectAllCheckbox.checked = false;
                }
                toggleDeleteButton();
            });
        });

        function toggleDeleteButton() {
            const anyChecked = Array.from(newsCheckboxes).some(checkbox => checkbox.checked);
            if (anyChecked) {
                deleteSelectedBtn.style.display = 'inline-flex';
            } else {
                deleteSelectedBtn.style.display = 'none';
            }
        }


    });
</script>
@endsection
