<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;

class HelperServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
        $recDriIterator = new RecursiveDirectoryIterator(app_path('Helpers' . DIRECTORY_SEPARATOR . 'Global'));
        $iterator = new RecursiveIteratorIterator($recDriIterator);

        while ($iterator->valid()) {
            if (
                !$iterator->isDot() &&
                $iterator->isFile() &&
                $iterator->isReadable() &&
                $iterator->current()->getExtension() === 'php' &&
                strpos($iterator->current()->getFilename(), 'Helper')
            ) {
                require $iterator->key();
            }

            $iterator->next();
        }
    }
}
