<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use illuminate\Database\Eloquent\Relations\BelongsTo;

class BarangMasuk extends Model
{
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
     protected $fillable = [
        'id_transaksi',
        'tipe_transaksi',
        'nama_produk',
        'jumlah_masuk',
        'harga_beli',
        'harga_jual',  
        'nama_supplier',
        'keterangan',
        // tambahkan kolom lain jika ada (misal: 'keterangan' atau 'singkatan')
    ];
}
