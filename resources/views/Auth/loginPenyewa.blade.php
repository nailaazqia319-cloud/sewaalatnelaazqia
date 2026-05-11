@extends('layouts.apptamu')

@section('content')

<div class="container mt-5" style="max-width:500px">

    <div class="card">
        <div class="card-header text-center">
            <h4>Login Penyewa</h4>
        </div>

        <div class="card-body">

            <form action="{{ route('login.penyewa.post') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>

                <button class="btn btn-success btn-block">
                    Login
                </button>

            </form>

        </div>

        <div class="card-footer text-center">
            <a href="{{ route('login.user') }}">
                Login sebagai Admin
            </a>
            <br>
            <a href="{{ route('register.penyewa') }}">
                Belum punya akun? Daftar
            </a>
        </div>
    </div>

</div>

@endsection