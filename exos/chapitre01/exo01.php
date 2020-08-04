<?php
// Déclarer et initialiser les 2 variables
$nb1 = 5;
$nb2 = 7;


// Afficher la valeur des 2 variables 
// echo $nomVariable  ou echo "Texte" ou echo "Texte $nomVariable"
// Avant a = 5 et b = 7
echo "Avant nb1 = $nb1 et nb2 = $nb2 <br>";


// Echanger le contenu des 2 variables
$temp = $nb1;
$nb1 = $nb2;
$nb2 = $temp;


// Afficher la valeur des 2 variables
// Après a = 7 et b = 5
echo "Après nb1 = " . $nb1 . " et nb2 = " . $nb2 . "<br>";
?>
