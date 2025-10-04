<?php

namespace App\Filament\Resources\Ejes\Pages;

use App\Filament\Resources\Ejes\EjeResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditEje extends EditRecord
{
    protected static string $resource = EjeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
