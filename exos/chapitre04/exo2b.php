<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lanceur de balles</title>
</head>
<body>
    <form action="#" method="post">
        <p>Prêt ?</p>
        <input type="radio" name="pret" value="true" id="pretOui">
        <label for="pretOui">Oui</label>
        <input type="radio" name="pret" value="false" id="pretNon">
        <label for="pretNon">Non</label>

        <p>Panier Vide ?</p>
        <input type="radio" name="panierVide" value="true" id="panierVideOui">
        <label for="panierVideOui">Oui</label>
        <input type="radio" name="panierVide" value="false" id="panierVideNon">
        <label for="panierVideNon">Non</label>

        <input type="submit" value="Tester">
    </form>
    <?php
        if(isset($_POST["pret"], $_POST["panierVide"]))
        {
            $pret = $_POST["pret"];

        $panierVide = $_POST["panierVide"];

        if($pret == "true" && $panierVide == "false")
        {
            echo "<p>Lancer la balle</p>";
        }
        else
        {
            echo "<p>Ne pas lancer la balle</p>";
            echo "<ul>";
            if($pret == "false")
            {
                echo "<li>car vous n'êtes pas prêt</li>";
            }

            if($panierVide == "true")
            {
                echo "<li>car le panier est vide</li>";
            }
            echo "</ul>";
        }
        }
    ?>
</body>
</html>