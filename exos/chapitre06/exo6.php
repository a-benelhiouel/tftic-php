<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
    <title>Exo6.6</title>
  </head>
  <body>
<?php

echo "<h2>Exo6.6</h2>";


$sum = 0;
$avg = 0;

    $myTab = [2];
    for($i = 1; $i <= 4; $i++) {
        $myTab[$i] = $myTab[$i-1] * 2;
    }
    

    echo "<table><tr>";
    foreach($myTab as $n) {
      echo "<td>$n</td>";
    };
    echo "</tr></table>";

    foreach($myTab as $n) {
        $sum += $n; 
    }
    $avg = $sum / count($myTab);

    echo "Average : $avg";

?>
  </body>
</html>