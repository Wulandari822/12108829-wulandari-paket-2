@extends('layout.main')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h4 mb-0 text-gray-900">Tambah Produk</h1>
    </div>

    <div class="container-fluid">
        <form action="{{ route('stok-update', $stok->id) }}" method="POST">
          @csrf
            <div class="mb-3">
              <label for="nama_produk" class="form-label">Nama</label>
              <input type="text" name="nama_produk" class="form-control" id="nama_produk" value="{{ $stok->nama_produk }}" readonly>
            </div>
            <div class="mb-3">
                <label for="stok" class="form-label">Stok</label>
                <input type="text" name="stok" class="form-control" id="stok" value="{{ $stok->stok }}" >
              </div>
              <div class="card-footer">
                @if (Auth::user()->role == 'admin')
                    <a href="{{ route('produk-admin') }}">
                        <button type="button" class="btn btn-secondary"
                            style="float: left">Kembali</button>
                    </a>
                    <button type="submit" class="btn btn-primary" style="float: right">Submit</button>
                @endif
            </div>
          </form>
    </div>
@endsection