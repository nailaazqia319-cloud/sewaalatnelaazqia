@extends('layouts.appuser')

@section('content')

<div class="card">
    <div class="card-header">
        <h3>Tambah Merk</h3>
    </div>

    <div class="card-body">
        <form action="{{ route('merk.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label>Nama Merk</label>
                <input type="text" name="nama" class="form-control" required>
            </div>

            <button class="btn btn-success">Simpan</button>
            <a href="{{ route('merk.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>

@endsection