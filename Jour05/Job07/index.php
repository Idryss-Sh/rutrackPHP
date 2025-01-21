<!DOCTYPE html>
<html>
<head>
    <title>Formulaire de Transformation</title>
</head>
<body>

<form method="post">
    <label for="str">Texte :</label>
    <input type="text" id="str" name="str">
    <br>
    <label for="transformation">Transformation :</label>
    <select id="transformation" name="transformation">
        <option value="gras">Gras</option>
        <option value="cesar">César</option>
        <option value="plateforme">Plateforme</option>
    </select>
    <br>
    <input type="submit" value="Valider">
</form>

<?php
function gras($str) {
    return preg_replace('/\b([A-Z][a-z]*)\b/', '<b>$1</b>', $str);
}

function cesar($str, $decal = 2) {
    $result = '';
    $length = strlen($str);
    for ($i = 0; $i < $length; $i++) {
        $char = $str[$i];
        if (ctype_alpha($char)) {
            $offset = ord(ctype_upper($char) ? 'A' : 'a');
            $char = chr(fmod(((ord($char) + $decal) - $offset), 26) + $offset);
        }
        $result .= $char;
    }
    return $result;
}

function plateforme($str) {
    return preg_replace('/\b(\w*me)\b/i', '$1_', $str);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $str = $_POST['str'];
    $transformation = $_POST['transformation'];
    
    switch ($transformation) {
        case 'gras':
            echo gras($str);
            break;
        case 'cesar':
            echo cesar($str);
            break;
        case 'plateforme':
            echo plateforme($str);
            break;
        default:
            echo $str;
            break;
    }
}
?>

</body>
</html>
