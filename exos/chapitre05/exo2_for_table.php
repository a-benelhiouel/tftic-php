<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Table de 1 à 9</title>
    <style>
    table {
	display: table;
    border: medium solid darkblue;
}
table tr {
	display: table-cell;
    border: medium solid darkblue;}
table tr td {
	display: block;
}
    </style>
  </head>
  <body>
    <?php

    $operand = 1;
    $multiplier = 1;

echo "<h2>Tables de 1 à 9</h2><table class='tables'>
";
    for($operand = 1; $operand <= 9; $operand++) {
    echo "<tr class='table'><th>Table de $operand</th>";
        for($multiplier = 1; $multiplier <=10; $multiplier++ ) {
            echo "<td> $operand * $multiplier = " . $operand * $multiplier . "</td>";
            $multiplier++;
        }
    echo "</tr>";
    }
    echo "</table>";
?>
  </body>
</html>