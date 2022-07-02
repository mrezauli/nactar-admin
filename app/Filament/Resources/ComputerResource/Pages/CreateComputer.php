<?php

namespace App\Filament\Resources\ComputerResource\Pages;

use Illuminate\Support\Str;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\ComputerResource;

class CreateComputer extends CreateRecord
{
    protected static string $resource = ComputerResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['slug'] = Str::uuid();
        return $data;
    }
}