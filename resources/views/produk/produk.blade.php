@extends('layout.main')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h4 mb-0 text-gray-900">Produk</h1>
</div>
<div class="card shadow mb-4">
  <div class="card-body">
      <div class="table-responsive">
      <form class="form" method="get" action="{{ route('search-produk') }}">
    <div class="form-group mb-3" style="width: 25%; margin-left:70%;">
        <label for="search" class="d-block mr-2">Pencarian</label>
        <input type="text"  name="search" class="form-control w-75 d-inline" id="search" placeholder="Masukkan keyword">
        <button type="submit" class="btn btn-primary mb-1">Cari</button>
    </div>
      @if (Auth::user()->role == 'admin')
          <a href="{{  route('produk-create')  }}"  class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Tambah Produk</a>
      @endif
          <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Gambar</th>
                  <th scope="col">Nama Produk</th>
                  <th scope="col">Harga</th>
                  <th scope="col">Stok</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($produks as $produk)
                <tr>
                  <th>{{ $loop->iteration }}</th>
                  <td>{{ $produk->gambar }}</td>
                  <td>{{ $produk->nama_produk }}</td>
                  <td>Rp.{{ number_format($produk->harga, 0, ',', '.') }}</td>
                  <td>{{ $produk->stok }}</td>
                  @if (Auth::user()->role == 'admin')
                  <td><a href="{{  route('produk-edit', $produk->id) }}" class="btn btn-warning"><i class="fas fa-edit"></i> Edit</a>
                    <a href="{{  route('stok-create', $produk->id) }}" class="btn btn-warning"><i class="fas fa-edit"></i> Restok</a>
                      <a href="{{  route('produk-delete', $produk->id) }}" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Hapus</a>
                  </td>
                  @endif
                </tr>
                        </form>
                    </div>
                </div>
            </div>
                @endforeach
              </tbody>
            </table>
      </div>
  </div>
</div>
@endsection