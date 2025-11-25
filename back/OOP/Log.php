<?php

class Log
{
    static string $drive = "Текстовый файл";
    static string $VERSION = "1.0";
    static function info(string $message) : void
    {
        echo "Записали в ". self::$drive;
        echo "Логирование обычного сообщения".$message;
    }
    static function error(string $message) : void
    {
        echo "Логирование сообщение об ошибке". $message;
    }
}
echo Log::$VERSION;
Log::info("Привет");
Log::error("Ошибка");