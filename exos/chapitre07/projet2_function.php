<?php

$myTab = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Décembre"];
$options = ["ascending", "descending"];

function TableFromArray(array $array, array $header = [], $column = false) {
  $table = "<table>";
  for($i = 0; $i < count($header); $i++) {
    $table .= ($i === 0 ? '<thead><tr>' : '') . "<th>$header[$i]</th>" . ($i === count($header) -1 ? '</tr></thead>' : '');
  };
  
  foreach($array as $value) {
      $table .= ($column ? '<tr>' : '') . "<td>$value</td>" . ($column ? '</tr>' : '');
  };
  $table .= "</table>";

  return $table;
}

function RadioFromArray(array $array, string $name, $checked = '-') {
  $radio = "";
  $checked = isset($_POST[$name]) ? $_POST[$name] : $array[0];

  for($i=0; $i < count($array); $i++) {
      $radio .= "<label for=" . ($array[$i]) . " >" . ($array[$i]) . "</label>";
      $radio .= "<input type='radio' id=" . ($array[$i]) . " name=" . ($name) . " value=" . ($array[$i]) . ($checked === $array[$i] ? ' checked' : '') . ">";
  }

  return $radio;
}

if (isset($_POST["sort"]) && ($_POST["sort"]) === "descending") {
  $myArray = array_reverse($myTab);
} else {
  $myArray = $myTab;
}

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
    body {
        display: grid;
        gap: 1ch;
        padding: 1ch;
        margin: 1ch;
        justify-items: center;
    }
    table {
        border: thick solid darkgreen;
        margin: 4ch;
    }
    table tr th {
        border: thin solid darkblue;
        background: lightgray;
        font-weight: bold;
    }
    table tr td {    
        border: thin solid darkred;
        min-width: 3ch;
        text-align: center;
    }
    </style>
    <title>projet 2</title>
  </head>
  <body>
    <h2>projet 2</h2>
    <h3>Le calendrier</h3>
    <p>Dans quel ordre souhaitez-vous qu'il s'affiche?</p>
    <form action='#' method='post'>
      <?= RadioFromArray($options, "sort") ?> 
      <input type='submit' value='sort'/>
    </form>
    <?= TableFromArray($myArray, ["Mois de l'année"], true) ?>
  </body>
</html>