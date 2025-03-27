<?php
$user = [
    'name'=>'Vladimir',
    'surname'=>'Mayakovskiy',
    'patronymic'=>'Vladimirovich', 
];
//echo $user['name'] . ' '. $user['surname']  . ' '  . $user['patronymic']; // выведет 200

$date = [
    'year' => date('Y'), // Текущий год
    'month' => date('m'), // Текущий месяц
    'day' => date('d') // Текущий день
];

// Выводим дату в формате год-месяц-день
echo $date['year'] . '-' . $date['month'] . '-' . $date['day'];
echo PHP_EOL;
?>