<?php

namespace App\Filament\Resources\SimCardResource\Pages;

use App\Filament\Resources\SimCardResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageListSimCards extends ManageRecords
{
    protected static string $resource = SimCardResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->modalWidth('md'),
        ];
    }
}
