<form action="#" method="get">
    <input name="a" placeholder="Значение A"
            <?php if (!validateFieldByKey('a')) { ?>
                style="border-color:red"
            <?php } ?>
    >
    <input name="b" placeholder="Значение B"
            <?php if (!validateFieldByKey('b')) { ?>
                style="border-color:red"
            <?php } ?>
    >
    <input name="c" placeholder="Значение C"
            <?php if (!validateFieldByKey('c')) { ?>
                style="border-color:red"
            <?php } ?>
    >
    <input name="hasCalculated" value="1">
    <button type="submit">Отправить</button>
    <!--    <button type="reset">Сбросить</button>-->
    <a href="/back/get.php">Сбросить</a>
</form>

<?php

function validateFieldByKey($key): bool
{
    if (isset($_GET['hasCalculated'])) {
        return isset($_GET[$key]) && !empty($_GET[$key]);
    } else {
        return true;
    }
}

if (!isset($_GET['a'])) {
    echo 'А не заполнено<br>';
}

if (isset($_GET['hasCalculated']) && validateFieldByKey('a') && validateFieldByKey('b') && validateFieldByKey('c')) {
    calculateDiscriminant($_GET['a'], $_GET['b'], $_GET['c']);
}
var_dump($_GET);


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
