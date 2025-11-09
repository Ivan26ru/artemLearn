<form action="#" method="get">
    <input name="a" placeholder="Значение A">
    <input name="b" placeholder="Значение B">
    <input name="c" placeholder="Значение C">
    <button type="submit">Отправить</button>
</form>

<?php

//https://student/back/get.php?a=аппельсин&b=55
//array(2) { ["a"]=> string(18) "аппельсин" ["b"]=> string(2) "55" }
if (isset($_GET['a']) && isset($_GET['b']) && isset($_GET['c'])) {
    echo "Значение а,b,c что-то считаем<br>";
    calculateDiscriminant($_GET['a'], $_GET['b'], $_GET['c']);
} else {
    echo '<label> Поле «Значений A,B,C» не должно быть пустым  <br> </label> <style> label{ color: red; } input{border: 1px solid red}</style>';
}
if (isset($_GET['a'])){
    echo '<label>Поле a, пустое<br></label> <style> label{ color: red; } input:nth-child(1){border: 1px solid red}</style>';
}
if (isset($_GET['b'])){
    echo '<label>Поле b, пустое<br></label> <style> label{ color: red; } input:nth-child(2){border: 1px solid red}</style>';
}
if (isset($_GET['c'])){
    echo '<label>Поле c, пустое<br></label> <style> label{ color: red; } input:nth-child(3){border: 1px solid red}</style>';
}
//if ($a == null) {
//    echo '<label> Поле «Значений A,B,C» не должно быть пустым  <br> </label> <style> label{ color: red; } input{border: 1px solid red}</style>';
//} elseif ($b == null) {
//    echo '<label> Поле «Значений A,B,C» не должно быть пустым  <br> </label> <style> label{ color: red; } input{border: 1px solid red}</style>';
//} elseif ($c == null) {
//    echo '<label> Поле «Значений A,B,C» не должно быть пустым  <br> </label> <style> label{ color: red; } input{border: 1px solid red}</style>';
//}
//if (!isset($_GET['a'])) {
//    echo '<label> Поле «Значений A» не должно быть пустым  <br> </label> <style> label{ color: red; } input:nth-child(1){border: 1px solid red}</style>';
//}
//if ($b != 0 ){
//    echo '<label> Поле «Значений B» не должно быть пустым  <br> </label> <style> label{ color: red; } input:nth-child(2){border: 1px solid red}</style>';
//}
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
