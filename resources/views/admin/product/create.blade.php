@extends('layouts.admin')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold text-gray-800 mb-6">Create New Product</h1>

    <div class="bg-white p-8 rounded-xl shadow-md">
        <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="space-y-6">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Product Name</label>
                    <input type="text" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 @error('name') border-red-500 @enderror" id="name" name="name" value="{{ old('name') }}" required>
                    @error('name')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                    <textarea class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 @error('description') border-red-500 @enderror" id="description" name="description" rows="3" required>{{ old('description') }}</textarea>
                    @error('description')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                    <input type="number" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 @error('price') border-red-500 @enderror" id="price" name="price" value="{{ old('price') }}" step="0.01" required>
                    @error('price')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="stock" class="block text-sm font-medium text-gray-700">Stock</label>
                    <input type="number" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 @error('stock') border-red-500 @enderror" id="stock" name="stock" value="{{ old('stock') }}" required>
                    @error('stock')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
                    <select class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 @error('category') border-red-500 @enderror" id="category" name="category" required>
                        <option value="">Select a Category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category }}" {{ old('category') == $category ? 'selected' : '' }}>{{ $category }}</option>
                        @endforeach
                    </select>
                    @error('category')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Enhanced Image Upload Section -->
                <div>
                    <label for="image" class="block text-sm font-medium text-gray-700 mb-2">Product Image</label>

                    <!-- Upload Area -->
                    <div class="upload-area p-6 rounded-lg text-center cursor-pointer mb-4 border-2 border-dashed border-gray-300 hover:border-blue-400 transition-colors duration-200" id="upload-area">
                        <input type="file" class="hidden" id="image" name="image" accept="image/*">
                        <div class="py-8">
                            <i class="fas fa-cloud-upload-alt text-4xl text-gray-400 mb-3"></i>
                            <p class="text-lg font-medium text-gray-700">Drag & drop your image here</p>
                            <p class="text-sm text-gray-500 mt-1">or click to browse files</p>
                            <p class="text-xs text-gray-400 mt-2">Supports: JPG, PNG, GIF, WebP (Max: 5MB)</p>
                        </div>
                    </div>

                    <!-- File Info (Hidden by default) -->
                    <div class="file-info p-4 hidden mb-4 bg-gray-50 rounded-lg" id="file-info">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <i class="fas fa-file-image text-blue-500 text-xl mr-3"></i>
                                <div>
                                    <p class="text-sm font-medium text-gray-700" id="file-name">filename.jpg</p>
                                    <p class="text-xs text-gray-500" id="file-size">0 KB</p>
                                </div>
                            </div>
                            <button type="button" class="text-red-500 hover:text-red-700" id="remove-file">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Error Message -->
                    @error('image')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                    <div class="error-message hidden mt-2" id="error-message">
                        <p class="text-sm text-red-600">Error message will appear here</p>
                    </div>

                    <!-- Image Preview -->
                    <div class="preview-container mt-4 hidden" id="preview-container">
                        <p class="text-sm font-medium text-gray-700 mb-2">Preview:</p>
                        <div class="flex flex-wrap gap-4">
                            <div class="relative">
                                <img id="image-preview" src="#" alt="Image Preview" class="w-48 h-48 object-cover rounded-md border border-gray-300 shadow-sm hover:scale-105 transition-transform duration-300">
                                <button type="button" class="absolute -top-2 -right-2 bg-red-500 text-white rounded-full w-6 h-6 flex items-center justify-center text-xs hover:bg-red-600" id="remove-preview">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-8 flex justify-end gap-4">
                <a href="{{ route('admin.products.index') }}" class="px-6 py-2 rounded-lg border border-gray-300 text-gray-700 font-semibold hover:bg-gray-100 transition duration-200">
                    Cancel
                </a>
                <button type="submit" class="px-6 py-2 rounded-lg bg-blue-600 text-white font-semibold hover:bg-blue-700 transition duration-200">
                    Create Product
                </button>
            </div>
        </form>
    </div>
</div>

@push('styles')
<style>
    .upload-area.dragover {
        border-color: #3b82f6;
        background-color: #eff6ff;
    }
</style>
@endpush

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const uploadArea = document.getElementById('upload-area');
        const fileInput = document.getElementById('image');
        const fileInfo = document.getElementById('file-info');
        const fileName = document.getElementById('file-name');
        const fileSize = document.getElementById('file-size');
        const removeFileBtn = document.getElementById('remove-file');
        const previewContainer = document.getElementById('preview-container');
        const imagePreview = document.getElementById('image-preview');
        const removePreviewBtn = document.getElementById('remove-preview');
        const errorMessage = document.getElementById('error-message');

        // Click on upload area to trigger file input
        uploadArea.addEventListener('click', function() {
            fileInput.click();
        });

        // Handle file selection
        fileInput.addEventListener('change', function(event) {
            handleFileSelection(event.target.files[0]);
        });

        // Drag and drop functionality
        ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
            uploadArea.addEventListener(eventName, preventDefaults, false);
        });

        function preventDefaults(e) {
            e.preventDefault();
            e.stopPropagation();
        }

        ['dragenter', 'dragover'].forEach(eventName => {
            uploadArea.addEventListener(eventName, highlight, false);
        });

        ['dragleave', 'drop'].forEach(eventName => {
            uploadArea.addEventListener(eventName, unhighlight, false);
        });

        function highlight() {
            uploadArea.classList.add('dragover');
        }

        function unhighlight() {
            uploadArea.classList.remove('dragover');
        }

        uploadArea.addEventListener('drop', function(e) {
            const dt = e.dataTransfer;
            const file = dt.files[0];
            handleFileSelection(file);
        });

        // Handle the selected file
        function handleFileSelection(file) {
            if (!file) return;

            // Validate file type
            const validTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
            if (!validTypes.includes(file.type)) {
                showError('Please select a valid image file (JPG, PNG, GIF, or WebP).');
                return;
            }

            // Validate file size (5MB max)
            const maxSize = 5 * 1024 * 1024; // 5MB in bytes
            if (file.size > maxSize) {
                showError('File size exceeds the 5MB limit.');
                return;
            }

            // Clear any previous errors
            hideError();

            // Update file info
            fileName.textContent = file.name;
            fileSize.textContent = formatFileSize(file.size);
            fileInfo.classList.remove('hidden');

            // Preview image
            const reader = new FileReader();
            reader.onload = function(e) {
                imagePreview.src = e.target.result;
                previewContainer.classList.remove('hidden');
            };
            reader.readAsDataURL(file);
        }

        // Remove file
        removeFileBtn.addEventListener('click', function() {
            resetFileInput();
        });

        removePreviewBtn.addEventListener('click', function() {
            resetFileInput();
        });

        function resetFileInput() {
            fileInput.value = '';
            fileInfo.classList.add('hidden');
            previewContainer.classList.add('hidden');
            hideError();
        }

        // Utility functions
        function formatFileSize(bytes) {
            if (bytes === 0) return '0 Bytes';
            const k = 1024;
            const sizes = ['Bytes', 'KB', 'MB', 'GB'];
            const i = Math.floor(Math.log(bytes) / Math.log(k));
            return parseFloat((bytes / Math.pow(k, i)).toFixed(2)) + ' ' + sizes[i];
        }

        function showError(message) {
            errorMessage.querySelector('p').textContent = message;
            errorMessage.classList.remove('hidden');
        }

        function hideError() {
            errorMessage.classList.add('hidden');
        }
    });
</script>
@endpush
@endsection
