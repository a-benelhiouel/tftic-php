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

if(isset($_POST["month"]) && ($_POST["month"]) != "") {
  $month = $_POST["month"];
  $result = $nbDays[$month-1];
}

$search=" <div class='search'>
            <form action='#' method='post'>
              <label for='month'>Action</label>
              <select name='month' id='month'>
                <option value=''></option>
                <option value='1'>Janvier</option>
                <option value='2'>Fevrier</option>
                <option value='3'>Mars</option>
                <option value='4'>Avril</option>
                <option value='5'>Mai</option>
                <option value='6'>Juin</option>
                <option value='7'>Juillet</option>
                <option value='8'>Aout</option>
                <option value='9'>Septembre</option>
                <option value='10'>Octobre</option>
                <option value='11'>Novembre</option>
                <option value='12'>Decembre</option>              
              </select>
              <input type='submit' value='Search'/>
            </form>
            <p>$result</p>
          </div>";

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
    table {
	    display: table;
      border: medium solid darkblue;
      width: 80%;
      height: 80%;
      margin: auto;
      margin-bottom: 5ch;
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
      width: 50%;
      text-align: center;
    }
    </style>
    <title>Exo6.12c</title>
  </head>
  <body>
    <h2>Exo6.12c</h2>
    <h3>Le calendrier</h3>
    <main class="main-content">
      <section class="calendar">
        <h3>Voici le calendrier avec le nombre de jour par mois.</h3>
        <?= $calendar ?>
      </section>
      <section class="day-in-month">
        <h3>Rechercher le nombre de jour par mois :</h3>
        <?= $search ?>
      </section>
    </main>
  </body>
</html>