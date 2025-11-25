<?php

declare(strict_types=1);

namespace LogsExample;

interface LogInterface
{
    public static function info(string $message): void;
}
