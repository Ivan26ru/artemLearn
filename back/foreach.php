<?php

$array = [1, 2, 3, 17];
foreach ($array as $value) {
    echo "Значение текущего элемента массива \$array: $value.\n";
}

$array = [
    "one" => 1,
    "two" => 2,
    "three" => 3,
    "seventeen" => 17
];
foreach ($array as $key => $value) {
    echo "Ключ: $key =>Значение: $value.\n";
}

$grid = [];
$grid[0][0] = "a";
$grid[0][1] = "b";
$grid[1][0] = "y";
$grid[1][1] = "z";

foreach ($grid as $y => $row) {
    foreach ($row as $x => $value) {
        echo "Значение на позиции x=$x и y=$y: $value\n";
    }
}

foreach (range(1, 10) as $value) {
    echo "$value\n";
}