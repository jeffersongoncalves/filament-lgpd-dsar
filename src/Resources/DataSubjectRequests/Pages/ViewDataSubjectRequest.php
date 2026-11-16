<?php

namespace JeffersonGoncalves\Filament\LgpdDsar\Resources\DataSubjectRequests\Pages;

use Filament\Resources\Pages\ViewRecord;
use JeffersonGoncalves\Filament\LgpdDsar\Actions\DsarActions;
use JeffersonGoncalves\Filament\LgpdDsar\Resources\DataSubjectRequests\DataSubjectRequestResource;

class ViewDataSubjectRequest extends ViewRecord
{
    protected static string $resource = DataSubjectRequestResource::class;

    protected function getHeaderActions(): array
    {
        return DsarActions::all();
    }
}
