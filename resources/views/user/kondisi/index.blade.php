@extends('layouts.appuser')

@section('content')

<div class="card">
    <div class="card-header">
        <h3>Data Kondisi</h3>
        <a href="{{ route('kondisi.create') }}" class="btn btn-primary btn-sm float-right">Tambah</a>
    </div>

    <div class="card-body">

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Kondisi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $d)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $d->nama }}</td>
                    <td>
                        <a href="{{ route('kondisi.edit', $d->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="{{ route('kondisi.delete', $d->id) }}" class="btn btn-danger btn-sm">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>

@endsection