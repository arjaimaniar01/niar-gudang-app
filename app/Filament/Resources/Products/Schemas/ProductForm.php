<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('sku')
                    ->label('SKU')
                    ->required(),
                TextInput::make('barcode')
                    ->required(),
                Select::make('nama_kategori')
                    ->required()
                    ->relationship('kategori', 'nama_kategori'),
                Select::make('nama_supplier')
                    ->required()
                    ->relationship('supplier', 'nama_supplier'),
                Select::make('nama_unit')
                    ->required()
                    ->relationship('unit', 'nama_unit'),
                TextInput::make('nama_produk')
                    ->required(),
                Textarea::make('deskripsi')
                    ->columnSpanFull(),
                TextInput::make('gambar'),
                TextInput::make('stock')
                    ->required()
                    ->default('0'),
                TextInput::make('harga_beli')
                    ->required()
                    ->numeric(),
                TextInput::make('harga_jual')
                    ->required()
                    ->numeric(),
            ]);
    }
}
