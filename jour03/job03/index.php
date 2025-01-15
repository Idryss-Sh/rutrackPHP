<?php

$str = "I'm sorry Dave I'm afraid I can't do that";


$vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
for ($i = 0; isset($str[$i]); $i++) {
    if (in_array($str[$i], $vowels)) {
        echo $str[$i];
    }
}
?>
