@extends('layouts.apptamu')

@section('content')

<div class="container mt-3">

    <!-- Hero -->
    <div class="jumbotron text-center bg-primary text-white">
        <h3>Sistem Sewa Alat</h3>
        <p>Sewa alat dengan mudah dan cepat</p>
    </div>

    <!-- Artikel Terbaru -->
    <h5>Artikel Terbaru</h5>
    <div class="row">
        @foreach($artikels ?? [] as $a)
        <div class="col-md-4">
            <div class="card mb-3">
                <img src="{{ asset('uploads/'.$a['gambar']) }}" class="card-img-top">
                <div class="card-body">
                    <h6>{{ $a['judul'] }}</h6>
                    <p>{{ \Illuminate\Support\Str::limit($a['isi'], 80) }}</p>
                    <a href="/artikel/{{ $a['id'] }}" class="btn btn-sm btn-primary">Baca</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>

@endsection