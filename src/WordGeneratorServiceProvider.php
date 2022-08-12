<?php

namespace Harsh\WordGenerator;

use Harsh\WordGenerator\Commands\WordGeneratorCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class WordGeneratorServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('word-generator')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_word-generator_table')
            ->hasCommand(WordGeneratorCommand::class);
    }
}
