@extends('layouts.appuser')

@section('content')

<div class="content-header">
    <div class="container-fluid">
        <h4 class="mb-2">Dashboard Admin</h4>
        <p class="text-muted">Ringkasan data sistem sewa alat</p>
    </div>
</div>

<div class="content">
    <div class="container-fluid">

        <!-- STAT BOX -->
        <div class="row">

            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>10</h3>
                        <p>Total Alat</p>
                    </div>
                    <div class="icon"><i class="fas fa-tools"></i></div>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>5</h3>
                        <p>Pemesanan</p>
                    </div>
                    <div class="icon"><i class="fas fa-shopping-cart"></i></div>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>3</h3>
                        <p>Penyewa</p>
                    </div>
                    <div class="icon"><i class="fas fa-users"></i></div>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>2</h3>
                        <p>User Admin/Petugas</p>
                    </div>
                    <div class="icon"><i class="fas fa-user-shield"></i></div>
                </div>
            </div>

        </div>

        <!-- FITUR CEPAT -->
        <div class="row">

            <div class="col-md-3">
                <a href="#" class="btn btn-primary btn-block mb-2">
                    Kelola User
                </a>
            </div>

            <div class="col-md-3">
                <a href="#" class="btn btn-success btn-block mb-2">
                    Data Alat
                </a>
            </div>

            <div class="col-md-3">
                <a href="#" class="btn btn-warning btn-block mb-2">
                    Pemesanan
                </a>
            </div>

            <div class="col-md-3">
                <a href="#" class="btn btn-danger btn-block mb-2">
                    Laporan
                </a>
            </div>

        </div>

        <!-- TABEL TRANSAKSI -->
        <div class="card mt-3">
            <div class="card-header">
                <h5>Transaksi Terbaru</h5>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Penyewa</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Ahmad</td>
                            <td>2026-04-22</td>
                            <td><span class="badge badge-warning">Pending</span></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Budi</td>
                            <td>2026-04-21</td>
                            <td><span class="badge badge-success">Selesai</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

@endsection