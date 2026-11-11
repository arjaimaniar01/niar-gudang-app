<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class units extends Model
{
    use HasFactory;

    // Daftarkan kolom tabel units yang boleh diisi
    protected $fillable = [
        'nama_unit',
        'symbol_unit',
        // tambahkan kolom lain jika ada (misal: 'keterangan' atau 'singkatan')
    ];
}
