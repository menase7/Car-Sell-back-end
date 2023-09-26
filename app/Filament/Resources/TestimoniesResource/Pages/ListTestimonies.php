<?php

namespace App\Filament\Resources\TestimoniesResource\Pages;

use App\Filament\Resources\TestimoniesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTestimonies extends ListRecords
{
    protected static string $resource = TestimoniesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
