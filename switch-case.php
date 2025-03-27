<?php

$lang = 'ru';


switch ($lang) {
    case 'ru':
        echo 'рус';
    break;
    case 'en':
        echo 'англ';
    break;
    case 'de':
        echo 'нем';
    break;
        default;
        echo 'язык не поддерживается';
	break;
	}
        


    $num = 8;


    switch ($num) {
        case 1:
            echo 'Зима';
        break;
        case 2:
            echo 'Весна';
        break;
        case 3:
            echo 'Лето';
        break;
        case 4:
            echo 'Осень';
        break;
        default:
        echo 'Пишите цифры от 1 до 4';
    }

    echo PHP_EOL;  // Добавляем перевод строки, зависящий от платформы