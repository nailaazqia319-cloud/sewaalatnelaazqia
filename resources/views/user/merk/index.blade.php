@extends('layouts.appuser')

@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Merk</h3>
        <a href="{{ route('merk.create') }}" class="btn btn-primary btn-sm float-right">
            Tambah Data
        </a>
    </div>

    <div class="card-body">

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Merk</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $d)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $d->nama }}</td> {{-- ✅ FIX --}}
                    <td>
                        <a href="{{ route('merk.edit', $d->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="{{ route('merk.delete', $d->id) }}" class="btn btn-danger btn-sm"
                           onclick="return confirm('Yakin hapus data?')">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>

@endsection