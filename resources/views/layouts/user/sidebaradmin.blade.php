<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="/dashboard/admin" class="brand-link">
        <span class="brand-text font-weight-bold">ADMIN PANEL</span>
    </a>

    <div class="sidebar">

        <nav class="mt-3">
            <ul class="nav nav-pills nav-sidebar flex-column">

                {{-- DASHBOARD --}}
                <li class="nav-item">
                    <a href="/dashboard/admin" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                {{-- MASTER DATA --}}
                <li class="nav-header">MASTER DATA</li>

                {{-- ✅ HANYA ADMIN --}}
                @if(session('role') == 'admin')
                <li class="nav-item">
                    <a href="{{ route('user.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Manajemen User</p>
                    </a>
                </li>
                @endif

                <li class="nav-item">
                    <a href="/kategori" class="nav-link">
                        <i class="nav-icon fas fa-list"></i>
                        <p>Kategori</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/merk" class="nav-link">
                        <i class="nav-icon fas fa-tags"></i>
                        <p>Merk</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/kondisi" class="nav-link">
                        <i class="nav-icon fas fa-check-circle"></i>
                        <p>Kondisi</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/alat" class="nav-link">
                        <i class="nav-icon fas fa-tools"></i>
                        <p>Data Alat</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/penyewa" class="nav-link">
                        <i class="nav-icon fas fa-user-friends"></i>
                        <p>Penyewa</p>
                    </a>
                </li>

                {{-- TRANSAKSI --}}
                <li class="nav-header">TRANSAKSI</li>

                <li class="nav-item">
                    <a href="/pemesanan" class="nav-link">
                        <i class="nav-icon fas fa-shopping-cart"></i>
                        <p>Pemesanan</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/pembayaran" class="nav-link">
                        <i class="nav-icon fas fa-money-bill"></i>
                        <p>Pembayaran</p>
                    </a>
                </li>

                {{-- KONTEN --}}
                <li class="nav-header">KONTEN</li>

                <li class="nav-item">
                    <a href="/artikel" class="nav-link">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>Artikel</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/komentar" class="nav-link">
                        <i class="nav-icon fas fa-comments"></i>
                        <p>Komentar</p>
                    </a>
                </li>

                {{-- LAPORAN --}}
                <li class="nav-header">LAPORAN</li>

                <li class="nav-item">
                    <a href="/laporan/bulanan" class="nav-link">
                        <i class="nav-icon fas fa-file"></i>
                        <p>Laporan Bulanan</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/laporan/tahunan" class="nav-link">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>Laporan Tahunan</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/laporan/aruskas" class="nav-link">
                        <i class="nav-icon fas fa-chart-line"></i>
                        <p>Arus Kas</p>
                    </a>
                </li>

            </ul>
        </nav>

    </div>
</aside>