<?php

namespace App\Filament\Resources\OrderDetailsResource\Pages;

use App\Filament\Resources\OrderDetailsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOrderDetails extends ListRecords
{
    protected static string $resource = OrderDetailsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
