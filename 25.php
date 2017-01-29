<?php

$min = rand(0, 73);
$max = rand(74, 130);
$a = range($min, $max);
foreach($a as $value) {
	if($value >= $max) {
		echo "Максимальное чило:".$value;
		echo "<br>";
		$c = $max;
	}
	elseif($value <= $min) {
		echo "Минимальное число:" . $value;
		echo "<br>";
        $d = $min;
	}
	else continue;
}
echo "Поcле смены чисел, максимальное:". $d ."<br>" ."минимальное:". $c;