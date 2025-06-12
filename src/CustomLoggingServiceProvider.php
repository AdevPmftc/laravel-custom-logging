<?php

namespace AdevPmftc\LaravelCustomLogging;

use Illuminate\Support\ServiceProvider;

class CustomLoggingServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        // Publish config file
        $this->publishes([
            __DIR__ . '/../config/custom-logging.php' => config_path('custom-logging.php'),
        ], 'custom-logging-config');
    }
}
