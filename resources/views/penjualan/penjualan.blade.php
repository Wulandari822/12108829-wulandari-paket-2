@extends('layout.main')

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h4 mb-0 text-gray-900">Penjualan</h1>
</div>
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <a href="{{route('penjualan-create')}}" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Tambah Penjualan</a>
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">Nama Pelanggan</th>
                    <th scope="col">Tanggal Penjualan</th>
                    <th scope="col">Total Harga</th>
                    <th scope="col">Dibuat Oleh</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><a href="{{route('penjualan-show')}}" class="btn btn-warning"><i class="fas fa-edit"></i> Lihat</a>
                        <a href="" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Hapus</a>
                    </td>
                  </tr>
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection