@extends('layouts.appuser')

@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Tambah User</h3>
        <a href="{{ route('user.index') }}" class="btn btn-secondary btn-sm float-right">
            Kembali
        </a>
    </div>

    <div class="card-body">

        {{-- ERROR VALIDASI --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('user.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Role</label>
                <select name="role" class="form-control" required>
                    <option value="">-- Pilih Role --</option>
                    <option value="admin">Admin</option>
                    <option value="petugas">Petugas</option>
                </select>
            </div>

            <button class="btn btn-primary">Simpan</button>

        </form>

    </div>
</div>

@endsection