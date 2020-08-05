<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Exo6.5</title>
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

echo "<h2>Exo6.5</h2>";


$sum = 0;

    $myTab = [2];
    for($i = 1; $i <= 10; $i++) {
        $myTab[$i] = $myTab[$i-1] * 3;
    }
    

    echo "<table><tr>";
    foreach($myTab as $n) {
      echo "<td>$n</td>";
    };
    echo "</tr></table>";

    foreach($myTab as $n) {
        $sum += $n; 
    }
    echo "Sum : $sum";

?>
  </body>
</html>