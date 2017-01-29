<?php 

$iter = 8;
    $result = 1;
    for($i=0;$i<$iter;$i++) {
        $Arr[$i]=rand(0,100);
    }
    foreach ($Arr as $arrayElement) {
        echo($arrayElement . " ");
    }
    echo "<br>";
    for ($i=0;$i<$iter;$i=$i+2) {
        if ($Arr[$i] > 0) $result = $result * $Arr[$i];
    }
echo "Произведение: ". $result . "<br>";
echo "Элементы больше нуля c не парным индексом ";
for($i=1; $i < $iter; $i=$i+2) {
    if($Arr[$i] > 0){
        echo " " . $Arr[$i]." ";
    }
}
?>