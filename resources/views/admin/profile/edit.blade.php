@extends('layouts.admin')

@section('title', 'Edit Profil')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-gray-800 mb-8 fade-in">Edit Profil Pengguna</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 fade-in">
        <!-- Update Profile Information -->
        <div class="bg-white shadow-lg rounded-lg p-8">
            <h2 class="text-2xl font-semibold text-gray-700 mb-6">Informasi Profil</h2>
            <form action="{{ route('admin.profile.update') }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-5">
                    <label for="name" class="block text-gray-700 text-sm font-medium mb-2">Nama:</label>
                    <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}" 
                           class="shadow-sm appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200 ease-in-out">
                </div>

                <div class="mb-5">
                    <label for="email" class="block text-gray-700 text-sm font-medium mb-2">Email:</label>
                    <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}" 
                           class="shadow-sm appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200 ease-in-out">
                </div>

                <div class="mb-6">
                    <label for="phone" class="block text-gray-700 text-sm font-medium mb-2">Nomor Telepon:</label>
                    <input type="text" name="phone" id="phone" value="{{ old('phone', $user->phone) }}" 
                           class="shadow-sm appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200 ease-in-out">
                </div>

                <div class="flex items-center justify-end">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline transition duration-200 ease-in-out">
                        Perbarui Profil
                    </button>
                </div>
            </form>
        </div>

        <!-- Update Password -->
        <div class="bg-white shadow-lg rounded-lg p-8">
            <h2 class="text-2xl font-semibold text-gray-700 mb-6">Ubah Kata Sandi</h2>
            <form action="{{ route('admin.profile.update') }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-5">
                    <label for="current_password" class="block text-gray-700 text-sm font-medium mb-2">Kata Sandi Saat Ini:</label>
                    <input type="password" name="current_password" id="current_password" 
                           class="shadow-sm appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200 ease-in-out">
                </div>

                <div class="mb-5">
                    <label for="password" class="block text-gray-700 text-sm font-medium mb-2">Kata Sandi Baru:</label>
                    <input type="password" name="password" id="password" 
                           class="shadow-sm appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200 ease-in-out">
                </div>

                <div class="mb-6">
                    <label for="password_confirmation" class="block text-gray-700 text-sm font-medium mb-2">Konfirmasi Kata Sandi Baru:</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" 
                           class="shadow-sm appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200 ease-in-out">
                </div>

                <div class="flex items-center justify-end">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline transition duration-200 ease-in-out">
                        Ubah Kata Sandi
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
