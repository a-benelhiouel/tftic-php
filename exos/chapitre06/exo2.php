<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Exo6.2</title>
    <style>
    </style>
  </head>
  <body>
<?php

echo "<h2>Exo6.2</h2>";

    $myTab = [2];
    for($i = 1; $i <= 10; $i++) {
        $myTab[$i] = $myTab[$i-1] * 2;
    }

    foreach($myTab as $n) {
        echo $n . "</br>";
    }

?>
  </body>
</html>