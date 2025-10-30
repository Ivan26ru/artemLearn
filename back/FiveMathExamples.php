<?php

function calculateWay($speed, $time)
{
    $Way = $speed * $time;
    echo "Скорость=$speed км/ч<br>";
    echo "Время=$time ч<br>";
    echo "Путь=$Way км<br>";
}
calculateWay(60, 12 );
