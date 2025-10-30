<?php

function calculateWay($speed, $time)
{
    $Way = $speed * $time;
    echo "Скорость=$speed км/ч<br>";
    echo "Время=$time ч<br>";
    echo "Путь=$Way км<br>";
}
calculateWay(60, 12 );

// сумма геометрическое прогрессии
function calculateSGM($b, $q)
{
    $SGM = $b * 1 - $b * $q / 1-$q;
    echo "b=$b<br>";
    echo "q=$q <br>";
    echo "SGM=$SGM <br>";
}
calculateSGM(40,50);

