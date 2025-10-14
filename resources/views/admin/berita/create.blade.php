@extends('layouts.admin')

@section('title', 'Tambah Berita')

@section('content')
<div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <!-- Header Section -->
    <div class="mb-8 fade-in">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <div>
                <h1 class="text-3xl font-bold text-gray-900 flex items-center gap-3">
                    <div class="p-3 bg-gradient-to-br from-green-500 to-green-600 rounded-xl shadow-md">
                        <i class="fas fa-plus-circle text-white text-xl"></i>
                    </div>
                    <span>Tambah Berita Baru</span>
                </h1>
                <p class="text-gray-600 mt-2">Buat berita baru untuk ditampilkan di website</p>
            </div>
            <a href="{{ route('admin.news.index') }}"
               class="inline-flex items-center gap-2 bg-gray-500 hover:bg-gray-600 text-white font-semibold py-3 px-5 rounded-xl shadow-md transition-all duration-300">
                <i class="fas fa-arrow-left"></i>
                <span>Kembali ke Daftar Berita</span>
            </a>
        </div>
    </div>

    <!-- Form Section -->
    <div class="max-w-4xl mx-auto fade-in">
        <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-200">
            <!-- Form Header -->
            <div class="bg-gradient-to-r from-green-500 to-green-600 px-6 py-4">
                <h2 class="text-xl font-semibold text-white flex items-center gap-2">
                    <i class="fas fa-edit"></i>
                    Form Tambah Berita
                </h2>
            </div>

            <!-- Form Content -->
            <div class="p-6">
                <form action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf

                    <!-- Judul Input -->
                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-700 mb-2 flex items-center gap-2">
                            <i class="fas fa-heading text-green-500"></i>
                            Judul Berita
                        </label>
                        <div class="relative">
                            <input type="text"
                                   id="title"
                                   name="title"
                                   value="{{ old('title') }}"
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-all duration-200 @error('title') border-red-500 ring-2 ring-red-200 @enderror"
                                   placeholder="Masukkan judul berita yang menarik...">
                            @error('title')
                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                    <i class="fas fa-exclamation-circle text-red-500"></i>
                                </div>
                            @enderror
                        </div>
                        @error('title')
                            <p class="mt-2 text-sm text-red-600 flex items-center gap-1">
                                <i class="fas fa-exclamation-triangle"></i>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Deskripsi Input -->
                    <div>
                        <label for="description" class="block text-sm font-medium text-gray-700 mb-2 flex items-center gap-2">
                            <i class="fas fa-align-left text-blue-500"></i>
                            Deskripsi Singkat
                        </label>
                        <div class="relative">
                            <textarea id="description"
                                      name="description"
                                      rows="3"
                                      class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200 @error('description') border-red-500 ring-2 ring-red-200 @enderror"
                                      placeholder="Masukkan deskripsi singkat berita...">{{ old('description') }}</textarea>
                            @error('description')
                                <div class="absolute top-3 right-3 flex items-center pointer-events-none">
                                    <i class="fas fa-exclamation-circle text-red-500"></i>
                                </div>
                            @enderror
                        </div>
                        <div class="mt-1 text-sm text-gray-500 flex justify-between">
                            <span>Deskripsi akan ditampilkan sebagai ringkasan berita</span>
                            <span id="desc-count">0/200 karakter</span>
                        </div>
                        @error('description')
                            <p class="mt-2 text-sm text-red-600 flex items-center gap-1">
                                <i class="fas fa-exclamation-triangle"></i>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Konten Input -->
                    <div>
                        <label for="content" class="block text-sm font-medium text-gray-700 mb-2 flex items-center gap-2">
                            <i class="fas fa-file-alt text-purple-500"></i>
                            Konten Berita
                        </label>
                        <div class="relative">
                            <textarea id="content"
                                      name="content"
                                      rows="8"
                                      class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition-all duration-200 @error('content') border-red-500 ring-2 ring-red-200 @enderror"
                                      placeholder="Tulis konten berita lengkap di sini...">{{ old('content') }}</textarea>
                            @error('content')
                                <div class="absolute top-3 right-3 flex items-center pointer-events-none">
                                    <i class="fas fa-exclamation-circle text-red-500"></i>
                                </div>
                            @enderror
                        </div>
                        <div class="mt-1 text-sm text-gray-500">
                            Gunakan format yang jelas dan mudah dibaca
                        </div>
                        @error('content')
                            <p class="mt-2 text-sm text-red-600 flex items-center gap-1">
                                <i class="fas fa-exclamation-triangle"></i>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Gambar Input -->
                    <div>
                        <label for="image" class="block text-sm font-medium text-gray-700 mb-2 flex items-center gap-2">
                            <i class="fas fa-image text-yellow-500"></i>
                            Gambar Berita
                        </label>

                        <!-- Image Preview -->
                        <div id="image-preview" class="mb-4 hidden">
                            <div class="relative inline-block">
                                <img id="preview" class="w-64 h-48 object-cover rounded-lg shadow-md border border-gray-300">
                                <button type="button" id="remove-image" class="absolute -top-2 -right-2 bg-red-500 text-white rounded-full w-6 h-6 flex items-center justify-center hover:bg-red-600 transition-colors">
                                    <i class="fas fa-times text-xs"></i>
                                </button>
                            </div>
                        </div>

                        <!-- File Upload Area -->
                        <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center hover:border-green-400 transition-colors duration-200 @error('image') border-red-500 @enderror"
                             id="upload-area">
                            <i class="fas fa-cloud-upload-alt text-3xl text-gray-400 mb-3"></i>
                            <p class="text-sm text-gray-600 mb-2">
                                <span class="font-semibold text-green-600">Klik untuk upload</span> atau drag and drop
                            </p>
                            <p class="text-xs text-gray-500">
                                PNG, JPG, JPEG (Maks. 2MB)
                            </p>
                            <input type="file"
                                   id="image"
                                   name="image"
                                   class="hidden"
                                   accept="image/*">
                        </div>
                        @error('image')
                            <p class="mt-2 text-sm text-red-600 flex items-center gap-1">
                                <i class="fas fa-exclamation-triangle"></i>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 pt-6 border-t border-gray-200">
                        <button type="submit"
                                class="flex-1 inline-flex items-center justify-center gap-2 bg-gradient-to-r from-green-500 to-green-600 hover:from-green-600 hover:to-green-700 text-white font-semibold py-3 px-6 rounded-lg shadow-md transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg">
                            <i class="fas fa-save"></i>
                            <span>Simpan Berita</span>
                        </button>

                        <a href="{{ route('admin.news.index') }}"
                           class="flex-1 inline-flex items-center justify-center gap-2 bg-gray-500 hover:bg-gray-600 text-white font-semibold py-3 px-6 rounded-lg shadow-md transition-all duration-300 text-center">
                            <i class="fas fa-times"></i>
                            <span>Batal</span>
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <!-- Tips Section -->
        <div class="mt-8 bg-blue-50 border border-blue-200 rounded-xl p-6 fade-in">
            <h3 class="text-lg font-semibold text-gray-800 mb-3 flex items-center gap-2">
                <i class="fas fa-lightbulb text-blue-500"></i>
                Tips Menulis Berita yang Baik
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm text-gray-600">
                <div class="flex items-start gap-3">
                    <i class="fas fa-check-circle text-green-500 mt-0.5"></i>
                    <div>
                        <span class="font-medium">Judul yang Menarik</span>
                        <p class="text-gray-500">Buat judul yang informatif dan menarik perhatian pembaca</p>
                    </div>
                </div>
                <div class="flex items-start gap-3">
                    <i class="fas fa-check-circle text-green-500 mt-0.5"></i>
                    <div>
                        <span class="font-medium">Gambar Berkualitas</span>
                        <p class="text-gray-500">Gunakan gambar yang relevan dan berkualitas tinggi</p>
                    </div>
                </div>
                <div class="flex items-start gap-3">
                    <i class="fas fa-check-circle text-green-500 mt-0.5"></i>
                    <div>
                        <span class="font-medium">Struktur Jelas</span>
                        <p class="text-gray-500">Gunakan paragraf pendek dan subjudul untuk keterbacaan</p>
                    </div>
                </div>
                <div class="flex items-start gap-3">
                    <i class="fas fa-check-circle text-green-500 mt-0.5"></i>
                    <div>
                        <span class="font-medium">Informasi Lengkap</span>
                        <p class="text-gray-500">Sertakan semua informasi penting dalam konten berita</p>
                    </div>
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
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Image upload preview
        const imageInput = document.getElementById('image');
        const uploadArea = document.getElementById('upload-area');
        const imagePreview = document.getElementById('image-preview');
        const previewImage = document.getElementById('preview');
        const removeButton = document.getElementById('remove-image');
        const descTextarea = document.getElementById('description');
        const descCount = document.getElementById('desc-count');

        // Handle file upload
        uploadArea.addEventListener('click', () => imageInput.click());

        uploadArea.addEventListener('dragover', (e) => {
            e.preventDefault();
            uploadArea.classList.add('border-green-400', 'bg-green-50');
        });

        uploadArea.addEventListener('dragleave', () => {
            uploadArea.classList.remove('border-green-400', 'bg-green-50');
        });

        uploadArea.addEventListener('drop', (e) => {
            e.preventDefault();
            uploadArea.classList.remove('border-green-400', 'bg-green-50');
            if (e.dataTransfer.files.length) {
                imageInput.files = e.dataTransfer.files;
                handleImagePreview(e.dataTransfer.files[0]);
            }
        });

        imageInput.addEventListener('change', (e) => {
            if (e.target.files.length) {
                handleImagePreview(e.target.files[0]);
            }
        });

        removeButton.addEventListener('click', (e) => {
            e.preventDefault();
            imageInput.value = '';
            imagePreview.classList.add('hidden');
            uploadArea.classList.remove('hidden');
        });

        function handleImagePreview(file) {
            if (file && file.type.startsWith('image/')) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    previewImage.src = e.target.result;
                    imagePreview.classList.remove('hidden');
                    uploadArea.classList.add('hidden');
                };
                reader.readAsDataURL(file);
            }
        }

        // Character count for description
        descTextarea.addEventListener('input', function() {
            const count = this.value.length;
            descCount.textContent = `${count}/200 karakter`;

            if (count > 200) {
                descCount.classList.add('text-red-500');
            } else {
                descCount.classList.remove('text-red-500');
            }
        });

        // Initialize character count
        descTextarea.dispatchEvent(new Event('input'));
    });
</script>
@endsection
