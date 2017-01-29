<?php
$numbers = "12345";

$sum = 0;

for($i = 0; $i <= strlen($numbers); $i++) {
    $sum += $numbers[$i];
}

echo $numbers."<br/>";
echo $sum;