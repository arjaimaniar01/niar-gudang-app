<?php

namespace App\Filament\Resources\BarangMasuks\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class BarangMasukInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('kode_transaksi'),
                TextEntry::make('tipe_transaksi'),
                TextEntry::make('product_id')
                    ->numeric(),
                TextEntry::make('jumlah_masuk')
                    ->numeric(),
                TextEntry::make('harga_beli')
                    ->numeric(),
                TextEntry::make('harga_jual')
                    ->numeric(),
                TextEntry::make('supplier_id')
                    ->numeric(),
                TextEntry::make('keterangan')
                    ->placeholder('-'),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
