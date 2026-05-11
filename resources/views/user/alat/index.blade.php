@extends('layouts.appuser')

@section('content')

<div class="card">
    <div class="card-header">
        <h3>Data Alat</h3>
        <a href="{{ route('alat.create') }}" class="btn btn-primary btn-sm float-right">Tambah</a>
    </div>

    <div class="card-body">

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Merk</th>
                    <th>Kategori</th>
                    <th>Kondisi</th>
                    <th>Stok</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach($data as $d)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $d->nama }}</td>
                    <td>{{ $d->merk }}</td>
                    <td>{{ $d->kategori }}</td>
                    <td>{{ $d->kondisi }}</td>
                    <td>{{ $d->stok }}</td>
                    <td>Rp {{ number_format($d->harga_sewa) }}</td>
                    <td>
                        <a href="{{ route('alat.delete', $d->id) }}" class="btn btn-danger btn-sm">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>

    </div>
</div>

@endsection