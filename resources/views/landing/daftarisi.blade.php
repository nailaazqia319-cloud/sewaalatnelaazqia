@extends('layouts.apptamu')

@section('content')

<div class="container mt-3">

    <h4>Daftar Isi</h4>

    <ul class="list-group">
        @foreach($artikels ?? [] as $a)
        <li class="list-group-item">
            <a href="/artikel/{{ $a->id }}">
                {{ $a->judul }}
            </a>
        </li>
        @endforeach
    </ul>

</div>

@endsection