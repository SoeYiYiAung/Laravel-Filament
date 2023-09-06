<?php

namespace App\Filament\Resources\StaffResource\Pages;

use App\Filament\Resources\StaffResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageStaff extends ManageRecords
{
    protected static string $resource = StaffResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
