@extends('layouts.app')
@section('title', $berita->title)

@section('content')
    <div class="bg-white py-12">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto">
                <h1 class="text-3xl md:text-4xl font-bold text-gray-800 leading-tight mb-4">{{ $berita->title }}</h1>
                <div class="flex items-center text-gray-500 text-sm mb-6">
                    <span>Dipublikasikan pada {{ $berita->created_at->format('d F Y') }}</span>
                    <span class="mx-2">•</span>
                    <i class="fas fa-eye mr-1"></i>
                    <span>
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

                <img src="{{ Storage::url('berita/' . $berita->image) }}" alt="{{ $berita->title }}"
                    class="w-full h-auto max-h-[500px] object-cover rounded-lg shadow-lg mb-8">

                <div class="prose max-w-none text-gray-700 leading-relaxed">
                    {!! $berita->content !!}
                </div>

                <div class="mt-12 border-t pt-8">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6">Berita Terkait</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        @foreach ($relatedBeritas as $relatedBerita)
                            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                                <a href="{{ route('berita.show', $relatedBerita) }}">
                                    <img src="{{ Storage::url('berita/' . $relatedBerita->image) }}" alt="{{ $relatedBerita->title }}" class="w-full h-48 object-cover">
                                </a>
                                <div class="p-6">
                                    <h3 class="font-bold text-lg mb-2">
                                        <a href="{{ route('berita.show', $relatedBerita) }}" class="text-gray-800 hover:text-blue-600">{{ $relatedBerita->title }}</a>
                                    </h3>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="mt-12 border-t pt-8">
                    <a href="{{ route('berita.index') }}" class="inline-block bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
                        <i class="fas fa-arrow-left mr-2"></i>
                        Kembali ke Halaman Berita
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('styles')
<style>
    .prose h1, .prose h2, .prose h3 {
        color: #333;
    }
    .prose p {
        margin-bottom: 1em;
    }
    .prose a {
        color: #3C71F8;
        text-decoration: none;
    }
    .prose a:hover {
        text-decoration: underline;
    }
</style>
@endsection
