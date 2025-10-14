@extends('layouts.admin')

@section('title', 'Edit Berita')

@section('content')
<div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <!-- Header Section -->
    <div class="mb-8 fade-in">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <div>
                <h1 class="text-3xl font-bold text-gray-900 flex items-center gap-3">
                    <div class="p-3 bg-gradient-to-br from-orange-500 to-orange-600 rounded-xl shadow-lg">
                        <i class="fas fa-edit text-white text-xl"></i>
                    </div>
                    <div>
                        <span>Edit Berita</span>
                        <p class="text-gray-600 text-sm font-normal mt-1">Memperbarui: "{{ Str::limit($news->title, 40) }}"</p>
                    </div>
                </h1>
            </div>
            <div class="flex gap-3">
                <a href="{{ route('admin.news.show', $news->id) }}"
                   class="inline-flex items-center gap-2 bg-blue-500 hover:bg-blue-600 text-white font-semibold py-3 px-5 rounded-xl shadow-md transition-all duration-300">
                    <i class="fas fa-eye"></i>
                    <span class="hidden sm:inline">Preview</span>
                </a>
                <a href="{{ route('admin.news.index') }}"
                   class="inline-flex items-center gap-2 bg-gray-500 hover:bg-gray-600 text-white font-semibold py-3 px-5 rounded-xl shadow-md transition-all duration-300">
                    <i class="fas fa-arrow-left"></i>
                    <span>Kembali</span>
                </a>
            </div>
        </div>

        <!-- Info Card -->
        <div class="mt-6 grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="bg-blue-50 border border-blue-200 rounded-xl p-4">
                <div class="flex items-center gap-3">
                    <div class="p-2 bg-blue-500 rounded-lg">
                        <i class="fas fa-calendar text-white text-sm"></i>
                    </div>
                    <div>
                        <p class="text-sm text-blue-700 font-medium">Dibuat</p>
                        <p class="text-gray-900 font-semibold">{{ $news->created_at->format('d M Y') }}</p>
                    </div>
                </div>
            </div>
            <div class="bg-green-50 border border-green-200 rounded-xl p-4">
                <div class="flex items-center gap-3">
                    <div class="p-2 bg-green-500 rounded-lg">
                        <i class="fas fa-sync-alt text-white text-sm"></i>
                    </div>
                    <div>
                        <p class="text-sm text-green-700 font-medium">Terakhir Diupdate</p>
                        <p class="text-gray-900 font-semibold">{{ $news->updated_at->format('d M Y H:i') }}</p>
                    </div>
                </div>
            </div>
            <div class="bg-purple-50 border border-purple-200 rounded-xl p-4">
                <div class="flex items-center gap-3">
                    <div class="p-2 bg-purple-500 rounded-lg">
                        <i class="fas fa-image text-white text-sm"></i>
                    </div>
                    <div>
                        <p class="text-sm text-purple-700 font-medium">Status Gambar</p>
                        <p class="text-gray-900 font-semibold">Tersedia</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Form Section -->
    <div class="max-w-4xl mx-auto fade-in">
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-200">
            <!-- Form Header -->
            <div class="bg-gradient-to-r from-orange-500 to-orange-600 px-6 py-5">
                <h2 class="text-xl font-semibold text-white flex items-center gap-3">
                    <i class="fas fa-edit"></i>
                    Form Edit Berita
                    <span class="text-orange-100 text-sm font-normal ml-auto">ID: #{{ $news->id }}</span>
                </h2>
            </div>

            <!-- Form Content -->
            <div class="p-6">
                <form action="{{ route('admin.news.update', $news->id) }}" method="POST" enctype="multipart/form-data" class="space-y-8">
                    @csrf
                    @method('PUT')

                    <!-- Judul Input -->
                    <div class="space-y-3">
                        <label for="title" class="block text-lg font-semibold text-gray-800 flex items-center gap-2">
                            <div class="w-2 h-6 bg-orange-500 rounded-full"></div>
                            Judul Berita
                        </label>
                        <div class="relative">
                            <input type="text"
                                   id="title"
                                   name="title"
                                   value="{{ old('title', $news->title) }}"
                                   class="w-full px-4 py-4 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-all duration-200 text-lg @error('title') border-red-500 ring-2 ring-red-200 @enderror"
                                   placeholder="Tulis judul berita yang menarik perhatian...">
                            @error('title')
                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                    <i class="fas fa-exclamation-circle text-red-500 text-xl"></i>
                                </div>
                            @enderror
                        </div>
                        @error('title')
                            <div class="flex items-center gap-2 p-3 bg-red-50 border border-red-200 rounded-lg">
                                <i class="fas fa-exclamation-triangle text-red-500"></i>
                                <p class="text-red-700 text-sm">{{ $message }}</p>
                            </div>
                        @enderror
                    </div>



                    <!-- Deskripsi Input -->
                    <div class="space-y-3">
                        <label for="description" class="block text-lg font-semibold text-gray-800 flex items-center gap-2">
                            <div class="w-2 h-6 bg-blue-500 rounded-full"></div>
                            Deskripsi Singkat
                        </label>
                        <div class="relative">
                            <textarea id="description"
                                      name="description"
                                      rows="4"
                                      class="w-full px-4 py-4 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200 resize-none @error('description') border-red-500 ring-2 ring-red-200 @enderror"
                                      placeholder="Tulis deskripsi singkat yang informatif...">{{ old('description', $news->description) }}</textarea>
                            @error('description')
                                <div class="absolute top-4 right-3 flex items-center pointer-events-none">
                                    <i class="fas fa-exclamation-circle text-red-500 text-xl"></i>
                                </div>
                            @enderror
                        </div>
                        <div class="flex justify-between items-center text-sm">
                            <span class="text-gray-500">Deskripsi akan muncul di halaman utama</span>
                            <span id="desc-count" class="font-medium {{ Str::length(old('description', $news->description)) > 200 ? 'text-red-500' : 'text-gray-500' }}">
                                {{ Str::length(old('description', $news->description)) }}/200 karakter
                            </span>
                        </div>
                        @error('description')
                            <div class="flex items-center gap-2 p-3 bg-red-50 border border-red-200 rounded-lg">
                                <i class="fas fa-exclamation-triangle text-red-500"></i>
                                <p class="text-red-700 text-sm">{{ $message }}</p>
                            </div>
                        @enderror
                    </div>

                    <!-- Konten Input -->
                    <div class="space-y-3">
                        <label for="content" class="block text-lg font-semibold text-gray-800 flex items-center gap-2">
                            <div class="w-2 h-6 bg-purple-500 rounded-full"></div>
                            Konten Lengkap
                        </label>
                        <div class="relative">
                            <textarea id="content"
                                      name="content"
                                      rows="10"
                                      class="w-full px-4 py-4 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition-all duration-200 resize-vertical @error('content') border-red-500 ring-2 ring-red-200 @enderror"
                                      placeholder="Tulis konten berita lengkap di sini...">{{ old('content', $news->content) }}</textarea>
                            @error('content')
                                <div class="absolute top-4 right-3 flex items-center pointer-events-none">
                                    <i class="fas fa-exclamation-circle text-red-500 text-xl"></i>
                                </div>
                            @enderror
                        </div>
                        @error('content')
                            <div class="flex items-center gap-2 p-3 bg-red-50 border border-red-200 rounded-lg">
                                <i class="fas fa-exclamation-triangle text-red-500"></i>
                                <p class="text-red-700 text-sm">{{ $message }}</p>
                            </div>
                        @enderror
                    </div>

                    <!-- Gambar Input -->
                    <div class="space-y-4">
                        <label class="block text-lg font-semibold text-gray-800 flex items-center gap-2">
                            <div class="w-2 h-6 bg-green-500 rounded-full"></div>
                            Gambar Berita
                        </label>

                        <!-- Current Image -->
                        <div class="bg-gray-50 rounded-xl p-6 border-2 border-dashed border-gray-200">
                            <div class="flex flex-col md:flex-row gap-6 items-start">
                                <div class="flex-shrink-0">
                                    <div class="relative group">
                                        <img src="{{ Storage::url('berita/'.$news->image) }}"
                                             alt="Gambar saat ini"
                                             class="w-48 h-32 object-cover rounded-lg shadow-md border border-gray-300">
                                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 rounded-lg transition-all duration-200 flex items-center justify-center">
                                            <span class="text-white opacity-0 group-hover:opacity-100 text-sm font-medium">Gambar Saat Ini</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h4 class="font-semibold text-gray-800 mb-2">Gambar Saat Ini</h4>
                                    <p class="text-gray-600 text-sm mb-4">Ini adalah gambar yang sedang digunakan. Upload gambar baru untuk menggantinya.</p>

                                    <!-- New Image Upload -->
                                    <div id="upload-area"
                                         class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center hover:border-green-400 transition-all duration-200 cursor-pointer bg-white">
                                        <i class="fas fa-cloud-upload-alt text-3xl text-gray-400 mb-3"></i>
                                        <p class="text-sm text-gray-600 mb-2">
                                            <span class="font-semibold text-green-600">Klik untuk upload gambar baru</span> atau drag and drop
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

                                    <!-- New Image Preview -->
                                    <div id="image-preview" class="mt-4 hidden">
                                        <div class="flex items-center gap-4">
                                            <div class="relative">
                                                <img id="preview" class="w-32 h-24 object-cover rounded-lg shadow border border-gray-300">
                                                <button type="button" id="remove-image" class="absolute -top-2 -right-2 bg-red-500 text-white rounded-full w-6 h-6 flex items-center justify-center hover:bg-red-600 transition-colors shadow-md">
                                                    <i class="fas fa-times text-xs"></i>
                                                </button>
                                            </div>
                                            <div>
                                                <p class="text-sm font-medium text-green-600">Gambar Baru</p>
                                                <p class="text-xs text-gray-500">Gambar akan diganti setelah disimpan</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @error('image')
                            <div class="flex items-center gap-2 p-3 bg-red-50 border border-red-200 rounded-lg">
                                <i class="fas fa-exclamation-triangle text-red-500"></i>
                                <p class="text-red-700 text-sm">{{ $message }}</p>
                            </div>
                        @enderror
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 pt-8 border-t border-gray-200">
                        <button type="submit"
                                class="flex-1 inline-flex items-center justify-center gap-3 bg-gradient-to-r from-orange-500 to-orange-600 hover:from-orange-600 hover:to-orange-700 text-white font-bold py-4 px-8 rounded-xl shadow-lg transition-all duration-300 transform hover:-translate-y-1 hover:shadow-xl text-lg">
                            <i class="fas fa-save"></i>
                            <span>Update Berita</span>
                        </button>

                        <a href="{{ route('admin.news.index') }}"
                           class="flex-1 inline-flex items-center justify-center gap-3 bg-gray-500 hover:bg-gray-600 text-white font-bold py-4 px-8 rounded-xl shadow-lg transition-all duration-300 text-center text-lg">
                            <i class="fas fa-times"></i>
                            <span>Batal</span>
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <!-- Tips Section -->
        <div class="mt-8 bg-gradient-to-br from-blue-50 to-indigo-50 border border-blue-200 rounded-2xl p-6 fade-in">
            <h3 class="text-lg font-semibold text-gray-800 mb-4 flex items-center gap-2">
                <i class="fas fa-lightbulb text-blue-500"></i>
                Tips Editing Berita
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                <div class="flex items-start gap-3 p-3 bg-white rounded-lg shadow-sm">
                    <i class="fas fa-sync-alt text-green-500 mt-0.5"></i>
                    <div>
                        <span class="font-medium text-gray-800">Perbarui Secara Berkala</span>
                        <p class="text-gray-600">Pastikan informasi selalu up-to-date</p>
                    </div>
                </div>
                <div class="flex items-start gap-3 p-3 bg-white rounded-lg shadow-sm">
                    <i class="fas fa-image text-purple-500 mt-0.5"></i>
                    <div>
                        <span class="font-medium text-gray-800">Gambar Relevan</span>
                        <p class="text-gray-600">Gunakan gambar yang mendukung konten</p>
                    </div>
                </div>
                <div class="flex items-start gap-3 p-3 bg-white rounded-lg shadow-sm">
                    <i class="fas fa-check-circle text-orange-500 mt-0.5"></i>
                    <div>
                        <span class="font-medium text-gray-800">Review Sebelum Update</span>
                        <p class="text-gray-600">Periksa kembali sebelum menyimpan perubahan</p>
                    </div>
                </div>
                <div class="flex items-start gap-3 p-3 bg-white rounded-lg shadow-sm">
                    <i class="fas fa-mobile-alt text-blue-500 mt-0.5"></i>
                    <div>
                        <span class="font-medium text-gray-800">Optimasi Mobile</span>
                        <p class="text-gray-600">Pastikan tampilan bagus di semua device</p>
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
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Image upload functionality
        const imageInput = document.getElementById('image');
        const uploadArea = document.getElementById('upload-area');
        const imagePreview = document.getElementById('image-preview');
        const previewImage = document.getElementById('preview');
        const removeButton = document.getElementById('remove-image');
        const descTextarea = document.getElementById('description');
        const descCount = document.getElementById('desc-count');

        // Image upload handlers
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
                descCount.classList.remove('text-gray-500');
            } else {
                descCount.classList.remove('text-red-500');
                descCount.classList.add('text-gray-500');
            }
        });

        // Auto-resize textareas
        const textareas = document.querySelectorAll('textarea');
        textareas.forEach(textarea => {
            textarea.addEventListener('input', function() {
                this.style.height = 'auto';
                this.style.height = (this.scrollHeight) + 'px';
            });
        });
    });
</script>
@endsection
