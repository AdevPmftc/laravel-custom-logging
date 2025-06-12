# Laravel Custom Logging

This package provides us with an additional `origin` variable for logs to determine the source of the log.

## Installation

You can install the package via composer:

```bash
composer require adevpmftc/laravel-custom-logging
```

Publish the config file:

```bash
php artisan vendor:publish --provider="AdevPmftc\LaravelCustomLogging\CustomLoggingServiceProvider"
```

## Usage

Typically, we use this in the `stderr` channel. Here is an example of the configuration:

```php
'channels' => [
    'stderr' => [
        'driver' => 'monolog',
        'level' => env('LOG_LEVEL', 'debug'),
        'handler' => StreamHandler::class,
        'formatter' => Monolog\Formatter\JsonFormatter::class,
        'formatter_with' => [
            'includeStacktraces' => true,
            'batchMode' => Monolog\Formatter\JsonFormatter::BATCH_MODE_JSON,
            'appendNewline' => true,
        ],
        'with' => [
            'stream' => 'php://stderr',
        ],
        'processors' => [\AdevPmftc\LaravelCustomLogging\AddOriginProcessor::class],
    ],
],
```
