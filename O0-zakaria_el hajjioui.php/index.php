<?php
$array = [1, 2, 3, 4, 5, 6,];

for($a=0; $a<count($array); $a++){
    echo $array[$a] . " ";
}

echo "<hr>";

foreach($array as $element){
    echo $element . " ";
}

?>