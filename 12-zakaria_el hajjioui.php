<?php
$places = array(
    "Japan" => "Tokyo",
    "Mexico" => "Mexico City",
    "USA" => "New York City",
    "India" => "Mumbai",
    "Korea" => "Seoul",
    "China" => "Shanghai",
    "Nigeria" => "Lagos",
    "Argentina" => "Buenos Aires",
    "Egypt" => "Cairo",
    "UK" => "London");

foreach($places as $x => $x_value){
echo "De stad " . $x_value . "  is een grote stad in het land. " . $x;
echo "<br>";
}
?>
