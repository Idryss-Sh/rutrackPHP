<?php

$str = "Dans l'espace, personne ne vous entend crier";


$compteur = 0;

for ($i = 0; isset($str[$i]); $i++) {
    $compteur++;
}

echo "Le nombre de caractères présents dans la chaîne est : $compteur";
?>
