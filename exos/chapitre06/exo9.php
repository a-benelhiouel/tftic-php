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
    table tr {
        border: medium solid darkblue;
    }
    table tr:nth-child(1) {
        border: medium solid red;
        background: lightgray;
        font-weight: bold;
    }
    table tr td {    
        border: thin solid darkred;
        min-width: 20ch;
    }
    </style>
    <title>Exo6.9</title>
  </head>
  <body>
  <h2>Exo6.9</h2>

<?php

    $months = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Décembre"];    
    $nbDays = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
    
    echo "
    <table>
      <tr>
        <th>Mois</th><th>Nbre de jours</th>
      </tr>";
    for($i= 0; $i < count($months); $i++) {
      $day = $i + 1;
      echo "<tr>
      <td>$months[$i]</td><td>$nbDays[$i]</td>
      </tr>";
    };
    echo "</table>";
    
    
?>
  </body>
</html>