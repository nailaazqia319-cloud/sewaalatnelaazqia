@extends('layouts.apptamu')

@section('content')

<div class="container mt-3">

    <h3>{{ $artikel['judul'] ?? '-' }}</h3>

    <p class="text-muted">
        {{ $artikel['created_at'] ?? '-' }}
    </p>

    <img src="{{ asset('uploads/'.$artikel['gambar']) }}" class="img-fluid mb-3">

    <p>{!! $artikel['isi'] !!}</p>

</div>

@endsection