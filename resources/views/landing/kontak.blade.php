@extends('layouts.apptamu')

@section('content')

<div class="container mt-3">

    <h3>Kontak</h3>

    <form>
        <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control">
        </div>

        <div class="form-group">
            <label>Pesan</label>
            <textarea class="form-control"></textarea>
        </div>

        <button class="btn btn-primary">Kirim</button>
    </form>

</div>

@endsection