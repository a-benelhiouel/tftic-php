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
    <title>Exo6.12b</title>
  </head>
  <body>
    <h2>Exo6.12b</h2>
    <h3>Le calendrier</h3>
    <p>Dans quel ordre souhaitez-vous qu'il s'affiche?</p>
    <?php

$myTab = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Décembre"];    

echo "
    <form action='#' method='post'>
    <label for='sortAsc'>Ascending</label>
    <input type='radio' id='sortAsc' name='sortAsc' value='asc'>
     <label for='sortDesc'>Descending</label>
     <input type='radio' id='sortDesc' name='sortDesc' value='desc'>
     <input type='submit' value='Sort'/>
    </form>
    ";

echo "<table><tr><th>Mois de l'année</th></tr><tr>";
if (isset($_POST["sortDesc"]) && ($_POST["sortDesc"]) === "desc") {
    for($i= count($myTab)-1; $i >= 0; $i--) {
      echo "<td>$myTab[$i]</td>";
    };
} else {
    foreach($myTab as $n) {
        echo "<td>$n</td>";
      };
}
echo "</tr></table>";

    ?>
  </body>
</html>