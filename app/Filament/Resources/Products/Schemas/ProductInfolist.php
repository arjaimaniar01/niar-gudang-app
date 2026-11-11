<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class ProductInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('sku')
                    ->label('SKU'),
                TextEntry::make('barcode'),
                TextEntry::make('kategori_id')
                    ->numeric(),
                TextEntry::make('supplier_id')
                    ->numeric(),
                TextEntry::make('unit_id')
                    ->numeric(),
                TextEntry::make('nama_produk'),
                TextEntry::make('deskripsi')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('gambar')
                    ->placeholder('-'),
                TextEntry::make('stock'),
                TextEntry::make('harga_beli')
                    ->numeric(),
                TextEntry::make('harga_jual')
                    ->numeric(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
