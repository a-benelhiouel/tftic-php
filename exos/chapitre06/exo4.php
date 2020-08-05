<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Exo6.4</title>
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

echo "<h2>Exo6.4</h2>";

$greater = 0;
$smaller = 0;

    $myTab = [6];
    for($i = 1; $i <= 10; $i++) {
        $myTab[$i] = $myTab[$i-1] * 2 - 1;
    }
    

    echo "<table><tr>";
    foreach($myTab as $n) {
      echo "<td>$n</td>";
    };
    echo "</tr></table>";

    foreach($myTab as $n) {
        $greater = $greater > $n ? $greater : $n; 
    }
    $smaller = $greater;
    foreach($myTab as $n) {
        $smaller = $smaller < $n ? $smaller : $n; 
    }
    echo "Greater : $greater";
    echo "<br/>";
    echo "Smaller : $smaller";

?>
  </body>
</html>