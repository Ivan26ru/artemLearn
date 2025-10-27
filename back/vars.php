<?php
echo "Переменные";
$varInt = 123;
$varString = "Эта строка";
$varFloat = 12.3;
$varBool = true;
$varArray = [10, 20, 30];
$varArrayKey = ['key 1' => 'value 1', 'key 2' => 'value 2'];
$varArrayInclude = [
    'element 1' => [
        'key 11' => 'value 11'
    ],
];
$varNull = null;

var_dump($varInt);
var_dump($varString);
var_dump($varFloat);
var_dump($varBool);
var_dump($varArray);
var_dump($varArrayKey);
var_dump($varNull);
var_dump($varArray[2]);
var_dump($varArrayKey['key 1']);
var_dump($varArrayInclude['element 1']['key 11']);