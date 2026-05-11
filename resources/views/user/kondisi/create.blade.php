@extends('layouts.appuser')

@section('content')

<div class="card">
    <div class="card-header">
        <h3>Tambah Kondisi</h3>
    </div>

    <div class="card-body">

        <form action="{{ route('kondisi.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label>Nama Kondisi</label>
                <input type="text" name="nama" class="form-control" required>
            </div>

            <button class="btn btn-primary">Simpan</button>
            <a href="{{ route('kondisi.index') }}" class="btn btn-secondary">Kembali</a>
        </form>

    </div>
</div>

@endsection