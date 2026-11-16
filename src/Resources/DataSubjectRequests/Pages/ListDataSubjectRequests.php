<?php

namespace JeffersonGoncalves\Filament\LgpdDsar\Resources\DataSubjectRequests\Pages;

use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use JeffersonGoncalves\Filament\LgpdDsar\Resources\DataSubjectRequests\DataSubjectRequestResource;

class ListDataSubjectRequests extends ListRecords
{
    protected static string $resource = DataSubjectRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
