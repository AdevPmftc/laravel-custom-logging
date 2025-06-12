<?php

namespace AdevPmftc\LaravelCustomLogging;

class LogRecord extends \Monolog\LogRecord
{
    public function toArray(): array
    {
        $array = parent::toArray();

        // Remove datetime
        unset($array['datetime']);

        // Add origin
        return array_merge(['origin' => 'app.' . config('custom-logging.container_role')], $array);
    }
}
