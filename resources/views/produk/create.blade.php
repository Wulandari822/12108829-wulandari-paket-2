@extends('layout.main')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h4 mb-0 text-gray-900">Tambah Produk</h1>
  </div>

  <div class="container-fluid">
      <form action="{{ route('produk-store') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="gambar" class="form-label mt-3">Gambar Produk</label>
          <input type="file" name="gambar" id="gambar" class="form-control w-50">
          </div>
          <div class="mb-3">
            <label for="nama_produk" class="form-label">Nama</label>
            <input type="text" name="nama_produk" class="form-control" id="nama_produk">
          </div>
          <div class="mb-3">
              <label for="stok" class="form-label">Stok</label>
              <input type="text" name="stok" class="form-control" id="stok">
            </div>
            <div class="mb-3">
              <label for="harga" class="form-label">Harga</label>
              <input type="text" name="harga" class="form-control" id="harga">
            </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
  </div>
@endsection