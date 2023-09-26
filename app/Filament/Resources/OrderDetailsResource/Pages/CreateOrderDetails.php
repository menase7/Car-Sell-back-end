<?php

namespace App\Filament\Resources\OrderDetailsResource\Pages;

use App\Filament\Resources\OrderDetailsResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateOrderDetails extends CreateRecord
{
    protected static string $resource = OrderDetailsResource::class;
}
