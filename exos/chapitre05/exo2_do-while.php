<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Table de 1 à 9</title>
    <style>
        * {
            box-sizing: border-box;
        }
        body {
            display: flex;
            flex-direction: column;
        }
        h2 {
            margin: auto;
        }
        div.tables {
            margin: auto;
            display: flex;
            flex-wrap: wrap;
            max-width: 120ch;
        }
        div.table {
            width: 20ch;
            border: medium solid darkblue;
            padding: 1ch;
            margin: 1ch;
        }
    </style>
  </head>
  <body>
    <h2>Tables de 1 à 9</h2>
    <?php

    $operand = 1;
    $multiplier = 1;

echo "<div class='tables'>";
    do {
        echo "<div class='table'><h3>Table de $operand</h3>";
    echo "<ul>";
        do {
            echo "<li>$operand * $multiplier = " . $operand * $multiplier . "</li>";
            $multiplier++;
        } while($multiplier <10 );
    echo "</ul></div>";
    $operand++;
    $multiplier=1;
    } while($operand <9 );
    echo "</div>";
?>
  </body>
</html>
