@extends('layout.main')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h4 mb-0 text-gray-900">Tambah Penjualan</h1>
</div>
    <div class="container-fluid">
        <form action="" method="POST">
            <div class="mb-3">
              <label for="nama_pelanggan" class="form-label">Nama Pelanggan</label>
              <input type="text" name="nama_pelanggan" class="form-control" id="nama_pelanggan">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" name="alamat" class="form-control" id="alamat">
              </div>
            <div class="mb-3">
              <label for="nomor_telepon" class="form-label">Nomor Telepon</label>
              <input type="number" name="nomor_telepon" class="form-control" id="nomor_telepon">
            </div>
            <div class="form-group">
                <label for="tanggal_penjualan">Tanggal</label>
                <input type="date" class="form-control" id="tanggal_penjualan" name="tanggal_penjualan">
            </div>
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    Produk
                </h6>
            </div>
            <div class="card-body" id="penjualanForm">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="produk_id">Produk</label>
                            <select class="form-control" id="produk_id" name="produk_id[]" required>
                                <option value="">Pilih Produk</option>
                                
                                    <option value="$produk_id">nama_produk</option>
                               
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="jumlah_produk">Jumlah Beli</label>
                            <input type="number" class="form-control" id="jumlah_produk" name="jumlah_produk" required>
                        </div>
                    </div>
                </div>
            </div>
            <button type="button" class="btn btn-primary" id="addpenjualanItem"><i class="fas fa-plus"></i> Item</button>

            <script>
                document.getElementById('addpenjualanItem').addEventListener('click', function() {
                    var penjualanForm = document.getElementById('penjualanForm');
                    var newpenjualanItem = penjualanForm.cloneNode(true);
                    penjualanForm.parentNode.insertBefore(newpenjualanItem, this);
                });
            </script>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection