<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use illuminate\Database\Eloquent\Factories\HasFactory;

class Supplier extends Model
{
    use HasFactory;

     public function barangMasuk()
    {
        return $this->hasMany(BarangMasuk::class);
    }

    public function barangKeluar()
    {
        return $this->hasMany(BarangKeluar::class);
    }

    protected $fillable = [
        'nama_supplier',
        'no_telp',
        'alamat',
        'email',
        'notes',
        // tambahkan kolom lain jika ada (misal: 'keterangan' atau 'singkatan')
    ];
}
