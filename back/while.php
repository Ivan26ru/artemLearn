<?php
echo "Это циклы <br>";

$i = 1;

echo "<ol>";
while ($i <= 0) {
echo "<li> элемент №" . $i . "</li>" ;
    $i++;
}
echo "</ol>";

$i = 1;

do {
    echo "do while" . $i;
} while ($i <= 0);

for ($i = 1; $i <= 10; $i++) {
    echo $i;
}


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