<?php
	$num1 = 10;
	$num2 = -5;
	
	if ($num1 > 0 or $num2 > 0) {
		echo '+++'; // сработает это
	} else {
		echo '---';
	}
	echo PHP_EOL;
?>