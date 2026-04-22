<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashboard</title>

    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
</head>

<body class="hold-transition sidebar-mini layout-fixed">

@php
    $user_id = session('user_id');
    $role    = session('role');
    $nama    = session('nama');
@endphp

{{-- 🔐 PROTEKSI LOGIN --}}
@if(!$user_id)
    <script>
        window.location.href = "{{ route('login.user') }}";
    </script>
@endif

<div class="wrapper">

    <!-- Navbar -->
    @include('layouts.user.navbar')

    <!-- Sidebar berdasarkan role -->
    @if($role == 'admin')
        @include('layouts.user.sidebaradmin')
    @elseif($role == 'petugas')
        @include('layouts.user.sidebarpetugas')
    @endif

    <!-- Content -->
    <div class="content-wrapper">

        <section class="content pt-3">
            <div class="container-fluid">

                {{-- 🔔 INFO USER (OPSIONAL) --}}
                <div class="mb-2">
                    <strong>Login sebagai:</strong> {{ $nama }} ({{ $role }})
                </div>

                @yield('content')

            </div>
        </section>

    </div>

    <!-- Footer -->
    @include('layouts.user.footer')

</div>

<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>

</body>
</html>