<?php

namespace App\Filament\Resources\KategoriumkmResource\Pages;

use App\Filament\Resources\KategoriumkmResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKategoriumkm extends EditRecord
{
    protected static string $resource = KategoriumkmResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
