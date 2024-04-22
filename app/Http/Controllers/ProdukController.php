<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function produk()
    {
        return view('produk.produk');
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
    public function produkstore(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function produkStok(Produk $produk)
    {
        return view('produk.stok');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function produkEdit(Produk $produk)
    {
        return view('produk.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produk $produk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produk $produk)
    {
        //
    }
}
