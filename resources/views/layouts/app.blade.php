<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    body { font-family: 'Poppins', sans-serif; }
    html { scroll-behavior: smooth; }
    nav { position: fixed; width: 100%; z-index: 50; }
    .spmb { background: linear-gradient(to right, #3C71F8, #24437C); }
    .slide-down { animation: slideDown 0.25s ease-out; }
    @keyframes slideDown { from { opacity: 0; transform: translateY(-10px); } to { opacity: 1; transform: translateY(0); } }

    /* Lazy image style */
    .lazy-image-container { position: relative; overflow: hidden; background-color: #f3f4f6; }
    .lazy-image { opacity: 0; transition: opacity 0.3s ease; width: 100%; height: auto; display: block; }
    .lazy-image.loaded { opacity: 1; }
    .image-placeholder { position: absolute; inset: 0; display: flex; align-items: center; justify-content: center; background-color: #e5e7eb; }
    .placeholder-spinner { width: 24px; height: 24px; border: 3px solid rgba(59,130,246,0.3); border-top-color: #3b82f6; border-radius: 50%; animation: spin 1s linear infinite; }
    @keyframes spin { to { transform: rotate(360deg); } }
  </style>
</head>

<body class="bg-gray-50 overflow-x-hidden">

<!-- NAVBAR -->
<nav class="bg-white border-b shadow-md font-semibold top-0">
  <div class="container mx-auto px-4 flex items-center justify-between h-16">

    <!-- Logo -->
    <div class="flex items-center space-x-2">
      <div class="lazy-image-container w-10 h-10 rounded-full">
        <div class="image-placeholder"><div class="placeholder-spinner"></div></div>
        <img data-src="{{ asset('image/logosmk.png') }}" alt="Logo" class="lazy-image w-10 h-10 rounded-full object-cover">
      </div>
    </div>

    <!-- Hamburger -->
    <button id="menu-btn" class="lg:hidden text-gray-700 focus:outline-none">
      <i class="fas fa-bars text-2xl"></i>
    </button>

    <!-- Menu -->
    <ul id="menu"
      class="hidden flex-col lg:flex lg:flex-row lg:items-center lg:space-x-6 absolute lg:static top-16 left-0 w-full lg:w-auto bg-white lg:bg-transparent shadow lg:shadow-none px-6 py-4 lg:p-0 space-y-3 lg:space-y-0 transition-all duration-300 ease-in-out">

      <li><a href="/" class="block text-black hover:text-blue-600">Beranda</a></li>

      <li class="relative">
        <button data-target="profilDropdown" class="dropdown-toggle flex items-center text-black hover:text-blue-600 w-full lg:w-auto">
          Profil
          <svg class="ml-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.25 7.5L10 12.25L14.75 7.5H5.25Z" clip-rule="evenodd"/></svg>
        </button>
        <ul id="profilDropdown" class="hidden lg:absolute left-0 mt-2 w-40 bg-white rounded shadow-md z-10">
          <li><a href="/visimisi" class="block px-4 py-2 hover:bg-gray-100">Visi Misi</a></li>
          <li><a href="/#jurusan" class="block px-4 py-2 hover:bg-gray-100">Jurusan</a></li>
        </ul>
      </li>

      <li class="relative">
        <button data-target="informasiDropdown" class="dropdown-toggle flex items-center text-black hover:text-blue-600 w-full lg:w-auto">
          Informasi
          <svg class="ml-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.25 7.5L10 12.25L14.75 7.5H5.25Z" clip-rule="evenodd"/></svg>
        </button>
        <ul id="informasiDropdown" class="hidden lg:absolute left-0 mt-2 w-40 bg-white rounded shadow-md z-10">
          <li><a href="{{ route('berita.index') }}" class="block px-4 py-2 hover:bg-gray-100">Berita</a></li>
          <li><a href="https://spmbjatim.net/" target="_blank" class="block px-4 py-2 hover:bg-gray-100">SPMB</a></li>
        </ul>
      </li>

      <li class="relative">
        <button data-target="produkDropdown" class="dropdown-toggle flex items-center text-black hover:text-blue-600 w-full lg:w-auto">
          Produk Kami
          <svg class="ml-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.25 7.5L10 12.25L14.75 7.5H5.25Z" clip-rule="evenodd"/></svg>
        </button>
        <ul id="produkDropdown" class="hidden lg:absolute left-0 mt-2 w-40 bg-white rounded shadow-md z-10">
          <li><a href="/batikenem" class="block px-4 py-2 hover:bg-gray-100">Batik Enem</a></li>
          <li><a href="/energienem" class="block px-4 py-2 hover:bg-gray-100">Energi Enem</a></li>
          <li><a href="/studioenem" class="block px-4 py-2 hover:bg-gray-100">Studio Enem</a></li>
        </ul>
      </li>

      <li><a href="/#kontak" class="block text-black hover:text-blue-600">Kontak</a></li>

      <div class="lg:hidden flex flex-col space-y-3 w-full mt-3">
        <form action="{{ route('berita.index') }}" method="GET">
          <div class="relative">
            <input type="text" name="search" placeholder="Cari Informasi"
              class="pl-8 pr-3 py-1 w-50 rounded bg-gray-100 focus:outline-none focus:ring focus:ring-blue-300">
            <i class="fas fa-search absolute left-2 top-2 text-gray-500"></i>
          </div>
        </form>

        @auth
          <a href="{{ route('admin.dashboard') }}" class="text-white px-4 py-2 rounded spmb text-center">Dashboard</a>
        @else
          <a href="{{ route('login') }}" class="text-white px-4 py-2 rounded spmb text-center">Login</a>
        @endauth
      </div>
    </ul>

    <div class="hidden lg:flex items-center space-x-3">
      <form action="{{ route('berita.index') }}" method="GET">
        <div class="relative">
          <input type="text" name="search" placeholder="Cari Informasi"
            class="pl-8 pr-3 py-1 rounded bg-gray-100 focus:outline-none focus:ring focus:ring-blue-300">
          <i class="fas fa-search absolute left-2 top-2 text-gray-500"></i>
        </div>
      </form>

      @auth
        <a href="{{ route('admin.dashboard') }}" class="text-white px-4 py-2 rounded hover:bg-blue-700 spmb">Dashboard</a>
      @else
        <a href="{{ route('login') }}" class="text-white px-4 py-2 rounded hover:bg-blue-700 spmb">Login</a>
      @endauth
    </div>
  </div>
</nav>

<main class="pt-16">@yield('content')</main>
@include('layouts.footer')
<script>
document.addEventListener('DOMContentLoaded', () => {
  const menuBtn = document.getElementById("menu-btn");
  const menu = document.getElementById("menu");
  const dropdownToggles = document.querySelectorAll(".dropdown-toggle");
  const lazyImages = document.querySelectorAll('.lazy-image');

  menuBtn.addEventListener("click", e => {
    e.stopPropagation();
    menu.classList.toggle("hidden");
    if (!menu.classList.contains("hidden")) menu.classList.add("slide-down");
  });

  dropdownToggles.forEach(toggle => {
    toggle.addEventListener("click", e => {
      e.stopPropagation();
      const target = document.getElementById(toggle.getAttribute("data-target"));
      document.querySelectorAll("[id$='Dropdown']").forEach(el => {
        if (el !== target) el.classList.add("hidden");
      });
      target.classList.toggle("hidden");
    });

    toggle.addEventListener("touchstart", e => {
      const target = document.getElementById(toggle.getAttribute("data-target"));
      const hidden = target.classList.contains("hidden");
      document.querySelectorAll("[id$='Dropdown']").forEach(el => {
        if (el !== target) el.classList.add("hidden");
      });
      if (hidden) {
        e.preventDefault();
        target.classList.remove("hidden");
      }
    });
  });

  window.addEventListener("click", e => {
    if (!menu.contains(e.target) && !menuBtn.contains(e.target)) menu.classList.add("hidden");
    document.querySelectorAll("[id$='Dropdown']").forEach(el => {
      if (!el.contains(e.target)) el.classList.add("hidden");
    });
  });

  // Lazy loading images
  if ('IntersectionObserver' in window) {
    const observer = new IntersectionObserver((entries, obs) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const img = entry.target;
          const container = img.closest('.lazy-image-container');
          const placeholder = container.querySelector('.image-placeholder');
          img.src = img.dataset.src;
          img.onload = () => {
            img.classList.add('loaded');
            placeholder.style.display = 'none';
          };
          obs.unobserve(img);
        }
      });
    }, { rootMargin: '100px 0px' });

    lazyImages.forEach(img => observer.observe(img));
  } else {
    lazyImages.forEach(img => {
      img.src = img.dataset.src;
      img.onload = () => img.classList.add('loaded');
    });
  }
});
</script>
</body>
</html>
