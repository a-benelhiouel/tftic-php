<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Exo6.1</title>
    <style>
    </style>
  </head>
  <body>
<?php

echo "<h2>Exo6.1</h2>";

    $myTab = [];
    for($i = 0; $i < 10; $i++) {
        $myTab[$i] = $i * 2;
    }

    foreach($myTab as $n) {
        echo $n . "</br>";
    }

?>
  </body>
</html>