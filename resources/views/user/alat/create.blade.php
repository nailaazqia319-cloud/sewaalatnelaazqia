@extends('layouts.appuser')

@section('content')

<div class="card">
    <div class="card-header">
        <h3>Tambah Alat</h3>
    </div>

    <div class="card-body">

        <form action="{{ route('alat.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label>Nama Alat</label>
                <input type="text" name="nama" class="form-control">
            </div>

            <div class="form-group">
                <label>Merk</label>
                <select name="merk_id" class="form-control">
                    @foreach($merk as $m)
                        <option value="{{ $m->id }}">{{ $m->nama }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>Kategori</label>
                <select name="kategori_id" class="form-control">
                    @foreach($kategori as $k)
                        <option value="{{ $k->id }}">{{ $k->nama }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>Kondisi</label>
                <select name="kondisi_id" class="form-control">
                    @foreach($kondisi as $k)
                        <option value="{{ $k->id }}">{{ $k->nama }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>Stok</label>
                <input type="number" name="stok" class="form-control">
            </div>

            <div class="form-group">
                <label>Harga</label>
                <input type="number" name="harga_sewa" class="form-control">
            </div>

            <button class="btn btn-success">Simpan</button>
        </form>

    </div>
</div>

@endsection