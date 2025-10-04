<?php

namespace App\Filament\Resources\Ejes;

use App\Filament\Resources\Ejes\Pages\CreateEje;
use App\Filament\Resources\Ejes\Pages\EditEje;
use App\Filament\Resources\Ejes\Pages\ListEjes;
use App\Filament\Resources\Ejes\Pages\ViewEje;
use App\Filament\Resources\Ejes\Schemas\EjeForm;
use App\Filament\Resources\Ejes\Schemas\EjeInfolist;
use App\Filament\Resources\Ejes\Tables\EjesTable;
use App\Models\Eje;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class EjeResource extends Resource
{
    protected static ?string $model = Eje::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'nombre';

    public static function form(Schema $schema): Schema
    {
        return EjeForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return EjeInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return EjesTable::configure($table);
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
            'index' => ListEjes::route('/'),
            'create' => CreateEje::route('/create'),
            'view' => ViewEje::route('/{record}'),
            'edit' => EditEje::route('/{record}/edit'),
        ];
    }
}
