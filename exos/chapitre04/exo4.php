<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Calculatrice</title>
  </head>
  <body>
    <h2>Calculatrice</h2>
    <form action="#" method="post">
        <input type="number" name="a" value="0" step="any"/>
        <select name="operator" id="operator" step="any">
            <option value="plus">+</option>
            <option value="minus">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
        <input type="number" name="b" value="0" step="any"/>
      <input type="submit" value="=" />
    </form>
    <?php

    if(isset($_POST["operator"]) && isset($_POST["a"]) && isset($_POST["b"])) {
        $a = $_POST["a"];
        $b = $_POST["b"];
        $operator = $_POST["operator"];
        switch($operator) {
        case "plus":
            echo $a + $b;
            break;
        case "minus":
            echo $a - $b;
            break;
        case "multiply":
            echo $a * $b;
            break;
        case "divide":
            if($b!=0){
            echo $a / $b;} else {
            echo "division par 0 impossible";
            }
            break;
        default:
                echo "<p>Erreur : operation non reconnue</p><br>";
        }
    }

?>
  </body>
</html>
