<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table, th, td {
            border:1px solid black;
        }
    </style>
    <title></title>
</head>
<body>
    <table>
        <tr>

        <?php
        
            for($x=0; $x<12; $x++){
                echo("<tr>");
                for($i=1; $i<=12; $i++) {
                    echo("<td>$i</td>");
                }
                echo("</tr>");
            }
        ?>

        </tr>
    </table>
</body>
</html>
