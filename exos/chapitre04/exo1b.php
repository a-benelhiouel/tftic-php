<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bissextile</title>
</head>
<body>
    <form action="#" method="POST">
        <label for="annee">Entrez une année : </label>
        <input type="number" name="annee" id="annee">
        <input type="submit" value="Tester">
    </form>

    <?php
    // vérifier si le formulaire a été envoyé
    if(isset($_POST["annee"]))
    {
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
    }

    

    ?>
</body>
</html>