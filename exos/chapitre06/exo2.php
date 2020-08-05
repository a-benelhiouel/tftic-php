<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Exo6.2</title>
    <style>
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
    min-width: 5ch;
    }
    </style>
  </head>
  <body>
<?php

echo "<h2>Exo6.2</h2>";

    $myTab = [2];
    for($i = 1; $i <= 10; $i++) {
        $myTab[$i] = $myTab[$i-1] * 2;
    }

    echo "<table><tr>";
    foreach($myTab as $n) {
      echo "<td>$n</td>";
    };
    echo "</tr></table>";

?>
  </body>
</html>