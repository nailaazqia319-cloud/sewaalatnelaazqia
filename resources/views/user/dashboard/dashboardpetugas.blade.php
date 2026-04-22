@extends('layouts.appuser')

@section('content')

<div class="content-header">
    <div class="container-fluid">
        <h4 class="mb-2">Dashboard Petugas</h4>
        <p class="text-muted">Monitoring aktivitas sewa alat</p>
    </div>
</div>

<div class="content">
    <div class="container-fluid">

        <!-- STAT -->
        <div class="row">

            <div class="col-lg-4 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>10</h3>
                        <p>Total Alat</p>
                    </div>
                    <div class="icon"><i class="fas fa-tools"></i></div>
                </div>
            </div>

            <div class="col-lg-4 col-6">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>5</h3>
                        <p>Pemesanan</p>
                    </div>
                    <div class="icon"><i class="fas fa-shopping-cart"></i></div>
                </div>
            </div>

            <div class="col-lg-4 col-6">
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>3</h3>
                        <p>Penyewa</p>
                    </div>
                    <div class="icon"><i class="fas fa-users"></i></div>
                </div>
            </div>

        </div>

        <!-- FITUR -->
        <div class="row">

            <div class="col-md-4">
                <a href="#" class="btn btn-success btn-block mb-2">
                    Kelola Alat
                </a>
            </div>

            <div class="col-md-4">
                <a href="#" class="btn btn-warning btn-block mb-2">
                    Pemesanan
                </a>
            </div>

            <div class="col-md-4">
                <a href="#" class="btn btn-danger btn-block mb-2">
                    Laporan
                </a>
            </div>

        </div>

        <!-- TABEL -->
        <div class="card mt-3">
            <div class="card-header">
                <h5>Aktivitas Terbaru</h5>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Penyewa</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Andi</td>
                            <td><span class="badge badge-warning">Dipinjam</span></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Siti</td>
                            <td><span class="badge badge-success">Selesai</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

@endsection