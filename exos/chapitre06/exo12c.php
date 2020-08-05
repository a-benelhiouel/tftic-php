<?php

$myTab = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Décembre"];    

$calendar = "";
if (isset($_POST["sortDesc"]) && ($_POST["sortDesc"]) === "desc") {
  $calendar = "<table><tr><th>Mois de l'année</th></tr><tr>";
    for($i= count($myTab)-1; $i >= 0; $i--) {
      $calendar.= "<td>$myTab[$i]</td>";
    };
} else {
  $calendar = "<table><tr><th>Mois de l'année</th></tr><tr>";
    foreach($myTab as $n) {
      $calendar.= "<td>$n</td>";
      };
}
$calendar.= "</tr></table>";

?>
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
        border: thin solid darkblue;
        min-width: 2ch;
        display: block;
    }
    </style>
    <title>Exo6.12c</title>
  </head>
  <body>
    <h2>Exo6.12c</h2>
    <h3>The calendar</h3>
    <p>In wich order do you want to display it?</p>
    <form action='#' method='post'>
    <label for='sortAsc'>Ascending</label>
    <input type='radio' id='sortAsc' name='sortAsc' value='asc'>
     <label for='sortDesc'>Descending</label>
     <input type='radio' id='sortDesc' name='sortDesc' value='desc'>
     <input type='submit' value='Sort'/>
    </form>
    <?= $calendar ?>
  </body>
</html>