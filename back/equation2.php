<?php

function calculateDiscriminant($a, $b, $c,)
{
    $D = $b * $b - 4 * $a * $c;
    echo "$D = $b * $b - 4 * $a * $c\n";
    echo "a=$a <br>";
    echo "b=$b <br>";
    echo "c=$c <br>";
    echo "D=$D <br>";
    echo "Корень из D=". sqrt(216) . "<br>";
}

function calculateRoot($a, $b, $D)
{
    $x1 = (-$b + $D) / 2 * $a;
    $x2 = (-$b - $D) / 2 * $a;
    echo "Целое из корня D=$D <br>";
    echo "x1=$x1 <br>";
    echo "x2=$x2 <br>";
}

calculateDiscriminant(-6, -12, 3);
calculateRoot(-6, -12, 15);