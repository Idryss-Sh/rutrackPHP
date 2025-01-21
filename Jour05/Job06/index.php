<?php
function leetSpeak($str) {
    $leetMapping = array(
        'A' => '4', 'a' => '4',
        'E' => '3', 'e' => '3',
        'I' => '1', 'i' => '1',
        'O' => '0', 'o' => '0',
        'S' => '5', 's' => '5',
        'T' => '7', 't' => '7'
    );

    $leetStr = strtr($str, $leetMapping);

    return $leetStr;
}

echo leetSpeak("Bonjour tout le monde");
?>
