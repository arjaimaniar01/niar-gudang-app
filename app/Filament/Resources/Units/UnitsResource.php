<?php

namespace App\Filament\Resources\Units;

use App\Filament\Resources\Units\Pages\CreateUnits;
use App\Filament\Resources\Units\Pages\EditUnits;
use App\Filament\Resources\Units\Pages\ListUnits;
use App\Filament\Resources\Units\Pages\ViewUnits;
use App\Filament\Resources\Units\Schemas\UnitsForm;
use App\Filament\Resources\Units\Schemas\UnitsInfolist;
use App\Filament\Resources\Units\Tables\UnitsTable;
use App\Models\Units;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class UnitsResource extends Resource
{
    protected static ?string $model = Units::class;

    //setting navigation group
    protected static string|UnitEnum|null $navigationGroup = 'Master Data';
    protected static ?string $navigationLabel = 'Unit Produk';
    //end setting navigation group

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return UnitsForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return UnitsInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return UnitsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListUnits::route('/'),
            'create' => CreateUnits::route('/create'),
            'view' => ViewUnits::route('/{record}'),
            'edit' => EditUnits::route('/{record}/edit'),
        ];
    }
}
