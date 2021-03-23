<?php

include 'randArray.php';
include 'LinearSearch.php';
include 'BinarySearch.php';
include 'InterpolationSearch.php';

const NUM = 5000;

$arr = getSortRandArray();

//print_r($arr);

echo "Линейный поиск".PHP_EOL;
echo linearSearch($arr, NUM).PHP_EOL;

echo "Бинарный поиск".PHP_EOL;
echo binarySearch($arr, NUM).PHP_EOL;

echo "Интерполяционный".PHP_EOL;
echo interpolationSearch($arr, NUM);

// 2. Реализовать удаление элемента массива по его значению. Обратите внимание на возможные дубликаты!

function delFromArr($arr, $val) {
    $del = interpolationSearch($arr, $val);
    if (!is_null($del)) {
        unset($arr[$del]);
        echo "Удаляю элемент номер $del";
        delFromArr($arr, $del);
    }
}

