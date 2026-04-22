<nav class="main-header navbar navbar-expand navbar-light navbar-white">

    <!-- Left -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#">
                <i class="fas fa-bars"></i>
            </a>
        </li>
    </ul>

    <!-- Center Title -->
    <span class="navbar-brand mx-auto font-weight-bold">
        Sewa Alat
    </span>

    <!-- Right -->
    <ul class="navbar-nav ml-auto">

        <!-- Notifikasi -->
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="far fa-bell"></i>
            </a>
        </li>

        <!-- User -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-user"></i>
            </a>

            <div class="dropdown-menu dropdown-menu-right">

                <span class="dropdown-item-text">
                    {{ auth('penyewa')->user()->nama ?? 'Penyewa' }}
                </span>

                <div class="dropdown-divider"></div>

                <a href="#" class="dropdown-item">
                    <i class="fas fa-user mr-2"></i> Profil
                </a>

                <form action="/logout-penyewa" method="POST">
                    @csrf
                    <button class="dropdown-item text-danger">
                        <i class="fas fa-sign-out-alt mr-2"></i> Logout
                    </button>
                </form>

            </div>
        </li>

    </ul>
</nav>