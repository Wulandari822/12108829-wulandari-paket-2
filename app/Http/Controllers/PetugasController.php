<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetugasController extends Controller
{

    public function index()
    {
        return view('admin.index');
    }

    public function produk()
    {
        $produks = Produk::all();
        return view('produk.produk', compact('produks'));
    }

   
}
