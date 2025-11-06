<?php

// Целые числа
echo 1 <=> 1, '<br>'; // 0
echo 1 <=> 2, '<br>'; // -1
echo 2 <=> 1, '<br>'; // 1

// Числа с плавающей точкой
echo 1.5 <=> 1.5, '<br>'; // 0
echo 1.5 <=> 2.5, '<br>'; // -1
echo 2.5 <=> 1.5, '<br>'; // 1

// строки
echo "a" <=> "a", '<br>'; // 0
echo "a" <=> "b", '<br>'; // -1
echo "b" <=> "a", '<br>'; // 1
echo "a" <=> "aa", '<br>'; // -1
echo "zz" <=> "aa", '<br>'; // 1

// массивы
echo [] <=> [], '<br>'; // 0
echo [1,2,3] <=> [1, 2, 3], '<br>'; // 0
echo [1, 2, 3] <=> [], '<br>'; // 1
echo [1, 2, 3] <=> [1, 2, 1], '<br>'; // 1
echo [1, 2, 3] <=> [1, 2, 4], '<br>'; // -1

// Объекты
$a = (object) ["a" => "b"];
$b = (object) ["a" => "b"];
echo $a <=> $b, '<br>'; // 0

$a = (object) ["a" => "b"];
$b = (object) ["a" => "c"];
echo $a <=> $b, '<br>'; // -1

$a = (object) ["a" => "c"];
$b = (object) ["a" => "b"];
echo $a <=> $b, '<br>'; // 1

// Сравниваются не только значения; ключи тоже должны совпадать
$a = (object) ["a" => "b"];
$b = (object) ["b" => "b"];
echo $a <=> $b, '<br>'; // 1

// Логические значения и null сравниваются как логические
var_dump(1 == true); // TRUE  — то же, что и (bool) 1 == TRUE
var_dump(0 == false); // TRUE  — то же, что и (bool) 0 == FALSE
var_dump(100 < TRUE); // FALSE  — то же, что и (bool) 100 < TRUE
var_dump(-10 < FALSE); // FALSE  — то же, что и (bool) -10 < FALSE
var_dump(min(-100, -10, NULL, 10, 100)); // NULL  — (bool) NULL < (bool) -100 это FALSE < TRUE

// Массивы сравниваются как в этом примере — со стандартными операторами сравнения, и оператором «космический корабль» (spaceship).
function standard_array_compare($op1, $op2)
{
    if (count($op1) < count($op2)) {
        return -1; // $op1 < $op2
    } elseif (count($op1) > count($op2)) {
        return 1; // $op1 > $op2
    }
    foreach ($op1 as $key => $value) {
        if (!array_key_exists($key, $op2)) {
            return 1;
        } elseif ($value < $op2[$key]) {
            return -1;
        } elseif ($value > $op2[$key]) {
            return 1;
        }
    }
    return 0; // $op1 == $op2
}

// Пример выражения с тернарным оператором
$action = (empty($_POST['action'])) ? 'default' : $_POST['action'];
// Код выше аналогичен блоку с конструкциями if/else
if (empty($_POST['action'])) {
    $action = 'default';
} else {
    $action = $_POST['action'];
}

// Кажется, что следующий код выведет "true"
// echo (true ? 'true' : false ? 't' : 'f');

// Однако код выводит "t" до PHP 8.0.0.
// Причина состоит в том, что тернарные выражения левоассоциативны

// Следующая запись — более очевидная версия приведённого кода
echo ((true ? 'true' : false) ? 't' : 'f');
// Здесь видно, что первое выражение оценивается как строковое "true", которое
// оценивается как логическое (bool) true, поэтому возвращает истинную ветвь
// второго тернарного выражения

echo 0 ?: 1 ?: 2 ?: 3, PHP_EOL . "<br>"; // 1
echo 0 ?: 0 ?: 2 ?: 3, PHP_EOL . "<br>"; // 2
echo 0 ?: 0 ?: 0 ?: 3, PHP_EOL . "<br>"; // 3

// Пример работы с оператором нулевого слияния
$action = $_POST['action'] ?? 'default';

// Пример выше аналогичен этому выражению с if/else

if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else {
    $action = 'default';
}

$name = "";
// Вызывает предупреждение о том, что переменную $name не определили
print 'Mr.' . $name ?? 'Anonymous';

// Выведет "Mr. Anonymous"
print 'Mr. ' . ($name ?? 'Anonymous');


$foo = null;
$bar = null;
$baz = 1;
$qux = 2;
echo $foo ?? $bar ?? $baz ?? $qux; // Выведет 1


// --------------------
// Функция foo() никогда не будет вызвана, т. к. эти операторы шунтирующие (short-circuit)
$a = (false && foo());
$b = (true && foo());
$c = (false && foo());
$d = (true && foo());

// --------------------
// У оператора «||» больший приоритет, чем у «or»

// Результат выражения (false || true) присваивается переменной $e
// Действует как: ($e = (false || true))

$e = false || true;

// Константа false присваивается переменной $f, а затем значение true игнорируется
// Действует как: (($f = false) or true)

$f = false or true;

var_dump($e, $f);

// --------------------
// У оператора «&&» больший приоритет, чем у «and»

// Результат выражения (true && false) присваивается переменной $g
// Действует как: ($g = (true && false))
$g = true && false;

// Константа true присваивается переменной $h, а затем значение false игнорируется
// Действует как: (($h = true) and false)

$h = true and false;
var_dump($g, $h);

