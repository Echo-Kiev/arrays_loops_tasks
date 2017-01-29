<?php 	 

$employees = array ('Коля' => '200', 'Вася' => '300', 'Петя' => '400');
foreach ($employees as $name => $money) {
	echo "{$name} — зарплата {$money} долларов; <br> ";
}