<?php

$arr = ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', ' Июль' , 'Август',' Сентябрь' , 'Октябрь', 'Ноябрь', 'Декабрь'];
$month = 1;
foreach($arr as $key => $value) { 
	if ($key == $month - 1)
		{
			echo '<b>'.$value.'</b>'.'<br>';
		}
		else
		{
			echo $value.'<br>';
		}
	}
?>



 




