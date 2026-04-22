<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">

        <a href="{{ route('home') }}" class="navbar-brand">
            <span class="brand-text font-weight-bold">SewaAlat</span>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">

            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link">Home</a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('kategori.list') }}" class="nav-link">Kategori</a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('tentang') }}" class="nav-link">Tentang</a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('kontak') }}" class="nav-link">Kontak</a>
                </li>

                {{-- LOGIN --}}
                <li class="nav-item">
                    <a href="{{ route('login.user') }}" class="btn btn-sm btn-primary ml-2">
                        Login User
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('login.penyewa') }}" class="btn btn-sm btn-success ml-2">
                        Login Penyewa
                    </a>
                </li>

            </ul>
        </div>

    </div>
</nav>