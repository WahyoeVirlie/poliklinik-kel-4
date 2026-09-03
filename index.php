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
                <a href="#" class="text-teal-600 font-semibold border-b-2 border-teal-600 pb-1 flex items-center gap-1.5">
                    <i class="fa-solid fa-house"></i> Home
                </a>
                <a href="#" class="hover:text-teal-600 transition flex items-center gap-1.5">
                    <i class="fa-solid fa-box"></i> Produk <i class="fa-solid fa-chevron-down text-xs"></i>
                </a>
                <a href="#" class="hover:text-teal-600 transition flex items-center gap-1.5">
                    <i class="fa-solid fa-clipboard-list"></i> Daftar Pelayanan
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

        <section class="bg-gradient-to-r from-blue-50 via-teal-50 to-blue-50 rounded-3xl p-8 md:p-12 relative overflow-hidden flex flex-col md:flex-row items-center justify-between min-h-[420px] gap-8">
    <div class="max-w-xl z-10 space-y-6">
        <div class="inline-flex items-center gap-2 bg-white/80 backdrop-blur-sm px-4 py-1.5 rounded-full border border-teal-100 text-xs font-semibold text-teal-700">
            <i class="fa-solid fa-shield-halved"></i> Kesehatan Anda, Prioritas Kami
        </div>
        <h1 class="text-4xl md:text-5xl font-bold text-gray-900 leading-tight">
            Untuk Hidup <br><span class="text-teal-600">Sehat</span> dan Bahagia
        </h1>
        <p class="text-gray-500 text-sm md:text-base leading-relaxed">
            Dapatkan produk kesehatan berkualitas dan pelayanan terbaik untuk Anda dan keluarga.
        </p>
        <div class="flex flex-wrap gap-4 pt-2">
            <a href="#" class="bg-teal-600 hover:bg-teal-700 text-white px-6 py-3 rounded-xl font-medium text-sm flex items-center gap-2 transition shadow-md">
                Lihat Produk <i class="fa-solid fa-chevron-right text-xs"></i>
            </a>
            <a href="#" class="bg-white hover:bg-gray-50 text-gray-700 border border-gray-200 px-6 py-3 rounded-xl font-medium text-sm transition">
                Daftar Pelayanan
            </a>
        </div>
    </div>
    
    <div class="w-full md:w-1/2 h-[320px] md:h-[380px] rounded-2xl overflow-hidden shadow-xl border-4 border-white bg-gray-100 shrink-0">
        <img src="image/1.jpeg" 
             alt="Dokter SehatCare" 
             class="w-full h-full object-cover object-center">
    </div>
</section>

        <section class="grid grid-cols-2 md:grid-cols-4 gap-6 bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 bg-teal-50 text-teal-600 rounded-2xl flex items-center justify-center text-xl shrink-0">
                    <i class="fa-solid fa-shield"></i>
                </div>
                <div>
                    <h4 class="font-semibold text-sm text-gray-900">Produk Original</h4>
                    <p class="text-xs text-gray-400">100% Terjamin</p>
                </div>
            </div>
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 bg-teal-50 text-teal-600 rounded-2xl flex items-center justify-center text-xl shrink-0">
                    <i class="fa-solid fa-truck-fast"></i>
                </div>
                <div>
                    <h4 class="font-semibold text-sm text-gray-900">Pengiriman Cepat</h4>
                    <p class="text-xs text-gray-400">Sampai ke rumah Anda</p>
                </div>
            </div>
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 bg-teal-50 text-teal-600 rounded-2xl flex items-center justify-center text-xl shrink-0">
                    <i class="fa-solid fa-headset"></i>
                </div>
                <div>
                    <h4 class="font-semibold text-sm text-gray-900">Konsultasi Gratis</h4>
                    <p class="text-xs text-gray-400">Bersama Apoteker</p>
                </div>
            </div>
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 bg-teal-50 text-teal-600 rounded-2xl flex items-center justify-center text-xl shrink-0">
                    <i class="fa-solid fa-lock"></i>
                </div>
                <div>
                    <h4 class="font-semibold text-sm text-gray-900">Pembayaran Aman</h4>
                    <p class="text-xs text-gray-400">100% Terpercaya</p>
                </div>
            </div>
        </section>

        <section class="space-y-6">
            <div class="flex justify-between items-end">
                <h2 class="text-2xl font-bold text-gray-900">Informasi Kesehatan</h2>
                <a href="#" class="text-teal-600 hover:underline font-semibold text-sm flex items-center gap-1">
                    Lihat Semua <i class="fa-solid fa-chevron-right text-xs"></i>
                </a>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <article class="bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-md transition group">
                    <div class="h-44 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1518611012118-696072aa579a?q=80&w=500&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" alt="Tips">
                    </div>
                    <div class="p-5 space-y-3">
                        <span class="bg-teal-50 text-teal-700 text-[10px] font-bold px-2.5 py-1 rounded-full uppercase tracking-wider">Tips Sehat</span>
                        <h3 class="font-bold text-sm text-gray-800 line-clamp-2 leading-snug">5 Kebiasaan Pagi Hari untuk Hidup Lebih Sehat</h3>
                        <p class="text-xs text-gray-500 line-clamp-2">Mulai hari dengan kebiasaan baik untuk tubuh dan pikiran yang lebih sehat.</p>
                        <div class="text-[11px] text-gray-400 pt-2 border-t border-gray-50 flex gap-2">
                            <span>20 Mei 2026</span> • <span>Tips</span>
                        </div>
                    </div>
                </article>

                <article class="bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-md transition group">
                    <div class="h-44 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1584515979956-d9f6e5d09982?q=80&w=500&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" alt="Cuci Tangan">
                    </div>
                    <div class="p-5 space-y-3">
                        <span class="bg-teal-50 text-teal-700 text-[10px] font-bold px-2.5 py-1 rounded-full uppercase tracking-wider">Info Kesehatan</span>
                        <h3 class="font-bold text-sm text-gray-800 line-clamp-2 leading-snug">Cuci Tangan dengan Benar, Cegah Penyakit</h3>
                        <p class="text-xs text-gray-500 line-clamp-2">Langkah sederhana yang efektif mencegah penyebaran kuman dan penyakit.</p>
                        <div class="text-[11px] text-gray-400 pt-2 border-t border-gray-50 flex gap-2">
                            <span>18 Mei 2026</span> • <span>Info</span>
                        </div>
                    </div>
                </article>

                <article class="bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-md transition group">
                    <div class="h-44 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1610832958506-aa56368176cf?q=80&w=500&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" alt="Vitamin C">
                    </div>
                    <div class="p-5 space-y-3">
                        <span class="bg-teal-50 text-teal-700 text-[10px] font-bold px-2.5 py-1 rounded-full uppercase tracking-wider">Gizi</span>
                        <h3 class="font-bold text-sm text-gray-800 line-clamp-2 leading-snug">Pentingnya Vitamin C untuk Daya Tahan Tubuh</h3>
                        <p class="text-xs text-gray-500 line-clamp-2">Vitamin C berperan penting dalam menjaga imunitas tubuh agar tetap prima.</p>
                        <div class="text-[11px] text-gray-400 pt-2 border-t border-gray-50 flex gap-2">
                            <span>15 Mei 2026</span> • <span>Gizi</span>
                        </div>
                    </div>
                </article>

                <article class="bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-md transition group">
                    <div class="h-44 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1541781774459-bb2af2f05b55?q=80&w=500&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" alt="Tidur Cukup">
                    </div>
                    <div class="p-5 space-y-3">
                        <span class="bg-teal-50 text-teal-700 text-[10px] font-bold px-2.5 py-1 rounded-full uppercase tracking-wider">Lifestyle</span>
                        <h3 class="font-bold text-sm text-gray-800 line-clamp-2 leading-snug">Tidur Cukup, Kunci Tubuh Sehat dan Produktif</h3>
                        <p class="text-xs text-gray-500 line-clamp-2">Tidur berkualitas membantu memperbaiki sel tubuh dan menjaga kesehatan mental.</p>
                        <div class="text-[11px] text-gray-400 pt-2 border-t border-gray-50 flex gap-2">
                            <span>12 Mei 2026</span> • <span>Lifestyle</span>
                        </div>
                    </div>
                </article>
            </div>
        </section>

        <section class="space-y-6 relative">
            <div class="flex justify-between items-end">
                <h2 class="text-2xl font-bold text-gray-900">Produk Rekomendasi</h2>
                <a href="#" class="text-teal-600 hover:underline font-semibold text-sm flex items-center gap-1">
                    Lihat Semua Produk <i class="fa-solid fa-chevron-right text-xs"></i>
                </a>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4 relative">
                <div class="bg-white rounded-2xl p-4 border border-gray-100 shadow-sm flex flex-col justify-between relative group">
                    <div>
                        <span class="bg-emerald-100 text-emerald-700 text-[10px] font-bold px-2 py-0.5 rounded-full absolute top-3 left-3">Best Seller</span>
                        <div class="h-32 flex items-center justify-center my-2">
                            <img src="https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?q=80&w=300&auto=format&fit=crop" class="max-h-full object-contain" alt="Paracetamol">
                        </div>
                        <h4 class="font-semibold text-xs text-gray-800 line-clamp-1">Paracetamol 500mg</h4>
                        <p class="text-[11px] text-gray-400">10 Tablet</p>
                    </div>
                    <div class="mt-4">
                        <p class="font-bold text-sm text-gray-900">Rp 5.000</p>
                        <div class="flex items-center justify-between mt-2">
                            <span class="text-[11px] text-gray-500 flex items-center gap-1">
                                <i class="fa-solid fa-star text-amber-400 text-xs"></i> 4.9 <span class="text-gray-300">(120)</span>
                            </span>
                            <button class="w-8 h-8 rounded-full bg-teal-50 text-teal-600 hover:bg-teal-600 hover:text-white transition flex items-center justify-center">
                                <i class="fa-solid fa-cart-shopping text-xs"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-2xl p-4 border border-gray-100 shadow-sm flex flex-col justify-between relative group">
                    <div>
                        <span class="bg-orange-100 text-orange-600 text-[10px] font-bold px-2 py-0.5 rounded-full absolute top-3 left-3">Promo 10%</span>
                        <div class="h-32 flex items-center justify-center my-2">
                            <img src="https://images.unsplash.com/photo-1550572017-edd951baa742?q=80&w=300&auto=format&fit=crop" class="max-h-full object-contain" alt="Vitamin C">
                        </div>
                        <h4 class="font-semibold text-xs text-gray-800 line-clamp-1">Vitamin C 500mg</h4>
                        <p class="text-[11px] text-gray-400">30 Tablet</p>
                    </div>
                    <div class="mt-4">
                        <span class="text-[10px] text-gray-400 line-through">Rp 35.000</span>
                        <p class="font-bold text-sm text-gray-900">Rp 31.500</p>
                        <div class="flex items-center justify-between mt-2">
                            <span class="text-[11px] text-gray-500 flex items-center gap-1">
                                <i class="fa-solid fa-star text-amber-400 text-xs"></i> 4.8 <span class="text-gray-300">(98)</span>
                            </span>
                            <button class="w-8 h-8 rounded-full bg-teal-50 text-teal-600 hover:bg-teal-600 hover:text-white transition flex items-center justify-center">
                                <i class="fa-solid fa-cart-shopping text-xs"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-2xl p-4 border border-gray-100 shadow-sm flex flex-col justify-between relative group">
                    <div>
                        <div class="h-32 flex items-center justify-center my-2">
                            <img src="https://images.unsplash.com/photo-1583947215259-38e31be8751f?q=80&w=300&auto=format&fit=crop" class="max-h-full object-contain" alt="Masker">
                        </div>
                        <h4 class="font-semibold text-xs text-gray-800 line-clamp-1">Masker Medis 3 Ply</h4>
                        <p class="text-[11px] text-gray-400">50 Pcs</p>
                    </div>
                    <div class="mt-4">
                        <p class="font-bold text-sm text-gray-900">Rp 25.000</p>
                        <div class="flex items-center justify-between mt-2">
                            <span class="text-[11px] text-gray-500 flex items-center gap-1">
                                <i class="fa-solid fa-star text-amber-400 text-xs"></i> 4.9 <span class="text-gray-300">(200)</span>
                            </span>
                            <button class="w-8 h-8 rounded-full bg-teal-50 text-teal-600 hover:bg-teal-600 hover:text-white transition flex items-center justify-center">
                                <i class="fa-solid fa-cart-shopping text-xs"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-2xl p-4 border border-gray-100 shadow-sm flex flex-col justify-between relative group">
                    <div>
                        <div class="h-32 flex items-center justify-center my-2">
                            <img src="https://images.unsplash.com/photo-1584017911766-d451b3d0e843?q=80&w=300&auto=format&fit=crop" class="max-h-full object-contain" alt="Hand Sanitizer">
                        </div>
                        <h4 class="font-semibold text-xs text-gray-800 line-clamp-1">Hand Sanitizer 100ml</h4>
                        <p class="text-[11px] text-gray-400">Gel</p>
                    </div>
                    <div class="mt-4">
                        <p class="font-bold text-sm text-gray-900">Rp 15.000</p>
                        <div class="flex items-center justify-between mt-2">
                            <span class="text-[11px] text-gray-500 flex items-center gap-1">
                                <i class="fa-solid fa-star text-amber-400 text-xs"></i> 4.8 <span class="text-gray-300">(75)</span>
                            </span>
                            <button class="w-8 h-8 rounded-full bg-teal-50 text-teal-600 hover:bg-teal-600 hover:text-white transition flex items-center justify-center">
                                <i class="fa-solid fa-cart-shopping text-xs"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-2xl p-4 border border-gray-100 shadow-sm flex flex-col justify-between relative group">
                    <div>
                        <div class="h-32 flex items-center justify-center my-2">
                            <img src="https://images.unsplash.com/photo-1544816155-12df9643f363?q=80&w=300&auto=format&fit=crop" class="max-h-full object-contain" alt="Tolak Angin">
                        </div>
                        <h4 class="font-semibold text-xs text-gray-800 line-clamp-1">Tolak Angin Cair</h4>
                        <p class="text-[11px] text-gray-400">15ml</p>
                    </div>
                    <div class="mt-4">
                        <p class="font-bold text-sm text-gray-900">Rp 12.000</p>
                        <div class="flex items-center justify-between mt-2">
                            <span class="text-[11px] text-gray-500 flex items-center gap-1">
                                <i class="fa-solid fa-star text-amber-400 text-xs"></i> 4.7 <span class="text-gray-300">(60)</span>
                            </span>
                            <button class="w-8 h-8 rounded-full bg-teal-50 text-teal-600 hover:bg-teal-600 hover:text-white transition flex items-center justify-center">
                                <i class="fa-solid fa-cart-shopping text-xs"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <button class="hidden lg:flex absolute -right-4 top-1/2 -translate-y-1/2 w-9 h-9 bg-white rounded-full shadow-md border border-gray-100 items-center justify-center text-gray-600 hover:bg-gray-50 z-10">
                    <i class="fa-solid fa-chevron-right text-sm"></i>
                </button>
            </div>
        </section>

        <section class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-gradient-to-r from-teal-50 to-emerald-50 p-6 rounded-2xl border border-teal-100/50 flex items-center gap-4">
                <div class="w-12 h-12 bg-white text-teal-600 rounded-full flex items-center justify-center text-xl shadow-sm shrink-0">
                    <i class="fa-solid fa-phone-volume"></i>
                </div>
                <div>
                    <h4 class="font-bold text-sm text-gray-900">Butuh Konsultasi?</h4>
                    <p class="text-xs text-gray-500 mb-2">Tanya langsung dengan apoteker kami secara gratis.</p>
                    <a href="#" class="text-xs font-bold text-teal-600 hover:underline flex items-center gap-1">
                        Chat Sekarang <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    </a>
                </div>
            </div>

            <div class="bg-gradient-to-r from-teal-50 to-emerald-50 p-6 rounded-2xl border border-teal-100/50 flex items-center gap-4">
                <div class="w-12 h-12 bg-white text-teal-600 rounded-full flex items-center justify-center text-xl shadow-sm shrink-0">
                    <i class="fa-solid fa-location-dot"></i>
                </div>
                <div>
                    <h4 class="font-bold text-sm text-gray-900">Temukan Kami</h4>
                    <p class="text-xs text-gray-500 mb-2">Kunjungi apotek terdekat di kota Anda.</p>
                    <a href="#" class="text-xs font-bold text-teal-600 hover:underline flex items-center gap-1">
                        Lihat Lokasi <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    </a>
                </div>
            </div>

            <div class="bg-gradient-to-r from-teal-50 to-emerald-50 p-6 rounded-2xl border border-teal-100/50 flex items-center gap-4">
                <div class="w-12 h-12 bg-white text-teal-600 rounded-full flex items-center justify-center text-xl shadow-sm shrink-0">
                    <i class="fa-solid fa-newspaper"></i>
                </div>
                <div>
                    <h4 class="font-bold text-sm text-gray-900">Artikel Kesehatan</h4>
                    <p class="text-xs text-gray-500 mb-2">Baca berbagai artikel terbaru seputar kesehatan.</p>
                    <a href="#" class="text-xs font-bold text-teal-600 hover:underline flex items-center gap-1">
                        Baca Sekarang <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    </a>
                </div>
            </div>
        </section>

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