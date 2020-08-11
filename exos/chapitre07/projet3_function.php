<?php

$months = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Décembre"];
$nbDays = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];

$calendar = "";

  $calendar = "<table><tr><th>Mois de l'année</th><th>Jours par mois</th></tr><tr>";
    for($i= 0; $i < 10; $i++) {
      $calendar.= "<tr><td>$months[$i]</td><td>$nbDays[$i]</td></tr>";
    };

$calendar.= "</tr></table>";
$result = "";

function TableFromArray(array $body = [[]], array $header = [[]], $column = false) {
  $rowStart = "<tr>";
  $rowEnd = "</tr>";
  $newRow = ($column ? "</tr><tr>" : "") ;

  $table = "<table>";

  

  if($column) {
    $table .= $rowStart;

  for($i = 0; $i < count($header); $i++) {
    foreach($header[$i] as $array) {
      for($j = 0; $j < count($array); $j++) {
        $table .= "<th>$array[$j]</th>";
      }
    }
    $table .= ($i === count($header) -1 ? $rowEnd : "");
  };

  for($i = 0; $i < count($body); $i++) {
    foreach($body[$i] as $array) {
      for($j = 0; $j < count($array); $j++) {
        $table .= "<td>$array[$j]</td>";
      }
    }
    $table .= ($i === count($body) -1 ? $rowEnd : $newRow);
  };

  } else {

  for($i = 0; $i < count($header); $i++) {
    $table .= ($i === 0 ? $rowStart : '');
    $table .= "<th>$header[$i]</th>";
    $table .= ($i === count($header) -1 ? $rowEnd : "");
  };
  for($i = 0; $i < count($array); $i++) {
    $table .= "<td>$array[$i]</td>";
  };
  }
  
  $table .= "</table>";

  return $table;
}

echo TableFromArray([[$months]], [["Mois de l'année", "Jours par mois"]], true);

function SelectFromArray(array $array, string $name, string $id) {
  $select = "
  <label for=$id>$name</label>
  <select name=$name id=$id>";
  $selected = isset($_POST[$name]) ? $_POST[$name] : 0;
  for($i=0; $i < count($array); $i++) {
      $select .= "<option value=" . ($i) . ($selected === $i ? ' selected' : '') . " >" . ($array[$i]) . "</option>";
  }
  $select .= "</select>";

  return $select;
}

if(isset($_POST["month"]) && ($_POST["month"]) != "") {
  $month = $_POST["month"];
  $result = $nbDays[$month];
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
    h1, h2, h3 {
      margin: 1ch auto;
    }
    main {
      display: grid;
      box-sizing: border-box;
      grid:
        repeat(auto-fit, minmax(30ch, 1fr))
        / repeat(auto-fit, minmax(30ch, 1fr));
      gap: 1ch;
      padding: 1ch;
      margin: 1ch;
    }
    section {
      border: thin solid black;
    }
    section > form:not(h3) {
      display: inline;
    }
    div.search {
      display: flex;
      justify-content: space-evenly;
      align-content: center;
      padding: 1ch;
    }
    div.search > * {
      margin: 0;
    }

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
    <title>projet 3_function</title>
  </head>
  <body>
    <h2>projet 3_function</h2>
    <h3>Le calendrier</h3>
    <main class="main-content">
      <section class="calendar">
        <h3>Voici le calendrier avec le nombre de jour par mois.</h3>
        <?= $calendar ?>
      </section>
      <section class="day-in-month">
        <h3>Rechercher le nombre de jour par mois :</h3>
        <div class='search'>
            <form action='#' method='post'>
              <?= SelectFromArray($months, "month", "months") ?>
              <input type='submit' value='Search'/>
            </form>
            <?= "<p>$result</p>" ?>
          </div>
      </section>
    </main>
  </body>
</html>