<?php

namespace Iskandarali\MykadValidation;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Iskandarali\MykadValidation\Commands\MykadValidationCommand;

class MykadValidationServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-mykad-validation')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-mykad-validation_table')
            ->hasCommand(MykadValidationCommand::class);
    }
}
