<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPenjualan extends Model
{
    use HasFactory;

    protected $table = ['detail_penjualans'];

    protected $fillable = ['penjualan_id', 'produk_id', 'jumlah_produk', 'sub_total'];

    public function pelanggan(){
        return $this->hasOne(Pelanggan::class);
    }

    public function penjualan(){
        return $this->belongsTo(Penjualan::class);
    }

    public function produk(){
        return $this->belongsTo(Produk::class);
    }
}
