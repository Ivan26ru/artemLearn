<?php

$a = 14;

if ($a > 0) {

    if ($a > 10) {
        echo "a больше 10";
    } else {
        echo "а больше 0, но меньше 10";
    }

} else {
    echo "a не больше 0";
}

echo "<br>";

$b = 2;
if ($b < 0) {
    echo "b меньше 0";
} elseif ($b == 0) {
    echo "b равно 0";
} elseif ($b == 1) {
    echo "b равно 1";
} else {
    echo "b больше 1";
}



