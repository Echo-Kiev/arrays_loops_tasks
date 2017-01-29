<?php

$days = ['понедельник','вторник','среда','четверг','пятница','суббота','воскресенье'];
$day = 3;
foreach($days as $key => $value) {
	if($key == $day - 1 ) {
		echo '<i>'.$value.'</i>'.'<br>'; 
	} else {
		echo $value.'<br>';
	}
}