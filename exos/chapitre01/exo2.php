<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$nom = $_POST["nom"];
$prenom = $_POST["prenom"];

echo "<p>Votre message a bien été envoyé ! Merci $nom $prenom</p>";

?>
</body>
</html>
