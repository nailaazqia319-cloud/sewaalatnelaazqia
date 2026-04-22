<nav class="main-header navbar navbar-expand navbar-dark navbar-primary">

    <!-- Left -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#">
                <i class="fas fa-bars"></i>
            </a>
        </li>
    </ul>

    <!-- Right -->
    <ul class="navbar-nav ml-auto">

        @php
            $nama = session('nama');
        @endphp

        <!-- User Dropdown -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-user"></i>
                <span class="ml-1">{{ $nama ?? 'User' }}</span>
            </a>

            <div class="dropdown-menu dropdown-menu-right">

                <a href="#" class="dropdown-item">
                    <i class="fas fa-user-circle mr-2"></i> Profil
                </a>

                <div class="dropdown-divider"></div>

                <!-- ✅ LOGOUT TANPA FORM -->
                <a href="{{ route('logout.user') }}" class="dropdown-item text-danger">
                    <i class="fas fa-sign-out-alt mr-2"></i> Logout
                </a>

            </div>
        </li>

    </ul>
</nav>