<?php

$temperature = [20, 20, 20, 24, 24, 19, 18, 17, 16, 24, 17, 18, 17, 17, 14, 14, 16, 16, 16, 17, 17, 19, 17, 20, 19, 20, 21, 21, 24, 17];

$hot = 0;
$cold = 100;


for($i= 0; $i < count($temperature); $i++) {
  $hot = $hot > $temperature[$i] ? $hot : $temperature[$i];
}

$cold = $hot;
for($i= 0; $i < count($temperature); $i++) {
  $cold = $cold < $temperature[$i] ? $cold : $temperature[$i];
}

$hottestDays = array_keys($temperature, $hot);
$coldestDays = array_keys($temperature, $cold);

$hottest = "<p style='font-weight: bold'>Il a fait le plus chaud " . (count($hottestDays) > 1 ? " les " : "le ");
for($i = 0; $i < count($hottestDays); $i++) {
  $hottest .= ($hottestDays[$i] + 1);
  if (count($hottestDays) > $i + 1) {
    $hottest .= (count($hottestDays)  == ($i + 2) ? " et " : ", ");
  }
}
$hottest .= " septembre.</p>";

$coldest = "<p>Il a fait le plus froid " . (count($coldestDays) > 1 ? " les " : "le ");
for($i = 0; $i < count($coldestDays); $i++) {
  $coldest .= ($coldestDays[$i] + 1);
  if (count($coldestDays) > $i + 1) {
    $coldest .= (count($coldestDays)  == ($i + 2) ? " et " : ", ");
  }
}
$coldest .= " septembre.</p>";

$avg = 0;
$sum = 0;
foreach($temperature as $n) {
  $sum = $sum + $n; 
}
$avg = $sum / count($temperature);
$average = "<p>La temperature moyenne a été de " . round($avg, 1) . " °C</p>";

$calendar = "<h4>Voici le calendrier avec leurs temperatures :</h4>";

$calendar .= "<table><tr>";
  for($i= 0; $i < count($temperature); $i++) {
    $calendar.= "<th>" . ($i + 1) . "</th>";
  };
  $calendar.= "</tr><tr>";
  for($i= 0; $i < count($temperature); $i++) {
    if(in_array( $i , $hottestDays )) {$color = 'hsl(0, 100%, 75%)';}
    else if (in_array( $i , $coldestDays )) {$color = 'hsl(240, 100%, 75%)';}
    else {$color = 'transparent';};
    $calendar.= "<td style='background:  $color '>$temperature[$i]</td>";
  };
$calendar.= "</tr></table>";

?>
<!DOCTYPE html>
<html lang="en">
  <head
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
      *{
        box-sizing: border-box;
      }
      body {
        display: flex;
        flex-direction: column;
        justify-content: space-evenly;
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
        width: max-content;
        padding: 1ch;
        margin: auto;
      }
      table {
        display: table;
        border: medium solid darkblue;
        margin: auto;
      }
      table tr {
        border: medium solid darkblue;
      }
      table tr th {
        background: lightgray;
        font-weight: bold;
      }
      table tr td {    
        border: thin solid darkblue;
        text-align: center;
      }
      th,
      td {
        border: solid 1px;
        text-align: center;
      }
    </style>
    <title>Exo6.12d</title>
  </head>
  <body>
    <h2>Exo6.12d</h2>
    <h3>Les temperatures du mois de septembre 2017</h3>
    <main class="main-content">
      <section class="calendar">
        <h3></h3>
        <?= $calendar ?>
        <?= $coldest ?>
        <?= $hottest ?>
        <?= $average ?>
      </section>
    </main>
  </body>
</html>