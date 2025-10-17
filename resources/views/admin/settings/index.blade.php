@extends('layouts.admin')

@section('title', 'Pengaturan Admin')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-gray-800 mb-8">Pengaturan Admin</h1>

    @if (session('success'))
        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6" role="alert">
            <p>{{ session('success') }}</p>
        </div>
    @endif

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- General Settings -->
        <div class="bg-white shadow-lg rounded-lg p-8">
            <h2 class="text-2xl font-semibold text-gray-700 mb-6">Pengaturan Umum</h2>
            <form action="{{ route('admin.settings.update') }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-5">
                    <label for="site_name" class="block text-gray-700 text-sm font-medium mb-2">Nama Situs:</label>
                    <input type="text" name="site_name" id="site_name" value="{{ old('site_name', $settings['site_name'] ?? 'SMKN 6 Jember') }}" 
                           class="shadow-sm appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200 ease-in-out">
                </div>

                <div class="mb-5">
                    <label for="tagline" class="block text-gray-700 text-sm font-medium mb-2">Tagline Situs:</label>
                    <input type="text" name="tagline" id="tagline" value="{{ old('tagline', $settings['tagline'] ?? 'Infrastruktur Digital Pendidikan') }}" 
                           class="shadow-sm appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200 ease-in-out">
                </div>

                <div class="mb-6">
                    <label for="admin_email" class="block text-gray-700 text-sm font-medium mb-2">Email Admin:</label>
                    <input type="email" name="admin_email" id="admin_email" value="{{ old('admin_email', $settings['admin_email'] ?? 'admin@smkn6jember.sch.id') }}" 
                           class="shadow-sm appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200 ease-in-out">
                </div>

                <div class="flex items-center justify-end">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline transition duration-200 ease-in-out">
                        Simpan Pengaturan Umum
                    </button>
                </div>
            </form>
        </div>

        <!-- Notification Settings -->
        <div class="bg-white shadow-lg rounded-lg p-8">
            <h2 class="text-2xl font-semibold text-gray-700 mb-6">Pengaturan Notifikasi</h2>
            <form action="{{ route('admin.settings.update') }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-5 flex items-center">
                    <input type="hidden" name="email_notifications" value="off">
                    <input type="checkbox" name="email_notifications" id="email_notifications" class="form-checkbox h-5 w-5 text-blue-600 rounded focus:ring-blue-500" value="on" {{ old('email_notifications', $settings['email_notifications'] ?? 'on') == 'on' ? 'checked' : '' }}>
                    <label for="email_notifications" class="ml-2 block text-gray-700 text-sm font-medium">Kirim Notifikasi Email</label>
                </div>

                <div class="mb-5">
                    <label for="notification_frequency" class="block text-gray-700 text-sm font-medium mb-2">Frekuensi Notifikasi:</label>
                    <select name="notification_frequency" id="notification_frequency" 
                            class="shadow-sm appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200 ease-in-out">
                        <option value="daily" {{ old('notification_frequency', $settings['notification_frequency'] ?? 'weekly') == 'daily' ? 'selected' : '' }}>Harian</option>
                        <option value="weekly" {{ old('notification_frequency', $settings['notification_frequency'] ?? 'weekly') == 'weekly' ? 'selected' : '' }}>Mingguan</option>
                        <option value="monthly" {{ old('notification_frequency', $settings['notification_frequency'] ?? 'weekly') == 'monthly' ? 'selected' : '' }}>Bulanan</option>
                    </select>
                </div>

                <div class="mb-6">
                    <label for="notification_channel" class="block text-gray-700 text-sm font-medium mb-2">Saluran Notifikasi:</label>
                    <div class="flex items-center space-x-4">
                        <label class="inline-flex items-center">
                            <input type="radio" class="form-radio h-4 w-4 text-blue-600" name="notification_channel" value="email" {{ old('notification_channel', $settings['notification_channel'] ?? 'email') == 'email' ? 'checked' : '' }}>
                            <span class="ml-2 text-gray-700">Email</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="radio" class="form-radio h-4 w-4 text-blue-600" name="notification_channel" value="dashboard" {{ old('notification_channel', $settings['notification_channel'] ?? 'email') == 'dashboard' ? 'checked' : '' }}>
                            <span class="ml-2 text-gray-700">Dashboard</span>
                        </label>
                    </div>
                </div>

                <div class="flex items-center justify-end">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline transition duration-200 ease-in-out">
                        Simpan Pengaturan Notifikasi
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
