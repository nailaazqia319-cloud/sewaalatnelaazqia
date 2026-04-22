<aside class="main-sidebar sidebar-light-primary elevation-4">
    
    <!-- Brand -->
    <a href="/" class="brand-link">
        <span class="brand-text font-weight-bold">SEWA ALAT</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Menu -->
        <nav class="mt-3">
            <ul class="nav nav-pills nav-sidebar flex-column">

                <li class="nav-header">MENU UTAMA</li>

                <li class="nav-item">
                    <a href="/" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Home</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/kategori" class="nav-link">
                        <i class="nav-icon fas fa-list"></i>
                        <p>Daftar Kategori</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/artikel" class="nav-link">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>Artikel</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/tentang" class="nav-link">
                        <i class="nav-icon fas fa-info-circle"></i>
                        <p>Tentang</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/kontak" class="nav-link">
                        <i class="nav-icon fas fa-envelope"></i>
                        <p>Kontak</p>
                    </a>
                </li>

                <li class="nav-header">KATEGORI POPULER</li>

                {{-- Loop kategori --}}
                @foreach($kategoris ?? [] as $kategori)
                <li class="nav-item">
                    <a href="/kategori/{{ $kategori->id }}" class="nav-link">
                        <i class="nav-icon fas fa-angle-right"></i>
                        <p>{{ $kategori->nama }}</p>
                    </a>
                </li>
                @endforeach

            </ul>
        </nav>

    </div>
</aside>