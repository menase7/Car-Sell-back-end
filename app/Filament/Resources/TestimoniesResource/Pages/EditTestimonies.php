<?php

namespace App\Filament\Resources\TestimoniesResource\Pages;

use App\Filament\Resources\TestimoniesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTestimonies extends EditRecord
{
    protected static string $resource = TestimoniesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
