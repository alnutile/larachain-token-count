<?php

namespace SundanceSolutions\LarachainTokenCount;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use SundanceSolutions\LarachainTokenCount\Commands\LarachainTokenCountCommand;

class LarachainTokenCountServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('larachain-token-count')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_larachain-token-count_table')
            ->hasCommand(LarachainTokenCountCommand::class);
    }
}
