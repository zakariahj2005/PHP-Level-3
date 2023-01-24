<form action="" method="get">

<?php
$ceu = array(
  "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussel", "Denmark"=>"Copenhagen",
  "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana",
  "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
  "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London",
  "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin",
  "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna",
  "Poland"=>"Warsaw") ;

asort($ceu);
$rand = array_rand($ceu, 1);

echo "Wat is de hoofdstad van? " . $rand;

?>

 <input value="<?= $rand?>"type="hidden" name="land">

<br><br>

<form action="" method="get">
  <select name="select-box">

  <?php
      foreach($ceu as $land => $stad){
      echo "<option value='$land'><li>" . $stad . "</li></option>";
    }
  ?>
  </select>
  <br><br>
  <input type="submit">

  

  <?php

if (isset($_GET["select-box"])){
  $b = $_GET["select-box"];
    if ($_GET["select-box"] == $_GET['land']){
     echo "<br><br> de hoofdstad van " . $_GET['land'] . " is " . $ceu[$b] . ", jou antwoord is correct!"; 
    } else {
     echo "<br><br> de hoofdstad van " . $_GET['land'] . " is " . $ceu[$b] . ", jou antwoord " . $ceu[$b] . " is helaas fout. <br> Probeer het opnieuw!"; 
    } 
} 
?>
</form>