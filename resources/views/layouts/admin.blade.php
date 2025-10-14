<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel') - SMKN 6 Jember</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#4e73df',
                        secondary: '#858796',
                        success: '#1cc88a',
                        info: '#36b9cc',
                        warning: '#f6c23e',
                        danger: '#e74a3b',
                        light: '#f8f9fc',
                        dark: '#5a5c69',
                    }
                }
            }
        }
    </script>
    @yield('styles')
</head>
<body class="bg-gray-100 font-sans antialiased">
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <div class="w-64 bg-gradient-to-b from-blue-600 to-blue-800 text-white shadow-xl flex flex-col relative">
            <div class="flex items-center justify-center p-5 border-b border-blue-700">
                <img src="{{asset('image/logosmk.png')}}" alt="Logo" class="w-10 h-10 mr-2">
                <span class="text-xl font-bold">SMKN 6 Jember</span>
            </div>

            <nav class="mt-6 flex-1 space-y-2">
                <a href="{{ url('/admin/dashboard') }}"
                   class="flex items-center px-5 py-3 rounded-lg transition-all duration-200 hover:bg-blue-700 w-60 ml-2  {{ request()->is('admin/dashboard') ? 'bg-blue-700 shadow-inner' : '' }}">
                    <i class="fas fa-home w-6 text-blue-200"></i>
                    <span class="ml-3 font-medium">Dashboard</span>
                </a>

                <a href="{{ route('admin.news.index') }}"
                   class="flex items-center px-5 py-3 rounded-lg transition-all duration-200 hover:bg-blue-700  w-60 ml-2 {{ request()->is('admin/news*') ? 'bg-blue-700 shadow-inner' : '' }}">
                    <i class="fas fa-newspaper w-6 text-blue-200"></i>
                    <span class="ml-3 font-medium">Data Artikel</span>
                </a>



                <a href="#"
                   class="flex items-center px-5 py-3 rounded-lg transition-all duration-200 hover:bg-blue-700 w-60 ml-2 ">
                    <i class="fas fa-chalkboard-teacher w-6 text-blue-200"></i>
                    <span class="ml-3 font-medium">Data Guru</span>
                </a>
            </nav>

            <div class="p-4 border-t border-blue-700">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="flex w-full items-center justify-center py-2 bg-gradient-to-r from-red-500 to-pink-500 rounded-lg shadow hover:from-red-600 hover:to-pink-600 transition-all">
                        <i class="fas fa-sign-out-alt mr-2"></i> Keluar
                    </button>
                </form>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Topbar -->
          <header class="bg-gradient-to-r from-white to-blue-50 shadow-md sticky top-0 z-40">
  <div class="flex items-center justify-between px-6 py-3">

    <!-- Kiri: Tombol Sidebar & Search -->
    <div class="flex items-center space-x-4">
      <button id="sidebarToggle"
        class="text-gray-600 hover:text-blue-600 focus:outline-none lg:hidden transition-colors duration-300">
        <i class="fas fa-bars text-xl"></i>
      </button>

      <!-- Search box -->
      <div class="relative hidden md:block">
        <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400">
          <i class="fas fa-search"></i>
        </span>
        <input
          class="pl-10 pr-4 py-2 rounded-full border border-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent w-64 transition-all duration-300 placeholder-gray-400"
          type="text"
          placeholder="Cari data atau menu...">
      </div>
    </div>

    <!-- Kanan: Notifikasi dan Profil -->
    <div class="flex items-center space-x-5">
      <!-- Notifikasi -->
      <div class="relative">
        <button
          class="relative p-2 text-gray-600 hover:text-blue-600 hover:bg-blue-100 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-300 transition-all duration-300">
          <i class="fas fa-bell text-lg"></i>
          <span class="absolute top-0 right-0 inline-flex items-center justify-center px-1.5 py-0.5 text-xs font-bold text-white transform translate-x-1/2 -translate-y-1/2 bg-red-500 rounded-full shadow">
            3
          </span>
        </button>
      </div>

      <!-- Profil -->
      <div class="relative">
        <button id="user-menu-button"
          class="flex items-center space-x-3 group focus:outline-none transition-all duration-300">
          <div class="text-right">
            <p class="text-sm font-medium text-gray-700 group-hover:text-blue-600 transition-colors">Hi, {{ Auth::user()->name }}</p>
            <p class="text-xs text-gray-500">{{ Auth::user()->email }}</p>
          </div>
          <div class="relative">
            <img class="w-10 h-10 rounded-full border-2 border-transparent group-hover:border-blue-400 transition-all duration-300"
                 src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=random"
                 alt="User Avatar">
          </div>
        </button>

        <!-- Dropdown Menu -->
        <div id="user-menu"
             class="hidden absolute right-0 mt-3 w-48 bg-white rounded-lg shadow-xl py-2 border border-gray-100 transition-all duration-200">
          <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition-colors">Profile</a>
          <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition-colors">Settings</a>
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition-colors">Logout</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</header>

            <!-- Page Content -->
            <main class="flex-1 overflow-y-auto p-6 bg-gray-100">
                @yield('content')
            </main>

            <!-- Footer -->
            <footer class="bg-white shadow-inner py-4">
                <div class="container mx-auto px-6">
                    <p class="text-center text-sm text-gray-600">Copyright © SMKN 6 Jember 2025</p>
                </div>
            </footer>
        </div>
    </div>

    <script>
        // Sidebar toggle
        document.getElementById('sidebarToggle').addEventListener('click', function() {
            document.querySelector('.w-64').classList.toggle('hidden');
        });

        // User menu toggle
        document.getElementById('user-menu-button').addEventListener('click', function() {
            document.getElementById('user-menu').classList.toggle('hidden');
        });

        // Close menu on outside click
        document.addEventListener('click', function(event) {
            const menu = document.getElementById('user-menu');
            const button = document.getElementById('user-menu-button');
            if (!button.contains(event.target)) menu.classList.add('hidden');
        });
    </script>

    @yield('scripts')
</body>
</html>
