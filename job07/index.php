<?php

$str = "Certaines choses changent, et d'autres ne changeront jamais.";

$new_str = "";

for ($i = 0; isset($str[$i + 1]); $i++) {
    $new_str .= $str[$i + 1];
}
$new_str .= $str[0];

echo $new_str;
?>
