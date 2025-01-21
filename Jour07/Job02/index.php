<?php

$cookie_lifetime = time() + (30 * 24 * 60 * 60);

if (!isset($_COOKIE['nbvisites'])) {
    setcookie('nbvisites', 1, $cookie_lifetime);
    $nbvisites = 1;
} else {
    $nbvisites = $_COOKIE['nbvisites'] + 1;
    setcookie('nbvisites', $nbvisites, $cookie_lifetime);
}

if (isset($_POST['reset'])) {
    setcookie('nbvisites', 0, $cookie_lifetime);
    $nbvisites = 0;
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

echo "Nombre de visites : " . (isset($nbvisites) ? $nbvisites : 0);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Compteur de visites</title>
</head>
<body>
    <form method="POST" action="">
        <button type="submit" name="reset">Reset</button>
    </form>
</body>
</html>
