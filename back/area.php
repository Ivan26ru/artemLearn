<?php


function calculateArea($width, $length)
{
    $S = $width * $length;
    echo "Ширина=" . $width . "<br>";
    echo "Высота=" . $length . "<br>";
    echo "Площадь=" . $S . "<br>";
}

calculateArea(2, 4);
calculateArea(9, 5);