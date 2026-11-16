<?php

namespace JeffersonGoncalves\Filament\LgpdDsar;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LgpdDsarServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-lgpd-dsar')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigrations();
    }
}
