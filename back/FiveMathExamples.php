<?php

function calculateWay($speed, $time)
{
    $Way = $speed * $time;
    echo "Скорость=$speed км/ч<br>";
    echo "Время=$time ч<br>";
    echo "Путь=$Way км<br>";
}
calculateWay(60, 12 );

// сумма геометрическое прогрессии(SGP-sum geometric progression)
function calculateSGP($b, $q)
{
    $SGP = $b * 1 - $b * $q / 1-$q;
    echo "b=$b<br>";
    echo "q=$q <br>";
    echo "SGM=$SGP <br>";
}
calculateSGP(40,50);

// куб разности = CD(cube difference)
function calculateCD($a, $b)
{
    $CD=$a*$a*$a-3*$a*$a*$b+3*$a*$b*$b-$b*$b*$b;
    echo "a=$a <br>";
    echo "b=$b <br>";
    echo "CD=$CD <br>";
}
calculateCD(8, 6);

// Тождество
function calculateIdentity($a, $b)
{
    $identity = $a * $a + 2 * $a * $b + $b * $b;
    echo "a=$a <br>";
    echo "b=$b <br>";
    echo "(a+b)^2=$identity <br>";
}
calculateIdentity(3, 5);

// Средняя линия трапеции (Middle line trapezoid)
function calculateMLT($a, $b)
{
    $l = $a + $b / 2;
    echo "a=$a <br>";
    echo "b=$b <br>";
    echo "l=$l <br>";
}
calculateMLT(4, 8);
