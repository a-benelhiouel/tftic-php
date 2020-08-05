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
    }
    table tr {
        border: medium solid darkblue;
    }
    table tr td {    
        border: thin solid darkblue;
        min-width: 2ch;
        display: block;
    }
    </style>
    <title>Exo6.8</title>
  </head>
  <body>
  <h2>Exo6.8</h2>

<?php

    $myTab = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Décembre"];    

    echo "<table><tr>";
    for($i= count($myTab)-1; $i >= 0; $i--) {
      echo "<td>$myTab[$i]</td>";
    };
    echo "</tr></table>";
?>
  </body>
</html>