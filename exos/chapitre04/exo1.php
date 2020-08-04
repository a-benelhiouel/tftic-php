<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bissextile</title>
</head>
<body>
    <?php
    // récupérer l'année
    $annee = $_POST["annee"];
    // tester et afficher
    if(($annee%4==0 && $annee % 100 != 0) || ($annee % 400 ==0))
    {
        echo "L'année $annee est bissextile";
    }
    else
    {
        echo "L'année $annee n'est pas bissextile";
    }

    ?>
</body>
</html>