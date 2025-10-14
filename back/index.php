<?php

$name = "Артём";

echo "Привет " . $name ."<br>";
var_dump($name);

$a = 1234; // десятичное число
$a = 0123; // Восьмеричное число(в десятичной системе = 83)
$a = 0o123; // Восьмеричное число
$a = 0x1A; // Шестнадцатеричное число(в десятичной системе = 23)
$a = 0b11111111; // Двоичное число(в десятичной системе = 255)
$a = 1_234_567; // Десятичное число
// Целые числа
$large_number = 50000000000000000000;
var_dump($large_number); // float (5.0E+19)
var_dump(PHP_INT_MAX+1); // В 32-разрядной системе system: float(2147483648) // В 64-разрядной системе: float(9.2233720368548E+18)
// Переполнения целых чисел
var_dump(25/7); // float(3,571428571428571) - округление
var_dump((int)(25/7)); // float(3) - округление в меньшую сторону
var_dump(round(25/7)); // float(4) - округление в большую сторону
// Деление
function foo($value): int
{
    return $value;
}
var_dump(foo(8.1)); // как я понимаю до PHP 8.1.0 выдавалась не число, а что-то типа ошибки
var_dump((int) 8.1);
var_dump(intval(8.1));
// Приведение из числа с плавающей точкой
echo 'Простая строка', PHP_EOL;
echo 'Переводы строки внутри кавычек становятся частью строкового значения и корректно обрабатывается', PHP_EOL;
echo 'Однажды Арнольд сказал: "I\' be back"', PHP_EOL;
// Выводит: Однажды Арнольд сказал: "I' be back"
echo 'Вы удалили C:\\*.*?', PHP_EOL;
// Выводит: Вы удалили C:\*.*
echo 'Вы удалили C:\*.*?', PHP_EOL;
// Выводит: Вы удалили C:\*.*?
// (Символ * не относится к спецсимволам и не образует в паре с обратным слешем управляющую последовательность,
// поэтому обратный слеш не экранирует символ * и выводится как есть — прим. перев.
echo 'В одинарных кавычках управляющая последовательность \n не разворачивается в символ перевода строки', PHP_EOL;
echo 'Переменные $expand и $either также не разворачиваются', PHP_EOL;
// Одинарные кавычки
echo <<<END
      a
     b
    c
\n
END;
// Без отступа перед маркером закрытия
echo <<<END
      a
     b
    c
    END;
// Отступ в четыре пробела перед маркером закрытия4

echo <<<END
  a
 b
c
END; // Идентификатору закрытия нельзя отступать дальше строк тела(если поставить не сколько пробелов будет ошибка которая снизу
// Parse error: Invalid body indentation level (expecting an indentation level of at least 3) in
// C:\www\artemLearn\OSPanel\home\learnfirstproject\back\index.php on line 59

//{
//    echo <<<END
//     a
//        END;
//}
// Отступ тела отличается от отступа маркера окончания:
// тело — 5 пробелов, маркер окончания — 2 символа табуляции
//{
//    echo <<<END
//        a
//     END;
//}
// Смешивание пробелов и табуляций в теле:
// тело — 4 пробела + 1 символ табуляции, маркер окончания — 5 пробелов
//{
//    echo <<<END
//          a
//         END;
// }
// Parse error: Invalid body indentation level (expecting an indentation level of at least 8)
// in C:\www\artemLearn\OSPanel\home\learnfirstproject\back\index.php on line 67

$values = [<<<END
a
  b
    c
END, 'd e f'];
var_dump($values);

// $values = [<<<END
// a
// b
// END ING
// END, 'd e f'];
// Parse error: syntax error, unexpected identifier "ING", expecting "]" in C:\www\artemLearn\OSPanel\home\learnfirstproject\back\index.php on line 98

// class Foo {
//    public $bar = <<<EOT
// bar
//    EOT;
// }
// Отступ перед закрывающим идентификатором недопустим
// Parse error: Invalid body indentation level (expecting an indentation level of at least 4)
// in C:\www\artemLearn\OSPanel\home\learnfirstproject\back\index.php on line 104

$str = <<<EOD
Пример строки, которую записали в heredoc-синтаксисом в несколько строк
EOD;
class Foo
{
    var $foo;
    var $bar;

    function __construct()
    {
        $this->foo = 'Foo';
        $this->bar = array('Bar1', 'Bar2', 'Bar3');
    }
}

$foo = new Foo();
$name = 'Расмус';
echo <<<EOT
Меня зовут "$name". Я печатаю $foo->foo.
Теперь я вывожу {$foo->bar[1]}.
Это выведет заглавную букву 'А': \x41
EOT;

function example()
{
    static $bar = <<<LABEL
Здесь ничего нет...
LABEL;
}
class example
{
    const BAR = <<<FOOBAR
Пример использования константы
FOOBAR;

    public $baz = <<<FOOBAR
Пример использования поля
FOOBAR;
}

echo <<<"FOOBAR"
Привет, мир!
FOOBAR;

echo <<<'EOD'
Пример текста, занимающего несколько строк, написанного синтаксисом nowdoc. 
Обратные слеши выводятся без обработки, например, \\ и \'.
EOD;

class doc
{
    public $foo;
    public $bar;
    function __construct()
    {
        $this->foo = 'Foo';
        $this->bar = array('Bar1', 'Bar2', 'Bar3');
    }
}
$foo = new foo;
$name = 'Расмус';
echo <<<'EOT'
Меня зовут "$name". Я печатаю $foo->foo.
Теперь я печатаю {$foo->bar[1]}.
Это не выведет заглавную 'А': \x41
EOT;
class example1
{
    public $bar = <<<'EOT'
bar
EOT;
}
$juice = "яблочного";
echo "Он выпил немного $juice сока." . PHP_EOL;

$juices = array("яблочного", "апельсинового", "string_key" =>"фиолетового");
echo "Он выпил немного $juices[0] сока.";
echo PHP_EOL;
echo "Он выпил немного $juices[1] сока.";
echo PHP_EOL;
echo "Он выпил немного $juices[string_key] сока.";
echo PHP_EOL;
class A
{
    public $s = "string";
}
$o = new A();
echo "Значение свойства объекта: $o->s.";

$string = 'string';
echo "Символ с индексом -2 равен $string[-2].", PHP_EOL;
$string[-3] = 'o';
echo "Изменение символа на позиции -3 на 'o' дает следующую строку: $string.", PHP_EOL;

const DATA_KEY = 'const-key';
$great = 'здорово';
$arr= [
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
// выводит: Это здорово
class Square
{
    public $width;

    public function __construct(int $width)
    {
        $this->width = $width;
    }
}
$square = new Square(5);

echo "Ширина квадрата составляет {$square->width}00 сантиметров";

echo "Это работает: {$arr['key']}";
// работает, ключи, взятые в кавычки, работают только с синтаксисом фигурных скобок
echo "Это работает {$arr[3][2]}}";
echo "Работает: {$arr[DATA_KEY]}";
echo "Это работает: {$arr['foo'][2]}";
//echo "Работает: {$obj->values[3]->name}";
//echo "Работает: {$obj->$staticProp}";
echo "C:\directory\{$great}.txt";
echo "C:\\directory\\{$great}.txt";

$str = 'This is a test.';
$first = $str[0];
var_dump($first);
// Получение первого символа строки

$third = $str[2];
var_dump($third);
// получение третьего символа строки

$str = 'This is still a test.';
$last = $str[strlen($str) - 1];
var_dump($last);
// получение последнего символа строки

$str = 'Look at the sea';
$srt[strlen($str) - 1] = 'e';
var_dump($srt);
// изменение последнего символа строки

$str = 'abc';
$keys = ['1', '1.0', 'x', '1x' ];

foreach ($keys as $keyToTry) {
    var_dump(isset($str[$keyToTry]));
    try {
        var_dump(isset($str[$keyToTry]));
    } catch (TypeError $e) {
        echo $e->getMessage(), PHP_EOL;
    }
    echo PHP_EOL;
}

$foo = True;

$action = "show_version";
$show_separators = true;

if ($action == "show_version") {
    echo "Версия 1.23";
}
// == - оператор, который проверяет эквивалентность и возвращает логическое значение

if ($show_separators == TRUE) {
    echo "<hr>\n";
}
// сравнение со значением true необязательно, ...

if ($show_separators) {
    echo "<hr>\n";
}

var_dump((bool)""); // bool (false)
var_dump((bool)"0"); // bool (false)
var_dump((bool) 1); // bool (true)
var_dump((bool) -2); // bool (true)
var_dump((bool) "foo"); // bool (true)
var_dump((bool) 2.3e5); // bool (true)
var_dump((bool) array(12)); // bool (true)
var_dump((bool) array()); // bool (true)
var_dump((bool) "false"); // bool (false)


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
    1 => "a",
    "1" => "b",
    1.5 => "c",
    true => "d",
);
var_dump($array);


$array = array(
    "foo" => "bar",
    "bar" => "foo",
    100 => -100,
    -100 => 100,
);
var_dump($array);

$array = array("foo", "bar", "hallo", "world");
var_dump($array);





?>