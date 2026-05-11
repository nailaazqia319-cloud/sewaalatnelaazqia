@extends('layouts.apptamu')

@section('content')

<div class="container mt-4">

    <!-- HERO -->
    <div class="jumbotron text-center text-white"
         style="background: linear-gradient(135deg, #007bff, #00c6ff); border-radius: 12px;">
        <h2 class="font-weight-bold">Sistem Sewa Alat</h2>
        <p class="mb-0">Sewa alat dengan mudah, cepat, dan terpercaya</p>
    </div>

    <!-- ARTIKEL -->
    <h5 class="mt-4 mb-3">📌 Artikel Terbaru</h5>

    <div class="row">

        @forelse($artikels ?? [] as $a)

            <div class="col-md-4 mb-3">

                <div class="card shadow-sm border-0 h-100">

                    {{-- GAMBAR DUMMY / REAL --}}
                    <img
                        src="{{ $a['gambar'] 
                            ? asset('uploads/'.$a['gambar']) 
                            : 'https://source.unsplash.com/600x400/?tool,construction' }}"
                        class="card-img-top"
                        style="height: 180px; object-fit: cover;"
                    >

                    <div class="card-body">

                        <h6 class="font-weight-bold">
                            {{ $a['judul'] }}
                        </h6>

                        <p class="text-muted" style="font-size: 14px;">
                            {{ \Illuminate\Support\Str::limit($a['isi'], 90) }}
                        </p>

                        <a href="/artikel/{{ $a['id'] }}" class="btn btn-primary btn-sm">
                            Baca Selengkapnya
                        </a>

                    </div>

                </div>

            </div>

        @empty

            <div class="col-12 text-center text-muted">
                Belum ada artikel tersedia
            </div>

        @endforelse

    </div>

</div>

@endsection