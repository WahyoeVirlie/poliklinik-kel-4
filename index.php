<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SehatCare - Sehat untuk hidup lebih baik</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8fafc;
        }
        .bg-teal-custom { background-color: #0d9488; }
        .text-teal-custom { color: #0d9488; }
        .bg-dark-teal { background-color: #064e3b; }
        .bg-soft-blue { background-color: #e0f2fe; }
    </style>
</head>
<body class="text-gray-800 antialiased">

    <header class="bg-white border-b border-gray-100 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
            <div class="flex items-center space-x-2">
                <div class="w-10 h-10 bg-teal-500 rounded-lg flex items-center justify-center text-white text-xl font-bold shadow-md">
                    <i class="fa-solid fa-heart-pulse"></i>
                </div>
                <div>
                    <h1 class="text-xl font-bold text-gray-900 leading-none">SehatCare</h1>
                    <p class="text-xs text-gray-400 mt-0.5">Sehat untuk hidup lebih baik</p>
                </div>
            </div>

            <nav class="hidden md:flex items-center space-x-8 font-medium text-sm text-gray-600">
                <a href="?page=home" class="hover:text-teal-600 font-semibold flex items-center gap-1.5">
                    <i class="fa-solid fa-house"></i> Home
                </a>
                <a href="?page=produk" class="hover:text-teal-600 transition flex items-center gap-1.5">
                    <i class="fa-solid fa-box"></i> Produk 
                </a>
                <a href="?page=konsultasi" class="hover:text-teal-600 transition flex items-center gap-1.5">
                    <i class="fa-solid fa-clipboard-list"></i> Konsultasi
                </a>
            </nav>

            <div class="flex items-center space-x-4">
                <button class="w-10 h-10 rounded-full border border-gray-200 flex items-center justify-center text-gray-600 hover:bg-gray-50 transition">
                    <i class="fa-solid fa-magnifying-glass text-sm"></i>
                </button>
                <a href="#" class="bg-teal-600 hover:bg-teal-700 text-white px-5 py-2.5 rounded-full text-sm font-medium flex items-center gap-2 transition shadow-sm">
                    <i class="fa-regular fa-user"></i> Login
                </a>
            </div>
        </div>
    </header>

    <main class="max-w-7xl mx-auto px-6 py-8 space-y-12">

    <?php
    include 'lib/koneksi.php';
    $page = isset($_GET['page']) ? $_GET['page'] : '';
    switch ($page) {
        case 'produk':
            include 'modul/produk.php';
            break;

        case 'konsultasi':
            include 'modul/konsultasi.php';
            break;

        default:
            include 'modul/home.php';
            break;
    }
    ?>

    </main>

    <footer class="bg-[#004d40] text-white mt-16 pt-12 pb-6">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-8 pb-10 border-b border-teal-800/60 text-sm">
            <div class="space-y-4">
                <div class="flex items-center space-x-2">
                    <div class="w-8 h-8 bg-teal-500 rounded-lg flex items-center justify-center text-white text-lg font-bold">
                        <i class="fa-solid fa-heart-pulse"></i>
                    </div>
                    <span class="text-lg font-bold">SehatCare</span>
                </div>
                <p class="text-xs text-teal-200/80">Sehat untuk hidup lebih baik.</p>
                <div class="flex space-x-3 text-teal-200">
                    <a href="#" class="w-8 h-8 rounded-full bg-teal-800/50 flex items-center justify-center hover:bg-teal-700 transition"><i class="fa-brands fa-facebook-f text-xs"></i></a>
                    <a href="#" class="w-8 h-8 rounded-full bg-teal-800/50 flex items-center justify-center hover:bg-teal-700 transition"><i class="fa-brands fa-instagram text-xs"></i></a>
                    <a href="#" class="w-8 h-8 rounded-full bg-teal-800/50 flex items-center justify-center hover:bg-teal-700 transition"><i class="fa-brands fa-youtube text-xs"></i></a>
                </div>
            </div>

            <div>
                <h5 class="font-semibold text-sm mb-3 text-teal-100">Menu</h5>
                <ul class="space-y-2 text-xs text-teal-200/80">
                    <li><a href="#" class="hover:text-white transition">Home</a></li>
                    <li><a href="#" class="hover:text-white transition">Produk</a></li>
                    <li><a href="#" class="hover:text-white transition">Daftar Pelayanan</a></li>
                    <li><a href="#" class="hover:text-white transition">Tentang Kami</a></li>
                </ul>
            </div>

            <div>
                <h5 class="font-semibold text-sm mb-3 text-teal-100">Bantuan</h5>
                <ul class="space-y-2 text-xs text-teal-200/80">
                    <li><a href="#" class="hover:text-white transition">FAQ</a></li>
                    <li><a href="#" class="hover:text-white transition">Pengiriman</a></li>
                    <li><a href="#" class="hover:text-white transition">Pembayaran</a></li>
                    <li><a href="#" class="hover:text-white transition">Kebijakan Privasi</a></li>
                </ul>
            </div>

            <div>
                <h5 class="font-semibold text-sm mb-3 text-teal-100">Kontak Kami</h5>
                <ul class="space-y-2.5 text-xs text-teal-200/80">
                    <li class="flex items-center gap-2"><i class="fa-solid fa-phone text-teal-400"></i> 0812-3456-7890</li>
                    <li class="flex items-center gap-2"><i class="fa-solid fa-envelope text-teal-400"></i> info@sehatcare.com</li>
                    <li class="flex items-start gap-2"><i class="fa-solid fa-location-dot text-teal-400 mt-0.5"></i> Jl. Sehat No. 123, Jakarta</li>
                </ul>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-6 pt-6 text-center text-xs text-teal-300/60">
            © 2026 SehatCare. All rights reserved.
        </div>
    </footer>

</body>
</html>