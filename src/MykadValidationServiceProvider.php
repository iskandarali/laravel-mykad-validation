<?php

namespace Iskandarali\MykadValidation;

use Iskandarali\MykadValidation\Commands\MykadValidationCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
            ->name('laravel-mykad-validation');
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/mykadRules'),
        ]);

        $this->loadTranslationsFrom(__DIR__.'/../resources/lang/', 'mykadRules');
    }
}
