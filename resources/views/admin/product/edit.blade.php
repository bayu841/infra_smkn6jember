@extends('layouts.admin')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold text-gray-800 mb-6">Edit Product: {{ $product->name }}</h1>

    <div class="bg-white p-8 rounded-xl shadow-md">
        <form id="editProductForm" action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="space-y-6">
                {{-- Name --}}
                <div>
                    <label class="block text-sm font-semibold text-gray-700">Product Name</label>
                    <input type="text" name="name" value="{{ old('name', $product->name) }}"
                        class="mt-2 w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 transition">
                </div>

                {{-- Description --}}
                <div>
                    <label class="block text-sm font-semibold text-gray-700">Description</label>
                    <textarea name="description" rows="3"
                        class="mt-2 w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 transition">{{ old('description', $product->description) }}</textarea>
                </div>

                {{-- Price --}}
                <div>
                    <label class="block text-sm font-semibold text-gray-700">Price</label>
                    <input type="number" name="price" value="{{ old('price', $product->price) }}" step="0.01"
                        class="mt-2 w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 transition">
                </div>

                {{-- Stock --}}
                <div>
                    <label class="block text-sm font-semibold text-gray-700">Stock</label>
                    <input type="number" name="stock" value="{{ old('stock', $product->stock) }}"
                        class="mt-2 w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 transition">
                </div>

                {{-- Category --}}
                <div>
                    <label class="block text-sm font-semibold text-gray-700">Category</label>
                    <select name="category"
                        class="mt-2 w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 transition">
                        <option value="">Select a Category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category }}" {{ old('category', $product->category) == $category ? 'selected' : '' }}>
                                {{ ucfirst($category) }}
                            </option>
                        @endforeach
                    </select>
                </div>

                {{-- Image Upload --}}
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Product Image</label>

                    <div id="upload-area"
                        class="relative w-full p-6 text-center border-2 border-dashed border-gray-300 rounded-lg hover:border-blue-400 transition bg-gray-50 cursor-pointer overflow-hidden">
                        <input type="file" id="image" name="image" accept="image/*"
                            class="absolute inset-0 opacity-0 cursor-pointer z-10">

                        <div id="upload-placeholder" class="{{ $product->image ? 'hidden' : '' }}">
                            <i class="fas fa-cloud-upload-alt text-4xl text-gray-400 mb-3"></i>
                            <p class="text-gray-700 font-medium">Click or drag image here</p>
                            <p class="text-sm text-gray-500">Only JPG, PNG, GIF, WebP (Max 5MB)</p>
                        </div>

                        <div id="preview-container" class="{{ $product->image ? '' : 'hidden' }} relative">
                            <img id="image-preview"
                                src="{{ $product->image ? asset('storage/' . $product->image) : '#' }}"
                                alt="Preview"
                                class="mx-auto rounded-lg w-48 h-48 object-cover shadow-md hover:scale-105 transition-transform duration-300">
                            <button type="button" id="remove-image"
                                class="absolute top-2 right-2 bg-red-500 text-white rounded-full w-6 h-6 flex items-center justify-center text-xs hover:bg-red-600 transition">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>

                        {{-- Progress Bar --}}
                        <div id="progress-wrapper" class="absolute bottom-0 left-0 w-full h-1 bg-gray-200 hidden">
                            <div id="progress-bar" class="h-full bg-blue-500 transition-all duration-300" style="width: 0%;"></div>
                        </div>
                    </div>

                    <p id="image-error" class="hidden mt-2 text-sm text-red-500"></p>
                </div>
            </div>

            {{-- Buttons --}}
            <div class="mt-8 flex justify-end gap-4">
                <a href="{{ route('admin.products.index') }}"
                    class="px-6 py-2 rounded-lg border border-gray-300 text-gray-700 font-semibold hover:bg-gray-100 transition">Cancel</a>
                <button type="submit" id="updateBtn"
                    class="px-6 py-2 rounded-lg bg-gradient-to-r from-blue-500 to-purple-600 text-white font-semibold relative overflow-hidden hover:opacity-90 shadow-md">
                    <span class="relative z-10">Update Product</span>
                    <span class="absolute inset-0 bg-gradient-to-r from-white/20 to-transparent opacity-0 hover:opacity-100 transition"></span>
                </button>
            </div>
        </form>
    </div>
</div>

{{-- CDN --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<script>
$(document).ready(function() {
    const input = $('#image');
    const preview = $('#image-preview');
    const previewContainer = $('#preview-container');
    const placeholder = $('#upload-placeholder');
    const removeBtn = $('#remove-image');
    const progressWrapper = $('#progress-wrapper');
    const progressBar = $('#progress-bar');
    const imageError = $('#image-error');
    const updateBtn = $('#updateBtn');

    input.on('change', function() {
        const file = this.files[0];
        if (!file) return;

        const valid = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
        if (!valid.includes(file.type)) {
            imageError.text('Invalid file type.').removeClass('hidden');
            return;
        }
        if (file.size > 5 * 1024 * 1024) {
            imageError.text('File too large (max 5MB).').removeClass('hidden');
            return;
        }

        imageError.addClass('hidden');
        const reader = new FileReader();
        reader.onload = e => {
            preview.attr('src', e.target.result);
            previewContainer.removeClass('hidden');
            placeholder.addClass('hidden');
        };
        reader.readAsDataURL(file);
    });

    removeBtn.on('click', function() {
        input.val('');
        previewContainer.addClass('hidden');
        placeholder.removeClass('hidden');
    });

    $('#editProductForm').on('submit', function(e) {
        e.preventDefault();
        const formData = new FormData(this);
        progressWrapper.removeClass('hidden');
        updateBtn.prop('disabled', true).addClass('opacity-70 cursor-not-allowed').text('Uploading...');

        $.ajax({
            xhr: function() {
                const xhr = new window.XMLHttpRequest();
                xhr.upload.addEventListener('progress', function(e) {
                    if (e.lengthComputable) {
                        const percent = (e.loaded / e.total) * 100;
                        progressBar.css('width', percent + '%');
                    }
                });
                return xhr;
            },
            type: 'POST',
            url: $('#editProductForm').attr('action'),
            data: formData,
            processData: false,
            contentType: false,
            success: function() {
                progressBar.css('background-color', '#10b981'); // hijau saat selesai
                updateBtn.text('Success ✅');
                setTimeout(() => window.location.href = "{{ route('admin.products.index') }}", 800);
            },
            error: function() {
                imageError.text('Upload failed. Try again.').removeClass('hidden');
                progressWrapper.addClass('hidden');
                updateBtn.text('Retry').removeClass('opacity-70 cursor-not-allowed').prop('disabled', false);
            }
        });
    });
});
</script>
@endsection
