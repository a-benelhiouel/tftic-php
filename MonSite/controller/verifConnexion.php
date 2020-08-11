<?php
$message = "";
$errorColor = '';
$valueNom = "";
$valuePrenom = "";
if (isset($_POST["nom"]) || isset($_POST["prenom"])) {
    $valueNom = "value=" . ($_POST["nom"]);
    $valuePrenom = "value=" . ($_POST["prenom"]);
    $_SESSION["count"]++;
}
if (false) {
    $_SESSION["count"]++;
}

// vérifier si déjà essayé de se connecter
if (isset($_SESSION["count"])) {
    $message = "Veuillez vous connecter";
    
    if($_SESSION["count"] > 3) {
        header("Location:./index.php?section=limit");
    }
}
// si 1x sur la page
else
{
    $_SESSION["count"] = 0;
}
// si le formulaire a été soumis
if (isset($_POST["nom"]) && isset($_POST["prenom"])) {
    // vérifer que le champ n'est pas vide
    if($_POST["nom"] != "" && $_POST["prenom"] != "")
    {
        if($_POST["nom"] === "Ben" && $_POST["prenom"] === "Alex") {
            $errorColor = 'style="color:green;"';
            // enregistrer le nom dans variable session
            $_SESSION["nom"] = $_POST["nom"];
            $_SESSION["prenom"] = $_POST["prenom"];
            // rediriger vers la page d'accueil
            header("Location:index.php?section=accueil");
        } else {
            $errorColor = 'style="color:red;"';
            $message .= " : Nom ou prénom invalide";
        }
    } else {
        $errorColor = 'style="border-color:red;"';
    }
}



include("view/page/connexion.php");

?>
