<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Penyewa | Sewa Alat Naila</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-100 font-sans">

    <div class="flex h-screen overflow-hidden">
        <aside class="w-64 bg-slate-800 text-white flex-shrink-0 hidden md:flex flex-col">
            <div class="p-4 text-xl font-bold border-b border-slate-700 text-center">
                <span class="text-blue-400">SEWA</span> ALAT
            </div>
            <nav class="flex-1 p-4 space-y-2 overflow-y-auto">
                <a href="#" class="flex items-center p-2 bg-blue-600 rounded-lg text-white">
                    <i class="fas fa-tachometer-alt w-6"></i> <span>Dashboard</span>
                </a>
                <a href="#" class="flex items-center p-2 text-gray-300 hover:bg-slate-700 hover:text-white rounded-lg transition">
                    <i class="fas fa-tools w-6"></i> <span>Daftar Alat</span>
                </a>
                <a href="#" class="flex items-center p-2 text-gray-300 hover:bg-slate-700 hover:text-white rounded-lg transition">
                    <i class="fas fa-history w-6"></i> <span>Riwayat Sewa</span>
                </a>
                <a href="#" class="flex items-center p-2 text-gray-300 hover:bg-slate-700 hover:text-white rounded-lg transition">
                    <i class="fas fa-user w-6"></i> <span>Profil Saya</span>
                </a>
            </nav>
            <div class="p-4 border-t border-slate-700 text-sm text-gray-400">
                Penyewa: <span class="text-white">{{ session('nama') }}</span>
            </div>
        </aside>

        <div class="flex-1 flex flex-col overflow-hidden">
            
            <header class="bg-white shadow-sm h-16 flex items-center justify-between px-6 z-10">
                <div class="flex items-center">
                    <button class="text-gray-500 md:hidden mr-4">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                    <h2 class="text-xl font-semibold text-gray-800">Dashboard Utama</h2>
                </div>
                
                <div class="flex items-center space-x-4">
                    <span class="text-gray-600 hidden sm:block">Halo, <strong>{{ session('nama') }}</strong></span>
                    <form action="{{ route('logout.penyewa') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="text-red-500 hover:text-red-700 font-medium flex items-center">
                            <i class="fas fa-sign-out-alt mr-1"></i> <span class="hidden sm:inline">Keluar</span>
                        </button>
                    </form>
                </div>
            </header>

            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100 p-6">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                    <div class="bg-white rounded-xl shadow-sm p-6 border-l-4 border-blue-500">
                        <div class="flex items-center">
                            <div class="p-3 bg-blue-100 rounded-full text-blue-600 mr-4">
                                <i class="fas fa-shopping-cart text-xl"></i>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500 uppercase font-bold">Pesanan Saya</p>
                                <h3 class="text-2xl font-bold">1 Pesanan</h3>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-xl shadow-sm p-6 border-l-4 border-green-500">
                        <div class="flex items-center">
                            <div class="p-3 bg-green-100 rounded-full text-green-600 mr-4">
                                <i class="fas fa-check-circle text-xl"></i>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500 uppercase font-bold">Status Sewa</p>
                                <h3 class="text-2xl font-bold">Aktif</h3>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-xl shadow-sm p-6 border-l-4 border-yellow-500">
                        <div class="flex items-center">
                            <div class="p-3 bg-yellow-100 rounded-full text-yellow-600 mr-4">
                                <i class="fas fa-wallet text-xl"></i>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500 uppercase font-bold">Total Biaya</p>
                                <h3 class="text-2xl font-bold">Rp 300.000</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-sm p-8 border border-gray-200">
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Selamat Datang di Sewa Alat Naila!</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Anda telah berhasil masuk ke sistem sebagai penyewa. Di sini Anda dapat melihat katalog alat, mengelola pemesanan, dan memantau status pengembalian barang secara real-time.
                    </p>
                </div>
            </main>

            <footer class="bg-white border-t border-gray-200 p-4 text-center text-sm text-gray-600">
                &copy; 2026 <strong>SewaAlatNaila</strong>. All rights reserved.
            </footer>
        </div>
    </div>

</body>
</html>