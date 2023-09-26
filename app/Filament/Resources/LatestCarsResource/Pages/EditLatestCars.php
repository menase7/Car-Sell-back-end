<?php

namespace App\Filament\Resources\LatestCarsResource\Pages;

use App\Filament\Resources\LatestCarsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLatestCars extends EditRecord
{
    protected static string $resource = LatestCarsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
