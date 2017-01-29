<?php

for ($i = 1; $i <= 9; $i++)
	{
		for ($a = 0; $a < $i; $a++)
		{
			$str .= $i;
		}
		echo $str.'<br>';
		$str = '';
		$a = 0;
	}