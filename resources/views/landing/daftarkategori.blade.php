@extends('layouts.apptamu')

@section('content')

<div class="container mt-3">

    <h4>Daftar Kategori</h4>

    <div class="row">
        @foreach($kategoris ?? [] as $k)
        <div class="col-md-3">
            <div class="card text-center mb-3">
                <div class="card-body">
                    <h6>{{ $k['nama'] }}</h6>
                    <a href="{{ url('/kategori/'.$k['id']) }}" class="btn btn-sm btn-primary">
                        Lihat
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>

@endsection