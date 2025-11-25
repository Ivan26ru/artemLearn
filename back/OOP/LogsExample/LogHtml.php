<?php

declare(strict_types=1);

namespace LogsExample;

require_once "LogInterface.php";

class LogHtml implements LogInterface
{

    public static function info(string $message): void
    {
        echo "<h1>" . $message . "</h1>";
    }
}