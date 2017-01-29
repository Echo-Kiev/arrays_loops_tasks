<?php 	

$rows = 10;
$cols = 10;
$colors = array('red','yellow','blue','gray','maroon','brown','green');
echo '<table border="1">';
for($tr=1; $tr <= $rows; $tr++){
    echo '<tr>';
    for($td=1; $td <= $cols; $td++){
        $number = rand();
        $i = $colors[rand(0,count($colors))];
        echo "<td style='background-color:{$i}'>".$number.'</td>';
    }
    echo '</tr>';
}
echo '</table>';

