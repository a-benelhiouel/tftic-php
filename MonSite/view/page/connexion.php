<h2>Connexion</h2>
<form action="#" method="post">
    <label for="nom">Nom :</label>
    <input type="text" name="nom" id="nom" pattern="[A-Za-z-]{3,15}" required <?= ($valueNom) ?>>
    <label for="prenom">Prenom :</label>
    <input type="text" name="prenom" id="prenom" pattern="[A-Za-z-]{3,15}" required <?= ($valuePrenom) ?> >
    <input type="submit" value="Connexion">
    <p>tentatives : <?= ($_SESSION["count"]); ?>/3</p>
</form>
<p <?= ($errorColor) ?>><?= $message; ?></p>