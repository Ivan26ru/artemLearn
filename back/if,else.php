<?php

$a = 4;
$b = 2;

if ($a > $b);
    echo "a больше b";

if ($a > $b) {
    echo "a больше b";
    $b = $a;
}

if ($a > $b) {
    echo "a больше b";
} else {
    echo "a не больше b";
}

$a = false;
$b = true;
if ($a)
    if ($b)
        echo "b";
    else
        echo "c";