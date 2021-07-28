<?php

namespace Iskandarali\MykadValidation\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Iskandarali\MykadValidation\MykadValidationServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Iskandarali\\MykadValidation\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            MykadValidationServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        include_once __DIR__.'/../database/migrations/create_laravel-mykad-validation_table.php.stub';
        (new \CreatePackageTable())->up();
        */
    }
}
