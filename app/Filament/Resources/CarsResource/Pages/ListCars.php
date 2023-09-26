<?php

namespace App\Filament\Resources\CarsResource\Pages;

use App\Filament\Resources\CarsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCars extends ListRecords
{
    protected static string $resource = CarsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
