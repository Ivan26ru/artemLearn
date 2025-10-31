<?php


function discriminant($a, $b, $c)
{
    $D = $b * $b - 4 * $a * $c;
    echo "D = $D <br>";
    return $D;
}
function calculateDiscriminant($a, $b, $c,)
{
    $D = discriminant($a, $b, $c);
    if ($D < 0) {
        echo "d меньше 0";
        echo "Действительных корней нет";
    } elseif ($D == 0){
        echo "d равно 0";
        echo "x1=3";
    } else {
        echo "d больше 0";
        echo "x= 1";
        echo "x= 2";
    }
echo "<br>";

}

calculateDiscriminant(1,2 ,1 );
calculateDiscriminant(4,1 ,1 );
calculateDiscriminant(1,4 ,1 );
