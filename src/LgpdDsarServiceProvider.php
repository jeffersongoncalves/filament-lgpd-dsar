<?php

namespace JeffersonGoncalves\Filament\LgpdDsar;

use JeffersonGoncalves\FilamentPluginCore\BasePackageServiceProvider;
use Spatie\LaravelPackageTools\Package;

class LgpdDsarServiceProvider extends BasePackageServiceProvider
{
    public static string $name = 'filament-lgpd-dsar';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasTranslations();
    }
}
