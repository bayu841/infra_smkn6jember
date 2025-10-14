<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

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

        #track {
            display: flex;
            gap: 16px;
            overflow: hidden;
            scroll-behavior: smooth;
            white-space: nowrap;
        }

        .slide {
            flex: 0 0 auto;
            width: 850px; /* sesuai slide-mu */
        }

        /* Lazy Loading Placeholder Styles */
        .lazy-image-container {
            position: relative;
            overflow: hidden;
            background-color: #f3f4f6;
        }

        .lazy-image {
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .lazy-image.loaded {
            opacity: 1;
        }

        .image-placeholder {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #e5e7eb;
            z-index: 1;
        }

        .placeholder-spinner {
            width: 40px;
            height: 40px;
            border: 4px solid rgba(59, 130, 246, 0.2);
            border-radius: 50%;
            border-top-color: #3b82f6;
            animation: spin 1s ease-in-out infinite;
        }

        .placeholder-skeleton {
            background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
            background-size: 200% 100%;
            animation: loading 1.5s infinite;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }

        @keyframes loading {
            0% { background-position: 200% 0; }
            100% { background-position: -200% 0; }
        }

        /* Blur placeholder style */
        .blur-placeholder {
            filter: blur(10px);
            transform: scale(1.1);
        }
    </style>
</head>

<body class="bg-gray-50">

    <!-- Navbar -->
    <nav class="bg-white border-b shadow-lg font-semibold top-0">
        <div class="container mx-auto px-4 flex items-center justify-between h-16">

            <!-- Logo -->
            <div class="flex items-center space-x-2">
                <!-- Menggunakan lazy loading untuk logo -->
                <div class="lazy-image-container w-10 h-10 rounded-full">
                    <div class="image-placeholder">
                        <div class="placeholder-spinner"></div>
                    </div>
                    <img class="lazy-image w-10 h-10 rounded-full"
                         data-src="{{ asset('image/logosmk.png') }}"
                         alt="Logo SMK">
                </div>
            </div>

            <!-- Hamburger button (mobile only) -->
            <button id="menu-btn" class="md:hidden text-gray-700 focus:outline-none">
                <i class="fas fa-bars text-2xl"></i>
            </button>

            <!-- Menu -->
            <ul id="menu"
                class="hidden flex-col md:flex md:flex-row md:items-center md:space-x-6 absolute md:static top-16 left-0 w-full md:w-auto bg-white md:bg-transparent shadow md:shadow-none px-6 py-4 md:p-0 space-y-3 md:space-y-0">

                <li><a href="/" class="block text-black hover:text-blue-600">Beranda</a></li>

                <!-- Dropdown Profil -->
                <li class="relative">
                    <button data-target="profilDropdown"
                        class="dropdown-toggle flex items-center text-black hover:text-blue-600 focus:outline-none w-full md:w-auto">
                        Profil
                        <svg class="ml-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.25 7.5L10 12.25L14.75 7.5H5.25Z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <ul id="profilDropdown"
                        class="hidden md:absolute left-0 mt-2 w-40 bg-white rounded shadow-md z-10">
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Sejarah</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Visi Misi</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Jurusan</a></li>
                    </ul>
                </li>

                <!-- Dropdown Informasi -->
                <li class="relative">
                    <button data-target="informasiDropdown"
                        class="dropdown-toggle flex items-center text-black hover:text-blue-600 focus:outline-none w-full md:w-auto">
                        Informasi
                        <svg class="ml-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.25 7.5L10 12.25L14.75 7.5H5.25Z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <ul id="informasiDropdown"
                        class="hidden md:absolute left-0 mt-2 w-40 bg-white rounded shadow-md z-10">
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
                    <a href="https://spmbjatim.net/" class="text-white px-4 py-2 rounded spmb text-center" target="_blank" rel="noopener noreferrer">SPMB</a>
                </div>
            </ul>

            <!-- Search + Button (desktop only) -->
            <div class="hidden md:flex items-center space-x-3">
                <div class="relative">
                    <input type="text" placeholder="Cari Informasi"
                        class="pl-8 pr-3 py-1 rounded bg-gray-100 focus:outline-none focus:ring focus:ring-blue-300">
                    <i class="fas fa-search absolute left-2 top-2 text-gray-500"></i>
                </div>
                <a href="https://spmbjatim.net/" target="_blank" rel="noopener noreferrer" class="text-white px-4 py-2 rounded hover:bg-blue-700 spmb">SPMB</a>
            </div>
        </div>
    </nav>

    <!-- Main content -->
    <main class="pt-16">
        @yield('content')
    </main>

    @include('layouts.footer')

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const menuBtn = document.getElementById("menu-btn");
            const menu = document.getElementById("menu");
            const dropdownToggles = document.querySelectorAll(".dropdown-toggle");

            // Toggle mobile menu
            menuBtn.addEventListener("click", function (event) {
                event.stopPropagation();
                menu.classList.toggle("hidden");
            });

            // Toggle dropdowns
            dropdownToggles.forEach(function (toggle) {
                toggle.addEventListener("click", function (event) {
                    event.stopPropagation();
                    const targetId = toggle.getAttribute("data-target");
                    const targetDropdown = document.getElementById(targetId);

                    // Hide all other dropdowns
                    document.querySelectorAll(".dropdown-toggle").forEach(function (otherToggle) {
                        const otherTargetId = otherToggle.getAttribute("data-target");
                        if (otherTargetId !== targetId) {
                            document.getElementById(otherTargetId).classList.add("hidden");
                        }
                    });

                    targetDropdown.classList.toggle("hidden");
                });
            });

            // Close menus on click outside
            window.addEventListener("click", function (event) {
                // Close mobile menu
                if (menu && !menu.classList.contains('hidden') && !menu.contains(event.target) && !menuBtn.contains(event.target)) {
                    menu.classList.add("hidden");
                }

                // Close all dropdowns
                document.querySelectorAll(".dropdown-toggle").forEach(function (toggle) {
                    const targetId = toggle.getAttribute("data-target");
                    const targetDropdown = document.getElementById(targetId);

                    if (targetDropdown && !targetDropdown.classList.contains('hidden') && !targetDropdown.contains(event.target) && !toggle.contains(event.target)) {
                        targetDropdown.classList.add("hidden");
                    }
                });
            });

            // Lazy Loading Implementation
            const lazyImages = document.querySelectorAll('.lazy-image');

            // Check if browser supports IntersectionObserver
            if ('IntersectionObserver' in window) {
                const imageObserver = new IntersectionObserver((entries, observer) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            const img = entry.target;
                            const container = img.closest('.lazy-image-container');
                            const placeholder = container.querySelector('.image-placeholder');

                            // For blur placeholder, load thumbnail first
                            if (img.classList.contains('blur-placeholder') && img.dataset.thumb) {
                                const thumb = new Image();
                                thumb.src = img.dataset.thumb;
                                thumb.onload = function() {
                                    img.src = img.dataset.thumb;
                                    img.classList.add('loaded');

                                    // Then load the full image
                                    const fullImg = new Image();
                                    fullImg.src = img.dataset.src;
                                    fullImg.onload = function() {
                                        img.src = img.dataset.src;
                                        img.classList.remove('blur-placeholder');
                                    };
                                };
                            } else {
                                // Regular lazy loading
                                const src = img.dataset.src;
                                img.src = src;
                                img.onload = function() {
                                    img.classList.add('loaded');
                                    if (placeholder) {
                                        placeholder.style.display = 'none';
                                    }
                                };
                            }

                            // Stop observing the image
                            imageObserver.unobserve(img);
                        }
                    });
                }, {
                    rootMargin: '50px 0px', // Start loading 50px before the image is in viewport
                    threshold: 0.01
                });

                lazyImages.forEach(img => {
                    imageObserver.observe(img);
                });
            } else {
                // Fallback for browsers that don't support IntersectionObserver
                lazyImages.forEach(img => {
                    const container = img.closest('.lazy-image-container');
                    const placeholder = container.querySelector('.image-placeholder');

                    // For blur placeholder
                    if (img.classList.contains('blur-placeholder') && img.dataset.thumb) {
                        img.src = img.dataset.thumb;
                        img.classList.add('loaded');

                        // Then load the full image
                        const fullImg = new Image();
                        fullImg.src = img.dataset.src;
                        fullImg.onload = function() {
                            img.src = img.dataset.src;
                            img.classList.remove('blur-placeholder');
                        };
                    } else {
                        img.src = img.dataset.src;
                        img.onload = function() {
                            img.classList.add('loaded');
                            if (placeholder) {
                                placeholder.style.display = 'none';
                            }
                        };
                    }
                });
            }
        });
    </script>

</body>

</html>
