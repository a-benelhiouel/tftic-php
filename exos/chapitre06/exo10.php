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
        border: medium solid darkblue;
    }
    table tr:nth-child(odd) {
        background: lightgray;
    }
    table tr td {
        min-width: 2ch;
    }
    </style>
    <title>Exo6.10</title>
  </head>
  <body>
  <h2>Exo6.10</h2>

<?php

    $myTab = [20, 20, 20, 20, 24, 19, 18, 17, 16, 17, 17, 18, 17, 17, 14, 15, 16, 16, 16, 17, 17, 19, 17, 20, 19, 20, 21, 21, 24, 17];    

    echo "<table>";
    for($i= 0; $i < count($myTab); $i++) {
      $day = $i + 1;
      echo "<tr>
      <td>$day  septembre</td><td>$myTab[$i]°</td>
      </tr>";
    };
    echo "</table>";
?>
  </body>
</html>