<?php

namespace JeffersonGoncalves\Filament\LgpdDsar\Tests\Fixtures;

use Filament\Panel;
use Filament\PanelProvider;
use JeffersonGoncalves\Filament\LgpdDsar\LgpdDsarPlugin;

class TestPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->plugins([
                LgpdDsarPlugin::make(),
            ]);
    }
}
