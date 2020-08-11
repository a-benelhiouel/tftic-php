<?php

$myTab = [20, 5, 24, 19, 18, 17, 16, 7,9, 15, 11, 13, 21];

$options = ["-", "biggest", "smallest", "ascending", "descending"];

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

function SelectFromArray(array $array, string $name, string $id) {
    echo '<br>$name : ' . $name;
    echo '<br>$_POST[$name] : ' . $_POST[$name];
    echo '<br>$array[$_POST[$name]] : ' . $array[$_POST[$name]];
    echo "<br>";
    
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

function SortedArray(array $array, $desc = false) {
    $desc ? rsort($array) : sort($array);
    return $array;
}

if(isset($_POST["option"])) {
    $option = $options[$_POST["option"]];
    $output = '<h3>Result :</h3>';
    
    switch($option) {
        case "biggest":
            $output = '<p>The biggest number in the array is '  . max($myTab) . '</p>';
            break;
        case "smallest":
            $output = '<p>The smallest number in the array is '  . min($myTab) . '</p>';
            break;
        case "ascending":
            $output .= TableFromArray(SortedArray($myTab));
            break;
        case "descending":
            $output .= TableFromArray(SortedArray($myTab, true));
            break;
        default:
            $output = "<p>Select an option in the list</p><br>";
    }
} else {
    $output = "";
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
    table tr td {    
        border: thin solid darkred;
        min-width: 3ch;
        text-align: center;
    }
    </style>
    <title>projet 1</title>
  </head>
  <body>
    <h2>projet 1</h2>
    <section class="my-array">
        <h3>My array :</h3>
        <?= TableFromArray($myTab) ?>
    </section>
    <section class="options">
        <form action='#' method='post'>
        <?= SelectFromArray($options, "option", "options") ?>
        <input type='submit' value='GO'/>
        </form>
    </section>
    <section class="result">
        <?= $output ?>
    </section>
  </body>
</html>