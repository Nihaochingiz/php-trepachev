<?php
/*
$arr = ['a','b','c'];

foreach ($arr as $element) {
   print($element);
}
*/

$arrOne = ['a','b','c','d'];

$result = implode('+', $arrOne);

// Выводим результат на экран
//echo $result . "\n";


$nums = [1, 2, 3];

echo(array_sum($nums));


// Создаем массив с элементами 2, 5, 3, 9
$arr = [2, 5, 3, 9];

// Умножаем первый элемент на второй и третий элемент на четвертый
$result1 = $arr[0] * $arr[1];
$result2 = $arr[2] * $arr[3];

// Складываем результаты и присваиваем переменной $res
$res = $result1 + $result2;

// Выводим значение переменной $res
echo $res;
echo PHP_EOL; 