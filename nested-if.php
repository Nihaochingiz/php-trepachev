<?php
// https://code.mu/ru/php/book/prime/conditions/nested-if/
$age = 25;

if ($age < 10 || $age > 99) {
    echo 'Возраст меньше 10 или больше 99';
} else {
    // Разбиваем число на цифры и находим их сумму
    $sumDigits = array_sum(str_split($age));

    if ($sumDigits <= 9) {
        echo 'Сумма цифр однозначна';
    } else {
        echo 'Сумма цифр двузначна';
    }
}
?>