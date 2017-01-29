<?php 	

$days = ['понедельник','вторник','среда','четверг','пятница','суббота','воскресенье'];
foreach ($days as $key => $value)
	{
		if ($key == 5 or $key == 6)
		{
			echo "<b>$value</b><br>";
		}
		else
		{
			echo $value.'<br>';
		}
	}
