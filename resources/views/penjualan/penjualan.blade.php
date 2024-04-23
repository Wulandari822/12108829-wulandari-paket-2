@extends('layout.main')

@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h4 mb-0 text-gray-900">Penjualan</h1>
</div>

<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
          
        @if (Auth::user()->role == 'admin')
            <a href="{{ route('penjualan.export.excel') }}" class="btn btn-danger mb-3">Export to Excel</a>
            @else
            <a href="{{ route('penjualan.tambah') }}" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Tambah Penjualan</a>
            @endif
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Pelanggan</th>
                    <th scope="col">Total Harga</th>
                    <th scope="col">Date</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                 @foreach ($penjualans as $key => $penjualan)
                  <tr>
                    <th>{{ $key + 1 }}</th>
                    <td>{{ $penjualan->pelanggan->nama_pelanggan }}</td>
                    <td>Rp {{ number_format($penjualan->total_harga, 2, ',', '.') }}</td>
                    <td>{{ $penjualan->tanggal_penjualan }}</td>
                    <td>
                       @if (Auth::user()->role == 'petugas')
                      <button type="button" onclick="window.location='{{ route('penjualan.detail', $penjualan->id) }}'" class="btn btn-info mb-2"><i class="fas fa-info-circle"></i> Detail</button>
                      <form action="{{  route('detail-penjualan-delete', $penjualan->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                      <a class="btn btn-danger"><i class="fas fa-trash-alt"></i> Hapus</a>
                      </form>
                      @endif
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>

@endsection