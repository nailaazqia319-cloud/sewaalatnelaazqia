<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sewa Alat Ahmadi</title>

    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">

    <!-- Custom Style -->
    <style>
        body {
            background-color: #f4f6f9;
        }

        .content-wrapper {
            background: #ffffff;
        }

        .card img {
            height: 180px;
            object-fit: cover;
        }

        @media (max-width: 768px) {
            .card img {
                height: 150px;
            }
        }
    </style>
</head>

<body class="hold-transition layout-top-nav">

<div class="wrapper">

    <!-- 🔝 NAVBAR -->
    @include('layouts.tamu.navbar')

    <!-- 🔻 CONTENT -->
    <div class="content-wrapper">

        <div class="content pt-3">
            <div class="container">

                @yield('content')

            </div>
        </div>

    </div>

    <!-- 🔚 FOOTER -->
    @include('layouts.tamu.footer')

</div>

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>

<!-- Bootstrap -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- AdminLTE -->
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>

</body>
</html>