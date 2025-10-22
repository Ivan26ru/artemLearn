<?php

$name = "Артём";

echo "Привет " . $name . "<br>";
var_dump($name);

$a = 1234; // десятичное число

// Целые числа



// Переполнения целых чисел
var_dump(25 / 7); // float(3,571428571428571) - округление
var_dump((int)(25 / 7)); // float(3) - округление в меньшую сторону
var_dump(round(25 / 7)); // float(4) - округление в большую сторону
// Деление
function foo($value): int
{
    return $value;
}

var_dump(foo(8.1)); // как я понимаю до PHP 8.1.0 выдавалась не число, а что-то типа ошибки


echo 'Однажды Арнольд сказал: "I\' be back"', PHP_EOL;

$great = 'здорово';
$arr = [
    '1',
    '2',
    '3',
    [41, 42, 43],
    'key' => 'Ключ со знаком минуса',
    'const-key' => 'Ключ со знаком минуса',
    'foo' => ['foo1', 'foo2', 'foo3']
];

echo "Это { $great}";
// выводит: Это { здорово}
echo "Это {$great}";

$array1 = array(
    "foo" => "bar",
    "bar" => "foo",
);
$array2 = [
    "foo" => "bar",
    "bar" => "foo",
];
var_dump($array1, $array2);

$array = array(
    "foo" => "bar",
    "bar" => "foo",
    100 => -100,
    -100 => 100,
);
var_dump($array);

$array = array("foo", "bar", "hallo", "world");
var_dump($array);

$array = array(
    "a",
    "b",
    6 => "c",
    "d",
);
var_dump($array);

$array = array(
    1 => 'a',
    "1" => "b", // Значение "b" перезапишет значение "a"
    1.5 => 'c', // значение "c" перезапишет в "b"
    -1 => 'd',
    '01' => 'e', // строка не перезапишет ключ 1, поскольку она не целочисленная
    '1.5' => 'f', // строка не перезапишет ключ 1, поскольку она не целочисленная
    true => 'g', // значение g перезапишет в c
    false => 'h',
    '' => 'i',
    null => 'j', // значение j перезапишет в значение c
    'k', // Значение k присваивается ключу 2, потому что самый большой целочисленный ключ до этого был 1
    2 => 'l' // значение l перезапишет в значение k
);

var_dump($array);

$array = [];
$array[-5] = 1;
$array[] = 2;
var_dump($array);

$array = array(
    "foo" => "bar",
    42    => 24,
    "multi" => array(
        "dimensional" => array(
            "array" => "foo"
        )
    )
);

var_dump($array["foo"]);
var_dump($array[42]);
var_dump($array["multi"]["dimensional"]["array"]);



function getArray()
{
    return array(1, 2, 3);
}
$secondElement = getArray()[1];
var_dump($secondElement);

$arr = array(5 => 1, 12 => 2);
$arr[] = 56;// В этом месте скрипта такое аналогично присваиванию $arr[13] = 56;
$arr["x"] = 42; // Добавление в массив нового элемента с ключом "x"
unset ($arr[5]); // Удаление элемента из массива
var_dump($arr);
unset($arr); // Это удаляет весь массив
// var_dump($arr);

$source_array = ['foo', 'bar', 'baz'];
[$foo, $bar, $baz] = $source_array;
echo $foo, PHP_EOL;
echo $bar, PHP_EOL;
echo $baz, PHP_EOL;

$source_array = [
    [1, 'John'],
    [2, 'Jane']
];
foreach ($source_array as [$id, $name]) {
    echo "{$id}: '{$name}'\n";
}

$source_array = ['foo', 'bar', 'baz'];
[, , $baz] = $source_array;
echo $baz;

$source_array = ['foo' => 1, 'bar' => 2, 'baz' => 3];
['baz' => $three] = $source_array;
echo $three, PHP_EOL;
$source_array = ['foo', 'bar', 'baz'];
[2 => $baz] = $source_array;
echo $baz, PHP_EOL;

$a = 1;
$b = 2;
[$b, $a] = [$a, $b];
echo $a, PHP_EOL;
echo $b, PHP_EOL;

$a = array(1 => 'один', 2 => 'два', 3 => 'три');
unset($a[2]);
var_dump($a);
$b = array_values($a);
var_dump($b);

error_reporting(E_ALL);
ini_set('display_errors', true);
ini_set('html_errors', false);
$array = array(1,2);
$count = count($array);
for ($i = 0; $i < $count; $i++) {
    echo "\nПроверяем $i: \n";
    echo "Плохо: " . $array['$i'] . "\n";
    echo "Хорошо: " . $array[$i] . "\n";
    echo "Плохо: {$array['$i']}\n";
    echo "Хорошо: {$array[$i]}\n";
}

error_reporting(E_ALL);
// Показываем все ошибки
$arr = array('fruit' => 'apple', 'veggie' => 'carrot');
echo $arr['fruit'], PHP_EOL; // apple
echo $arr['veggie'], PHP_EOL; // carrot
// Верно
try {
    echo $arr[fruit];
} catch (Error $e) {
    echo get_class($e), ': ', $e->getMessage(), PHP_EOL;
}// Неверно. Это не работает и выбрасывает PHP-ошибку Error из-за неопределённой константы
// с названием fruit
//
// Error: Undefined constant "fruit"

define ('fruit', 'veggie');// Определим константу, чтобы посмотреть, что произоёдет. Присвоим константе с названием fruit значение "veggie".
echo $arr['fruit'], PHP_EOL;
echo $arr[fruit], PHP_EOL;

echo "Hello $arr[fruit]", PHP_EOL; // Hello apple
// Доступ по ключу без кавычек сработает внутри строки. PHP не ищет константы внутри строк,
// поэтому ошибка здесь не возникнет
echo "Hello {$arr[fruit]}", PHP_EOL; // hello carrot
echo "Hello {$arr['fruit']}", PHP_EOL; // hello apple

echo "Hello " . $arr['fruit'], PHP_EOL;

// print "Hello $arr['fruit']";
// print "Hello $_GET['foo']"

// echo $arr[somefunc($bar)];

$error_descriptions[E_ERROR] = "Произошла фатальная ошибка";
$error_descriptions[E_WARNING] = "PHP сообщает о предупреждении";
$error_descriptions[E_NOTICE] = "Это лишь неофициальное замечание";

$error_descriptions[1] = "Произошла фатальная ошибка";
$error_descriptions[2] = "PHP выдал предупреждение";
$error_descriptions[8] = "Это просто уведомление";

// class A
// {
// private $B;
//    protected $C;
//     public $D;

//    function __construct()
//    {
//        $this->{1} = null;
//    }
//}

var_export((array) new A());

class B
{
    private $B;
}

class C extends B
{
    private $B;
    public $BB;
}
var_export((array) new B());

$arr1 = [1, 2, 3];
$arr2 = [...$arr1];
$arr3 = [0, ...$arr1];
$arr4 = [...$arr1, ...$arr2, 111];
$arr5 = [...$arr1, ...$arr1];

function getArr()
{
    return ['a', 'b'];
}
$arr6 = [...getArr(), 'c' => 'd'];
var_dump($arr1, $arr2, $arr3, $arr4, $arr5, $arr6);

$arr1 = ["a" => 1];
$arr2 = ["a" => 2];
$arr3 = ["a" => 0, ...$arr1, ...$arr2];
var_dump($arr3);
// Строковый ключ

$arr4 = [1,2,3];
$arr5 = [4,5,6];
$arr6 = [...$arr4, ...$arr5];
var_dump($arr6); // [1, 2, 3, 4, 5, 6]
// Целочисленный ключ
// Распаковка массивов создаёт массив [0 => 1, 1 => 2, 2 => 3, 3 => 4, 4 => 5, 5 => 6], в котором исходные целочисленные ключи не сохраняются

$a = array ( 'color' => 'красный',
'taste' => 'сладкий',
'shape' => 'круг',
'name' => 'яблоко',
4);
var_dump($a, $b);

$a = array ();
$a['color'] = 'красный';
$a['taste'] = 'сладкий';
$a['shape'] = 'круг';
$a['name'] = 'яблоко';
$a[] = 4;
$b = array ();
$b[] = 'a';
$b[] = 'b';
$b[] = 'c';

var_dump($a, $b);

$map = array(
    'version' => 4,
    'OS' => 'Linux',
    'lang' => 'english',
    'short_tags' => true
);
var_dump($map);

$switching = array(
    10,
    5 => 6,
    3 => 7,
    'a' => 4,
    11,
    '8' => 2,
    '02' => 77,
    0 => 12
);
var_dump($switching);

$empty = array();
var_dump($empty);

$colors = array('красный', 'голубой', 'зеленый', 'желтый');
foreach ($colors as $color) {
    echo "Вам нравится $color?\n";
}
$colors = array('красный', 'голубой', 'зеленый', 'желтый');
foreach ($colors as &$color) {
    $color = mb_strtoupper($color);
}
unset($color);
print_r($colors);

$firstquarter = array(1 => 'январь', 'февраль', 'март');
print_r($firstquarter);

$handle = opendir('.');
while (false !== ($file = readdir($handle))) {
    $files[] = $file;
}
closedir($handle);

var_dump($files);

sort($files);
print_r($files);

$fruits = array ( "fruits"  => array ( "a" => "апельсин",
    "b" => "банан",
    "c" => "яблоко"
),
"numbers" => array (1,
    2,
    3,
    4,
    5,
    6),
"holes" => array ("первая",
    5 => "вторая",
    "третья"
)
);
var_dump($fruits);
echo $fruits["holes"][5];
echo $fruits["fruits"]["a"];
unset($fruits["holes"][0]);

$juices["apple"]["green"] = "хороший";
var_dump($juices);

$arr1 = array(2, 3);
$arr2 = $arr1;
$arr2[] = 4;

$arr3 = &$arr1;
$arr3[] = 4;

var_dump($arr1, $arr2, $arr3);

$var = null;


if($a > $b)
    echo "a больше b";

if($a > $b) {
    echo "a больше b";
    $b = $a;
}
























?>