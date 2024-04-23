<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use App\Models\Pelanggan;
use App\Models\DetailPenjualan;
use App\Models\Produk;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PenjualanExport;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function penjualan()
    {
        $penjualans = Penjualan::all();
        return view('penjualan.penjualan', compact('penjualans'));
    }

    public function tambahPenjualan()
    {
        $produks = Produk::all();
        return view('penjualan.form', compact('produks'));
    }

    public function simpanPenjualan(Request $request)
    {
        $request->validate([
            'nama_pelanggan'=> 'required',
            'alamat'=> 'required',
            'nomor_telepon'=> 'required',
            'tanggal_penjualan'=> 'required',
            'produk_id'=> 'required',
            'jumlah_produk' => 'required',
        ]);
    
        $pelanggan = Pelanggan::create([
            'nama_pelanggan' => $request->nama_pelanggan, // Perbaiki di sini
            'alamat' => $request->alamat,
            'nomor_telepon' => $request->nomor_telepon,
        ]);  
        
        $penjualan = Penjualan::create([
            'pelanggan_id' => $pelanggan->id, // Menggunakan ID pelanggan yang baru saja dibuat
            'tanggal_penjualan' => $request->tanggal_penjualan,
        ]);
    
        $totalHarga = 0;
        for ($i = 0; $i < count($request->produk_id); $i++) {
            $produk = Produk::findOrFail($request->produk_id[$i]);
            $subtotal = $produk->harga * $request->jumlah_produk[$i];
            $detailPenjualan = DetailPenjualan::create([
                'penjualan_id' => $penjualan->id,
                'produk_id' => $request->produk_id[$i],
                'jumlah_produk' => $request->jumlah_produk[$i],
                'sub_total' => $subtotal,
            ]);
    
            $totalHarga += $subtotal;
        }
    
        $penjualan->update(['total_harga' => $totalHarga]); // Menyimpan total harga yang telah dihitung
        return redirect()->route('penjualan');
    }
    
    public function detailPenjualan($id)
    {
        $penjualan = DetailPenjualan::where('penjualan_id', $id)->get();
        return view('penjualan.show', compact('penjualan'));
    }

    public function deleteDetailPenjualan($id){
        $detailPenjualan = DetailPenjualan::findOrFail($id);
        $detailPenjualan->delete();

        return redirect()->route('penjualan');
    }

    
}
