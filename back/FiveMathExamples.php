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
function calculateSumGeometricProgression($b, $q)
{
    $SGP = $b * 1 - $b * $q / 1-$q;
    echo "b=$b<br>";
    echo "q=$q <br>";
    echo "SGM=$SGP <br>";
}
calculateSumGeometricProgression(40,50);

// куб разности
function calculateCubeDifference($a, $b)
{
    $CD=$a*$a*$a-3*$a*$a*$b+3*$a*$b*$b-$b*$b*$b;
    echo "a=$a <br>";
    echo "b=$b <br>";
    echo "CD=$CD <br>";
}
calculateCubeDifference(8, 6);

// Тождество
function calculateIdentity($a, $b)
{
    $identity = $a * $a + 2 * $a * $b + $b * $b;
    echo "a=$a <br>";
    echo "b=$b <br>";
    echo "(a+b)^2=$identity <br>";
}
calculateIdentity(3, 5);

// Средняя линия трапеции
function calculateMiddleLineTrapezoid($a, $b)
{
    $l = $a + $b / 2;
    echo "a=$a <br>";
    echo "b=$b <br>";
    echo "l=$l <br>";
}
calculateMiddleLineTrapezoid(4, 8);
