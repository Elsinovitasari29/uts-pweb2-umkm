<?php

namespace App\Filament\Resources\KategoriumkmResource\Pages;

use App\Filament\Resources\KategoriumkmResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKategoriumkms extends ListRecords
{
    protected static string $resource = KategoriumkmResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
