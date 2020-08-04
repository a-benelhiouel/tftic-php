<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lanceur</title>
</head>
<body>
    <?php
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
    ?>
</body>
</html>