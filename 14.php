<?php 

$arr = [4, 2, 5, 19, 13, 0, 10];
$e = 2;
foreach ($arr as $num) {

	if ($e == $num) {               
    echo 'Есть!';
    break;
	} 
}
    if ($e !== $num) {
    	echo 'Нет!';
    }
 ?>