
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>

<form action="" method="get">
<label>Getallen ?</label>
<input type="text" name="getallen">

</form>

<?php
if(isset($_GET['getallen']))
     {
$arraygetallen = explode(",", $_GET['getallen']);


echo 'Aantal ingevoerde getallen: ' . count($arraygetallen);
echo '<br>';

echo 'Totaal van alle getallen: ' . array_sum($arraygetallen);
$x = array_sum($arraygetallen) / count($arraygetallen);

echo '<br>';
echo 'Gemiddelde van alle getallen: ' . $x; 

}

?>

</body>
</html>
