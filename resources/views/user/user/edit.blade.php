@extends('layouts.appuser')

@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Edit User</h3>
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

        <form action="{{ route('user.update', $data->id) }}" method="POST">
            @csrf

            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" value="{{ $data->nama }}" required>
            </div>

            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="{{ $data->username }}" required>
            </div>

            <div class="form-group">
                <label>Password (Kosongkan jika tidak diubah)</label>
                <input type="password" name="password" class="form-control">
            </div>

            <div class="form-group">
                <label>Role</label>
                <select name="role" class="form-control" required>
                    <option value="admin" {{ $data->role == 'admin' ? 'selected' : '' }}>Admin</option>
                    <option value="petugas" {{ $data->role == 'petugas' ? 'selected' : '' }}>Petugas</option>
                </select>
            </div>

            <button class="btn btn-success">Update</button>

        </form>

    </div>
</div>

@endsection
