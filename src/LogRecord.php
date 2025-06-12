<?php

namespace Coreproc\LaravelCustomLogging;

class LogRecord extends \Monolog\LogRecord
{
    public function toArray(): array
    {
        $array = parent::toArray();
        return array_merge(['origin' => 'app.' . config('custom-logging.container_role')], $array);
    }
}
