@extends('layout.main')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h4 mb-0 text-gray-900">Edit Stok</h1>
    </div>
    <div class="container-fluid">
        <form action="" class="" method="POST">
            <div class="mb-3">
              <label for="nama_produk" class="form-label">Nama Produk</label>
              <input class="form-control" type="text"name="nama_produk" value="Nama_Produk" aria-label="readonly input example" readonly>
            </div>
            <div class="mb-3">
                <label for="stok" class="form-label">Stok</label>
                <input type="number" name="stok" class="form-control" id="stok">
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection