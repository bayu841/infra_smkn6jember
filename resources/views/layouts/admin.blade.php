<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel') - Aplikasi Saya</title>
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
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="w-64 bg-primary text-white">
            <a href="{{ url('/admin/dashboard') }}" class="p-4 text-xl font-bold border-b border-blue-800 block">
                SMKN 6 Jember
            </a>
            <nav class="mt-5">
                <a href="{{ url('/admin/dashboard') }}" class="flex items-center px-4 py-2 mt-1 text-white hover:bg-blue-700 {{ request()->is('admin/dashboard') ? 'bg-blue-700' : '' }}">
                    <i class="fas fa-tachometer-alt w-6"></i>
                    <span class="mx-4">Dashboard</span>
                </a>
                <a href="{{ route('news.index') }}" class="flex items-center px-4 py-2 mt-1 text-white hover:bg-blue-700 {{ request()->is('admin/news*') ? 'bg-blue-700' : '' }}">
                    <i class="fas fa-newspaper w-6"></i>
                    <span class="mx-4">Berita</span>
                </a>
                <a href="#" class="flex items-center px-4 py-2 mt-1 text-white hover:bg-blue-700">
                    <i class="fas fa-user-graduate w-6"></i>
                    <span class="mx-4">Data Siswa</span>
                </a>
                <a href="#" class="flex items-center px-4 py-2 mt-1 text-white hover:bg-blue-700">
                    <i class="fas fa-book w-6"></i>
                    <span class="mx-4">Mata Pelajaran</span>
                </a>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Topbar -->
            <header class="bg-white shadow">
                <div class="flex items-center justify-between p-4">
                    <div class="flex items-center">
                        <button id="sidebarToggle" class="text-gray-600 focus:outline-none lg:hidden">
                            <i class="fas fa-bars"></i>
                        </button>
                        <div class="relative mx-4 lg:mx-0">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                <i class="fas fa-search text-gray-400"></i>
                            </span>
                            <input class="pl-10 pr-4 py-2 rounded-lg border focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" type="text" placeholder="Search...">
                        </div>
                    </div>
                    <div class="flex items-center">
                        <div class="relative">
                            <button class="relative p-2 text-gray-600 hover:bg-gray-100 rounded-full focus:outline-none focus:ring-2 focus:ring-primary">
                                <i class="fas fa-bell"></i>
                                <span class="absolute top-0 right-0 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-white transform translate-x-1/2 -translate-y-1/2 bg-danger rounded-full">3</span>
                            </button>
                        </div>
                        <div class="relative ml-3">
                            <button class="relative flex items-center space-x-3 focus:outline-none" id="user-menu-button">
                                <div class="text-right">
                                    <p class="text-sm font-medium text-gray-700"></p>
                                    <p class="text-xs text-gray-500">Administrator</p>
                                </div>
                                <img class="w-10 h-10 rounded-full" src="https://source.unsplash.com/random/40x40" alt="User Avatar">
                            </button>
                            <div class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-50" id="user-menu">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profile</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Settings</a>
                                <a href="" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                <form id="logout-form" action="" method="POST" class="hidden">
                                    @csrf
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
                    <p class="text-center text-sm text-gray-600">Copyright © Your Website 2023</p>
                </div>
            </footer>
        </div>
    </div>

    <script>
        // Toggle sidebar
        document.getElementById('sidebarToggle').addEventListener('click', function() {
            document.querySelector('.w-64').classList.toggle('hidden');
        });

        // Toggle user menu
        document.getElementById('user-menu-button').addEventListener('click', function() {
            document.getElementById('user-menu').classList.toggle('hidden');
        });

        // Close user menu when clicking outside
        document.addEventListener('click', function(event) {
            const userMenu = document.getElementById('user-menu');
            const userMenuButton = document.getElementById('user-menu-button');
            
            if (!userMenuButton.contains(event.target)) {
                userMenu.classList.add('hidden');
            }
        });
    </script>
    @yield('scripts')
</body>
</html>