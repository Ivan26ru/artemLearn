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