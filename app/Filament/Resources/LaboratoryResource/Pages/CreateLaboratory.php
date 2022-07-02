<?php

namespace App\Filament\Resources\LaboratoryResource\Pages;

use Illuminate\Support\Str;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\LaboratoryResource;

class CreateLaboratory extends CreateRecord
{
    protected static string $resource = LaboratoryResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['slug'] = Str::uuid();
        return $data;
    }
}
