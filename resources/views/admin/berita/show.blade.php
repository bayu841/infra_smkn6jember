@extends('layouts.admin')

@section('title', 'Detail Berita')

@section('content')
<div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <!-- Header Section -->
    <div class="mb-8 fade-in">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <div>
                <h1 class="text-3xl font-bold text-gray-900 flex items-center gap-3">
                    <div class="p-3 bg-gradient-to-br from-blue-500 to-blue-700 rounded-xl shadow-lg">
                        <i class="fas fa-eye text-white text-xl"></i>
                    </div>
                    <div>
                        <span>Detail Berita</span>
                        <p class="text-gray-600 text-sm font-normal mt-1">Melihat: "{{ Str::limit($news->title, 40) }}"</p>
                    </div>
                </h1>
            </div>
            <div class="flex gap-3">
                <a href="{{ route('admin.news.edit', $news->id) }}"
                   class="inline-flex items-center gap-2 bg-orange-500 hover:bg-orange-600 text-white font-semibold py-3 px-5 rounded-xl shadow-md transition-all duration-300">
                    <i class="fas fa-edit"></i>
                    <span class="hidden sm:inline">Edit</span>
                </a>
                <a href="{{ route('admin.news.index') }}"
                   class="inline-flex items-center gap-2 bg-gray-500 hover:bg-gray-600 text-white font-semibold py-3 px-5 rounded-xl shadow-md transition-all duration-300">
                    <i class="fas fa-arrow-left"></i>
                    <span>Kembali</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Content Section -->
    <div class="max-w-4xl mx-auto fade-in">
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-200">
            <!-- Image -->
            <div class="w-full h-64 bg-gray-200 lazy-image-container">
                <div class="image-placeholder"><div class="placeholder-spinner"></div></div>
                <img data-src="{{ Storage::url('berita/'.$news->image) }}" alt="{{ $news->title }}" class="lazy-image w-full h-full object-cover">
            </div>

            <!-- Content -->
            <div class="p-6 md:p-8">
                <!-- Title -->
                <h2 class="text-3xl font-bold text-gray-900 mb-4">{{ $news->title }}</h2>

                <!-- Meta Info -->
                <div class="flex flex-wrap items-center gap-x-4 gap-y-2 text-sm text-gray-600 mb-6 pb-6 border-b border-gray-200">
                    <div class="flex items-center gap-2">
                        <i class="fas fa-calendar-alt"></i>
                        <span>Dibuat pada {{ $news->created_at->format('d M Y') }}</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <i class="fas fa-sync-alt"></i>
                        <span>Diperbarui pada {{ $news->updated_at->format('d M Y') }}</span>
                    </div>
                </div>



                <!-- Description -->
                <div class="mb-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-3">Deskripsi Singkat</h3>
                    <p class="text-gray-700 leading-relaxed">{{ $news->description }}</p>
                </div>

                <!-- Content -->
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-3">Konten Lengkap</h3>
                    <div class="prose max-w-none text-gray-800 leading-7">
                        {!! $news->content !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .fade-in {
        animation: fadeIn 0.6s ease-in-out;
    }
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(15px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .prose {
        line-height: 1.75;
    }
    .prose p {
        margin-bottom: 1em;
    }
    .prose h1, .prose h2, .prose h3 {
        margin-bottom: 0.5em;
        margin-top: 1.5em;
    }
</style>
@endsection
