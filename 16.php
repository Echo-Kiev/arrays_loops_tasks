<?php 	

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
foreach($arr as $val) {
	if ($val == 1 or $val == 2 or $val == 3) {
	 $num .= $val.',';
	 } elseif ($val == 4 or $val == 5 or $val == 6) {
      $num2 .= $val.',';
     } elseif ($val == 7 or $val == 8 or $val == 9) {
     $num3 .= $val.',';
	 }
}
echo $num.'<br>';
echo $num2.'<br>';
echo $num3.'<br>';



