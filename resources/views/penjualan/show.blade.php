@extends('layout.main')

@section('content')
<a href="" class="btn btn-warning"><i class="fas fa-edit"></i> Cetak PDF</a>
<div class="body-struk">
<div class="container-struk">
    <div class="header-struk">
        <h1>STRUK PEMBELIAN</h1>
        <p>Tanggal: </p>
    </div>
    <div class="content-struk">
        <p>Kasir: </p>
        <table class="table-struk">
            <thead>
                <tr>
                    <th class="th-struk">Nama Produk</th>
                    <th class="th-struk">Jumlah</th>
                    <th class="th-struk">Harga</th>
                    <th class="th-struk">Sub Total</th>
                </tr>
            </thead>
            <tbody>
                
                    <tr>
                        <td class="td-struk">Mie</td>
                        <td class="td-struk">2</td>
                        <td class="td-struk">2.000</td>
                        <td class="td-struk">4.000</td>
                    </tr>
               
            </tbody>
        </table>
    </div>
    <div class="footer-struk">
        <p>Total: </p>
        <p>Terima kasih telah berbelanja.</p>
    </div>
</div>
</div>

@endsection