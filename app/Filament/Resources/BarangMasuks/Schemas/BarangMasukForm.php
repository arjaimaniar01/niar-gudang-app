<?php

namespace App\Filament\Resources\BarangMasuks\Schemas;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class BarangMasukForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('kode_transaksi')
                    ->required(),
                TextInput::make('tipe_transaksi')
                    ->required(),
                Select::make('product_id')
                    ->required()
                    ->relationship('product', 'nama_produk'),
                TextInput::make('jumlah_masuk')
                    ->required()
                    ->numeric(),
                TextInput::make('harga_beli')
                    ->required()
                    ->numeric(),
                TextInput::make('harga_jual')
                    ->required()
                    ->numeric(),
                Select::make('supplier_id')
                    ->required()
                    ->relationship('supplier', 'nama_supplier'),
                TextInput::make('keterangan'),
            ]);
    }
}
