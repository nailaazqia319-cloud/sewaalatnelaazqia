@extends('layouts.apptamu')

@section('content')

<div class="container mt-5" style="max-width:600px">

    <div class="card">
        <div class="card-header text-center">
            <h4>Register Penyewa</h4>
        </div>

        <div class="card-body">

            <form action="#" method="POST">
                @csrf

                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>No HP</label>
                    <input type="text" name="hp" class="form-control">
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Konfirmasi Password</label>
                    <input type="password" name="password_confirmation" class="form-control" required>
                </div>

                <button class="btn btn-primary btn-block">
                    Daftar
                </button>

            </form>

        </div>

        <div class="card-footer text-center">
            <a href="{{ route('login.penyewa') }}">
                Sudah punya akun? Login
            </a>
        </div>
    </div>

</div>

@endsection