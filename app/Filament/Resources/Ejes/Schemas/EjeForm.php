<?php

namespace App\Filament\Resources\Ejes\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class EjeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nombre')
                    ->required(),
                Textarea::make('descripcion')
                    ->columnSpanFull(),
            ]);
    }
}
