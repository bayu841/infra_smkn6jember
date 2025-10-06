<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
    nav {
      position: fixed;
      width: 100%;
      z-index: 99;
    }
    .spmb {
      background: linear-gradient(to right, #3C71F8, #24437C);
    }
  </style>
</head>

<body class="bg-gray-50">

  <!-- Navbar -->
  <nav class="bg-white border-b shadow-lg font-semibold top-0">
    <div class="container mx-auto px-4 flex items-center justify-between h-16">

      <!-- Logo -->
      <div class="flex items-center space-x-2">
        <img src="{{ asset('image/logosmk.png') }}" alt="Logo SMK" class="w-10 h-10">
      </div>

      <!-- Hamburger button (mobile only) -->
      <button id="menu-btn" class="md:hidden text-gray-700 focus:outline-none">
        <i class="fas fa-bars text-2xl"></i>
      </button>

      <!-- Menu -->
      <ul id="menu"
          class="hidden flex-col md:flex md:flex-row md:items-center md:space-x-6 absolute md:static top-16 left-0 w-full md:w-auto bg-white md:bg-transparent shadow md:shadow-none px-6 py-4 md:p-0 space-y-3 md:space-y-0">

        <li><a href="#" class="block text-black hover:text-blue-600">Beranda</a></li>

        <!-- Dropdown Profil -->
        <li class="relative md:static">
          <button onclick="toggleDropdown('profilDropdown')"
                  class="flex items-center text-black hover:text-blue-600 focus:outline-none w-full md:w-auto">
            Profil
            <svg class="ml-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M5.25 7.5L10 12.25L14.75 7.5H5.25Z" clip-rule="evenodd" />
            </svg>
          </button>
          <ul id="profilDropdown" class="hidden md:absolute left-0 mt-2 w-40 bg-white rounded shadow-md">
            <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Sejarah</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Visi Misi</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Jurusan</a></li>
          </ul>
        </li>

        <!-- Dropdown Informasi -->
        <li class="relative md:static">
          <button onclick="toggleDropdown('informasiDropdown')"
                  class="flex items-center text-black hover:text-blue-600 focus:outline-none w-full md:w-auto">
            Informasi
            <svg class="ml-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M5.25 7.5L10 12.25L14.75 7.5H5.25Z" clip-rule="evenodd" />
            </svg>
          </button>
          <ul id="informasiDropdown" class="hidden md:absolute left-0 mt-2 w-40 bg-white rounded shadow-md">
            <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Berita</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Pengumuman</a></li>
          </ul>
        </li>

        <li><a href="#" class="block text-black hover:text-blue-600">BKK</a></li>
        <li><a href="#" class="block text-black hover:text-blue-600">Kontak</a></li>

        <!-- Search + Button (mobile only) -->
        <div class="md:hidden flex flex-col space-y-3 w-full mt-3">
          <div class="relative">
            <input type="text" placeholder="Cari Informasi"
                   class="pl-8 pr-3 py-1 w-full rounded bg-gray-100 focus:outline-none focus:ring focus:ring-blue-300">
            <i class="fas fa-search absolute left-2 top-2 text-gray-500"></i>
          </div>
          <a href="#" class="text-white px-4 py-2 rounded spmb text-center">SPMB</a>
        </div>
      </ul>

      <!-- Search + Button (desktop only) -->
      <div class="hidden md:flex items-center space-x-3">
        <div class="relative">
          <input type="text" placeholder="Cari Informasi"
                 class="pl-8 pr-3 py-1 rounded bg-gray-100 focus:outline-none focus:ring focus:ring-blue-300">
          <i class="fas fa-search absolute left-2 top-2 text-gray-500"></i>
        </div>
        <a href="#" class="text-white px-4 py-2 rounded hover:bg-blue-700 spmb">SPMB</a>
      </div>
    </div>
  </nav>

  <!-- Main content -->
  <main class="pt-16">
    @yield('content')
  </main>

  @include('layouts.footer')

  <script>
    // Toggle dropdown
    function toggleDropdown(id) {
      document.getElementById(id).classList.toggle("hidden");
    }

    // Toggle menu mobile
    const menuBtn = document.getElementById("menu-btn");
    const menu = document.getElementById("menu");

    menuBtn.addEventListener("click", () => {
      menu.classList.toggle("hidden");
    });
  </script>

</body>
</html>
