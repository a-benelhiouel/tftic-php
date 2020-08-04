<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Table de 2</title>
  </head>
  <body>
    <h2>Table de 2</h2>
    <?php

    $operand = 2;
    $multiplier = 1;
echo "<ul>";
    while($multiplier <=10 ) {
        echo "<li>$operand * $multiplier = " . $operand * $multiplier . "</li>";
        $multiplier++;
    }
echo "</ul>";
?>
  </body>
</html>
