<?php

namespace AdevPmftc\LaravelCustomLogging;

use Monolog\LogRecord;
use Monolog\Processor\ProcessorInterface;

class AddOriginProcessor implements ProcessorInterface
{
    public function __invoke(LogRecord $record): array|LogRecord
    {
        return new \AdevPmftc\LaravelCustomLogging\LogRecord(
            $record->datetime,
            $record->channel,
            $record->level,
            $record->message,
            $record->context,
            $record->extra
        );
    }
}
