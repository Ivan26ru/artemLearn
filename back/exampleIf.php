<?php
$testGet = [
    'a' => 1,
    'b' => '',
    // c - отсутствует
];


var_dump(getValueByKey($_GET,'a'));// 1
var_dump(getValueByKey($_GET, 'b'));// false
var_dump(getValueByKey($_GET, 'c'));// false
function getValueByKey(array $currentArray, string $key): string | false
{

    if (!isset($currentArray[$key]) || empty($currentArray[$key])) {
        return false;
    }

    return $currentArray[$key];
}
