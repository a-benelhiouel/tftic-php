<?php
// si il y a une section
if (isset($_GET["section"])) {
    switch($_GET["section"])
    {
        case "accueil":
            include("view/page/accueil.php");
            $_SESSION["count"] = 0;
        break;
        case "apropos":
            include("view/page/apropos.php");
        break;
        case "contact":
            include("view/page/contact.php");
        break;
        case "connexion":
            include("controller/verifConnexion.php");
        break;
        case "limit":
            include("view/page/limit.php");
        break;
        case "deconnexion":
            include("controller/deconnexion.php");
        break;
        default:
            include("view/page/notfound.php");
        break;
    }
}
// si pas de section ==> 1x sur le site
else {
    include("view/page/accueil.php");
}

?>