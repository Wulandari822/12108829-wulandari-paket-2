<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function penjualan()
    {
        return view('penjualan.penjualan');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function penjualanCreate()
    {
        return view('penjualan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function penjualanShow(Penjualan $penjualan)
    {
        return view('penjualan.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function penjualanEdit(Penjualan $penjualan)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Penjualan $penjualan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Penjualan $penjualan)
    {
        //
    }
}
