@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="bg-[url('{{ asset('image/berita/beritabg.png') }}')] bg-cover bg-center bg-no-repeat min-h-screen pt-10 lg:pt-20">
    <div class="px-4 lg:px-20">
        <h2 class="text-4xl font-bold text-black">Berita Dan Pengumuman</h2>
        <p class="mt-4 text-lg max-w-3xl text-black">
            Informasi dan Berita Terkini SMK Negeri 6 Jember, dari Prestasi hingga Kegiatan Siswa
        </p>
        <a href="{{ route('halaman-utama') }}"
           class="mt-4 inline-block bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
           <i class="fas fa-arrow-left mr-2"></i> Kembali ke Halaman Utama
        </a>
    </div>

    <!-- Grid Card -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 px-4 lg:px-10 py-10">
        @foreach ($lastPosts as $berita)
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition mx-auto w-full max-w-sm h-[440px]">
                <img class="w-full h-52 object-cover" src="{{ Storage::url('berita/' . $berita->image) }}" alt="{{ $berita->title }}">
                <div class="p-6 flex flex-col justify-between h-[calc(440px-208px)]">
                    <div>
                        <h3 class="text-xl font-bold mb-2 truncate">{{ $berita->title }}</h3>
                        <div class="overflow-hidden max-h-[100px]">
                            @if(strlen($berita->content) < 30)
                                <div class="flex items-center justify-center bg-gray-100 rounded-md p-2 min-h-[60px]">
                                    <span class="text-red-600 text-sm italic">Konten sedang dalam proses update...</span>
                                </div>
                            @else
                                <p class="text-gray-600 text-base line-clamp-3">
                                    {{ $berita->description }}
                                </p>
                            @endif
                        </div>
                    </div>
                    <a href="{{ route('berita.show', $berita) }}"
                       class="mt-4 text-white px-4 py-2 rounded-lg bg-gradient-to-r from-blue-600 to-blue-800 hover:opacity-90 transition w-40 text-center">
                        Selengkapnya
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>

<!-- Popular News -->
<section class="px-4 lg:px-20 py-10 space-y-10">
    @foreach ($popularNews as $berita)
        <div class="flex flex-col lg:flex-row gap-6 items-center">
            <!-- Desktop: background image card -->
            <div class="hidden lg:block w-96 h-60 rounded-xl bg-cover bg-center shadow-md"
                 style="background-image: url('{{ Storage::url('berita/' . $berita->image) }}');">
            </div>
            <!-- Mobile/tablet: tampilkan gambar normal -->
            <img src="{{ Storage::url('berita/' . $berita->image) }}"
                 alt="{{ $berita->title }}"
                 class="block lg:hidden w-full max-w-md rounded-xl object-cover">

            <div class="flex-1 space-y-2">
                <h2 class="font-semibold text-lg truncate">{{ $berita->title }}</h2>
                <div class="overflow-hidden max-h-[150px]">
                    @if(strlen($berita->content) < 50)
                        <div class="flex items-center justify-center bg-gray-100 rounded-md p-2 min-h-[60px]">
                            <span class="text-red-600 text-sm italic">
                                Konten sedang dalam proses update. Silakan klik selengkapnya untuk info lebih lanjut.
                            </span>
                        </div>
                    @else
                        <p class="text-gray-600 line-clamp-4">{{ $berita->description }}</p>
                    @endif
                </div>
                <a href="{{ route('berita.show', $berita) }}"
                   class="inline-block mt-4 text-white px-4 py-2 rounded-lg bg-gradient-to-r from-blue-600 to-blue-800 hover:opacity-90 transition w-40 text-center text-sm">
                    Selengkapnya
                </a>
            </div>
        </div>
    @endforeach
</section>

<!-- Pagination -->
<div class="flex justify-center py-8">
    {{ $beritas->appends(request()->query())->links() }}
</div>
@endsection
