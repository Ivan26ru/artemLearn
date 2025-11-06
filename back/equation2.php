<?php


function discriminant($a, $b, $c)
{
    $D = $b * $b - 4 * $a * $c;
    echo "D = $D <br>";
    return $D;
}

function calculateDiscriminant($a, $b, $c)
{
    $D = discriminant($a, $b, $c);
    if ($D < 0) {
        echo "D меньше 0 <br>";
        echo "Действительных корней нет<br>";
    } elseif ($D == 0) {
        echo "D равно 0 <br>";
        $x1 = -$b / 2 * $a;
        echo "x1=" . $x1 . "<br>";
    } else {
        echo "D больше 0<br>";
        $x1 = -$b + sqrt($D) / 2 * $a;
        $x2 = -$b - sqrt($D) / 2 * $a;
        echo "x1=" . $x1 . "<br>";
        echo "x2=" . $x2 . "<br>";
    }
    echo "<br>";

}

calculateDiscriminant(1, 2, 1);
calculateDiscriminant(4, 1, 1);
calculateDiscriminant(1, 4, 1);
