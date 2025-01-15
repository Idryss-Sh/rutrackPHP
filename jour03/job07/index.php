<?php
// Chaîne de caractères initiale
$str = "Certaines choses changent, et d'autres ne changeront jamais.";

$resultat = "";

$longueur = strlen($str);

for ($i = 0; $i < $longueur; $i += 2) {
    if ($i + 1 < $longueur) {
        $resultat .= $str[$i + 1] . $str[$i];
    } else {
        $resultat .= $str[$i];
    }
}

echo $resultat;
?>
