<?php

namespace App\Filament\Resources\Ejes\Pages;

use App\Filament\Resources\Ejes\EjeResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewEje extends ViewRecord
{
    protected static string $resource = EjeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
