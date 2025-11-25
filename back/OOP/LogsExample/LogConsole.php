<?php

namespace LogsExample;

require_once "LogInterface.php";

class LogConsole implements LogInterface
{
    static string $drive = "---Консолька---";
    static string $VERSION = "1.0";
    static function info(string $message) : void
    {
        echo "Записали в ". self::$drive;
        echo "Логирование обычного сообщения".$message;
    }
}