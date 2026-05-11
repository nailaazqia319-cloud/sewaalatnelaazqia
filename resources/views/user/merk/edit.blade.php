@extends('layouts.appuser')

@section('content')

<div class="card">
    <div class="card-header">
        <h3>Edit Merk</h3>
    </div>

    <div class="card-body">
        <form action="{{ route('merk.update', $data->id) }}" method="POST">
            @csrf

            <div class="form-group">
                <label>Nama Merk</label>
                <input type="text" name="nama" value="{{ $data->nama }}" class="form-control" required>
            </div>

            <button class="btn btn-success">Update</button>
            <a href="{{ route('merk.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>

@endsection