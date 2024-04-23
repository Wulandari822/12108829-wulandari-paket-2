<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\DetailPenjualan;
use App\Models\Pelanggan;
use App\Models\penjualan;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PenjualanExport;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function search(Request $request)
    {
        $keyword = $request->search;
        $produks = Produk::where('nama_produk', 'like', "%" . $keyword . "%")->paginate(5);
        return view('produk.produk', compact('produks'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function produk()
    {
        $produks = Produk::all();
        return view('produk.produk', compact('produks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function produkCreate()
    {
        return view('produk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function produkStore(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required',
            'stok' => 'required',
            'harga' => 'required',
            'gambar' => 'required',

        ]);

        // $gambar = $request->file('gambar');
        // $gambar = time().'.'.$gambar->extension();
        // $gambar->move(public_path('uploads'), $gambar);

            Produk::create([
                'nama_produk' => $request->nama_produk,
                'stok' => $request->stok,
                'harga' => $request->harga,
                'gambar' => $request->gambar,
            ]);

        return redirect()->route('produk-admin');
    }

    /**
     * Display the specified resource.
     */
    public function show(Produk $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function produkEdit($id)
    {
        $produk = Produk::find($id);
        return view('produk.edit', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function produkUpdate(Request $request, $id)
    {
        $produk = Produk::where('id', $request->id)->update([
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
            'gambar' => $request->gambar,
        ]);

        return redirect()->route('produk-admin');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();

        return redirect()->route('produk-admin');
    }

    public function restokCreate($id)
    {
        $stok = Produk::findOrFail($id);
        return view('produk.restok', compact('stok'));
    }

    public function restokUpdate(Request $request, $id)
    {
        $produk = Produk::findOrFail($id);
        $produk->update([
            'stok' => $produk->stok + $request->stok
        ]);

        return redirect()->route('produk-admin');
    }


}
