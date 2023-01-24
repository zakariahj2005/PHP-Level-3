<?php


$numbers = array(1,2,3,4,5,6,7,8,9,10,11,12); 

foreach ($numbers as $value) {
  echo "$value <br>";
}
echo "<br>";

//--------------------------------------------------------

for ($i = 0; $i < 12; $i++) {

    for ($a=1; $a < 10; $a++) { 
        echo $a;
    }

    echo "<br>";

}
echo "<br>";

//--------------------------------------------------------

for ($i = 0; $i < 12; $i++) {

    for ($a=1; $a < 10; $a++) { 
        echo $a;
    }

    echo "-";

    for ($c=9; $c > 0 ; $c--) { 
        echo $c;
    }
   echo " <br>";
}
echo "<br>";
?>
