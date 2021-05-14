<?php

namespace Soysaltan\Appender;

use Soysaltan\Appender\Commands\AppenderCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class AppenderServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('appender');
    }
}
