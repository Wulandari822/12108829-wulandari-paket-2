@extends('layout.main')

@section('content')
    <button id="printButton" class="btn btn-sm btn-success"><i class="fas fa-print"></i> Print</button>
    <div  class="body-struk">
        <div id="struk" class="container-struk">
            @foreach ($penjualan as $i)

            <div class="header-struk">
                <h1>STRUK PEMBELIAN</h1>
                <p>{{$i->created_at}}</p>
            </div>
            <div class="content-struk">
            <p>Nama Pelanggan:   {{$i->penjualan->pelanggan->nama_pelanggan}}</p>
            <p>Alamat: {{$i->penjualan->pelanggan->alamat}}</p>
            <p>No. Telp: {{$i->penjualan->pelanggan->nomor_telepon}}</p>
            @endforeach
                <table class="table-struk">
                    <thead>
                        <tr>
                            <th class="th-struk">Nama Produk</th>
                            <th class="th-struk">Jumlah</th>
                            <th class="th-struk">Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($penjualan as $penjualan)
                            <tr>
                                <td class="text-center">{{ $penjualan->produk->nama_produk }}</td>
                                <td class="text-center">{{ $penjualan->jumlah_produk }}</td>
                                <td class="text-center">
                                {{ $penjualan->produk->harga }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="footer-struk">
                <p>Total: Rp.{{ number_format($penjualan->sub_total, 0, ',', '.') }}</p>
                <p>Terima kasih telah berbelanja.</p>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
			const button = document.getElementById('printButton');

			function generatePDF() {
				const element = document.getElementById('struk');
				html2pdf().from(element).save();
			}

			button.addEventListener('click', generatePDF);
		</script>
@endsection
