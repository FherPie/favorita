<?php

namespace App\Filament\Resources\Ejes\Pages;

use App\Filament\Resources\Ejes\EjeResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListEjes extends ListRecords
{
    protected static string $resource = EjeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
