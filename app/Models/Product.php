<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'nama_kategori');
    }
    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'nama_supplier');
    }
    public function unit()
    {
        return $this->belongsTo(Units::class, 'nama_unit');
    }

    public function barangMasuk()
    {
        return $this->hasMany(BarangMasuk::class);
    }

    public function barangKeluar()
    {
        return $this->hasMany(BarangKeluar::class);
    }

    protected $fillable = [
        'sku',
        'barcode',
        'nama_kategori',
        'nama_supplier',
        'nama_unit',
        'nama_produk',
        'deskripsi',
        'gambar',
        'stock',
        'harga_beli',
        'harga_jual',   
        // tambahkan kolom lain jika ada (misal: 'keterangan' atau 'singkatan')
    ];
}
