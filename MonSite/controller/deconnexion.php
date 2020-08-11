<?php
// détruire la session
session_destroy();
// vider les variables de session
unset($_SESSION["nom"]);
unset($_SESSION["count"]);
// rediriger vers connexion
header("Location:index.php?section=connexion");


?>