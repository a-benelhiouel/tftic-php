<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Exo6.3</title>
    <style>
    *{
        box-sizing: border-box;
    }
    table {
	    display: table;
        border: thick solid darkblue;
    }
    table tr {
	    display: table-cell;
        border: medium solid darkblue;
    }
    table tr td {    
        border: thin solid darkblue;
        min-width: 2ch;
    }
    </style>
  </head>
  <body>
<?php

echo "<h2>Exo6.3</h2>";


$bigger = 0;

    $myTab = [6];
    for($i = 1; $i <= 10; $i++) {
        $myTab[$i] = $myTab[$i-1] * 3;
    }    

    echo "<table><tr>";
    foreach($myTab as $n) {
      echo "<td>$n</td>";
    };
    echo "</tr></table>";

    foreach($myTab as $n) {
        $bigger = $bigger > $n ? $bigger : $n;
    }

    echo "Bigger : $bigger";

?>
  </body>
</html>