<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Table de 2</title>
    <style>
        body {
        }
        div.tables {
            display: flex;
            flex-wrap: wrap;
        }
        div.table {
            width= 25%;
        }
    </style>
  </head>
  <body>
    <h2>Tables de 1 à 10</h2>
    <?php

    $operand = 1;
    $multiplier = 1;

echo "<div class='tables'>";
    while($operand <=9 ) {
        echo "<div class='table'><h3>Tables de $operand</h3>";
    echo "<ul>";
        while($multiplier <=10 ) {
            echo "<li>$operand * $multiplier = " . $operand * $multiplier . "</li>";
            $multiplier++;
        }
    echo "</ul></div>";
    $operand++;
    $multiplier=1;
    }
    echo "</div>";
?>
  </body>
</html>
