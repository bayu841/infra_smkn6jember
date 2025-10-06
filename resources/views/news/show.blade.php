@extends('layouts.admin')

@section('title', $news->title)

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-4xl mx-auto">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            @if($news->image)
                <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}" class="w-full h-64 object-cover">
            @endif
            
            <div class="p-6">
                <h1 class="text-3xl font-bold text-gray-800 mb-4">{{ $news->title }}</h1>
                
                <div class="flex items-center text-gray-600 mb-4">
                    <span class="mr-4">Tanggal: {{ $news->published_at ? $news->published_at->format('d M Y') : 'N/A' }}</span>
                </div>
                
                <div class="text-gray-700 mb-6">
                    <p class="whitespace-pre-line">{!! nl2br(e($news->description)) !!}</p>
                </div>
                
                <div class="flex space-x-4">
                    <a href="{{ route('news.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white font-semibold py-2 px-4 rounded-lg transition duration-300">
                        Kembali
                    </a>
                    <a href="{{ route('news.edit', $news->id) }}" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg transition duration-300">
                        Edit
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection