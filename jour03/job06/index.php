<?php

$str = "Les choses que l'on Possède finissent par nous posséder.";

$inversee = "";

for ($i = strlen($str) - 1; $i >= 0; $i--) {
    $inversee .= $str[$i];
}

echo $inversee;
?>
