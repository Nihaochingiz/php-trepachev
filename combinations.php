<?php
	$num = 1; // может быть 1, 2 или 3
	
	if ($num === 1) {
		echo 'value1'; // сработает, если $num равно 1
	}
	
	if ($num === 2) {
		echo 'value2'; // сработает, если $num равно 2
	}
	
	if ($num === 3) {
		echo 'value3'; // сработает, если $num равно 3
	}


/*В переменной $day лежит какое-то число из интервала от 1 до 31. Определите в какую декаду месяца попадает это число.
*/

$day = 15;

function determineDecade($day) {
    if ($day >= 1 && $day<= 10) {
        return 'Первая декада';
    } elseif ($day >= 11 && $day <= 20) {
        return 'Вторая декада';
    } elseif($day >= 21 && $day <= 31) {
        return 'Третья декада';
    } else {
        return "Некорректный день";
    }

}
echo determineDecade($day);
echo PHP_EOL; 
?>