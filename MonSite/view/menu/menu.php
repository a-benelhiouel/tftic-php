<?php
// si var session nom
if(isset($_SESSION["nom"]))
{
    // afficher Bienvenue + nom
    echo "<p>Bienvenue ". $_SESSION['nom']. " ". $_SESSION['prenom']. "</p>";
}
?>

<ul>
    <li><a href="index.php?section=accueil">Accueil</a></li>
    <li><a href="index.php?section=apropos">A propos</a></li>
    <li><a href="index.php?section=contact">Contact</a></li>
<?php
// si var session nom
if(isset($_SESSION["nom"]))
{
    // afficher deconnexion
    echo '<li><a href="index.php?section=deconnexion">Déconnexion</a></li>';
}
else
{
    echo '<li><a href="index.php?section=connexion">Connexion</a></li>';
}

?>

    
</ul>