@extends('layouts.appuser')

@section('content')

<div class="card">
    <div class="card-header">
        <h3>Edit Kondisi</h3>
    </div>

    <div class="card-body">

        @if($errors->any())
            <div class="alert alert-danger">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ route('kondisi.update', $data->id) }}" method="POST">
            @csrf

            <div class="form-group">
                <label>Nama Kondisi</label>
                <input type="text" name="nama" value="{{ $data->nama }}" class="form-control" required>
            </div>

            <button class="btn btn-success">Update</button>
            <a href="{{ route('kondisi.index') }}" class="btn btn-secondary">Kembali</a>
        </form>

    </div>
</div>

@endsection