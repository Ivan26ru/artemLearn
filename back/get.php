<form action="#" method="get">
    <input name="a">
    <input name="b">
    <input name="c">
    <button type="submit">Отправить</button>
</form>

<?php


//https://student/back/get.php?a=аппельсин&b=55
//array(2) { ["a"]=> string(18) "аппельсин" ["b"]=> string(2) "55" }

var_dump($_GET);

if (
    isset($_GET['a'])
    && isset($_GET['b'])
    && isset($_GET['c'])
) {
    echo "Значение а,b,c что-то считаем<br>";
calculateDiscriminant($_GET['a'], $_GET['b'], $_GET['c']);

} else {
    echo "Значения а,b,c отсутствует<br>";
}

function discriminant($a, $b, $c)
{
    $D = $b * $b - 4 * $a * $c;
    echo "D = $D <br>";
    return $D;
}

function calculateDiscriminant($a, $b, $c)
{
    echo 'a=' . $a . "<br>";
    echo 'b=' . $b . "<br>";
    echo 'c=' . $c . "<br>";
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

