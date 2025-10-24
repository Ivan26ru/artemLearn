<?php

$a = 4;
$b = 8;
if ($a * $b)
    $c = $a * $b;
    echo "Длина = $b\n <br>";
    echo "Ширина = $a\n <br>";
    echo "$a * $b = $c\n <br>";
    echo "S = $c\n <br>";




function calculateArea($width, $length)
    {
    return ($width * $length);
    }
$area = calculateArea(12, 9);
echo "S = $area\n <br>";


// Это не функция, пробовал как пример
$array = [
    [4, 6, 24]
];
foreach ($array as [$a, $b, $c]);
echo "Длина = $a\n <br>";
echo "Ширина = $b\n <br>";
echo "$a * $b = $c\n <br>";
echo "Площадь = $c\n <br>";