<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Distributeur de boissons</title>
  </head>
  <body>
    <form action="#" method="post">
        <h2>Distributeur de boissons</h2>
        <label for="drinks" type="select">Choississez une boisson</label>
        <select name="drink" id="drinks">
            <option value="">--Please choose an option--</option>
            <option value="cola">Cola</option>
            <option value="orange">Orange</option>
        </select>
      <input type="submit" value="Commander" />
    </form>
    <?php
    

    $stockCola = 2;
    $stockOrange = 3;

    if(isset($_POST["drink"])) {    
        $drink = $_POST["drink"];
        switch($drink) {
        case "cola":
            echo $stockCola ? "Voici votre cola" : "Il ne reste plus de cola";
            $stockCola--;
            break;
        case "orange":
            echo $stockOrange ? "Voici votre orangeade" : "Il ne reste plus d'orangeade";
            $stockOrange--;
            break;
        default:
                echo "<p>boisson selectionnée indisponible</p><br>";
        }
        echo "<p>Il reste <ul><li>$stockCola colas</li><li>$stockOrange orangeades</li></ul>";
    }

?>
  </body>
</html>
