@extends('layouts.apptamu')

@section('content')

<div class="container mt-3">

    <h4>Tag: {{ $tag }}</h4>

    <div class="row">
        @foreach($artikels ?? [] as $a)
        <div class="col-md-4">
            <div class="card mb-3">
                <img src="{{ asset('uploads/'.$a->gambar) }}" class="card-img-top">
                <div class="card-body">
                    <h6>{{ $a->judul }}</h6>
                    <a href="/artikel/{{ $a->id }}" class="btn btn-sm btn-primary">Detail</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>

@endsection