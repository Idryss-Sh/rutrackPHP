<?php
session_start();

if (!isset($_SESSION['nbvisites'])) {
    $_SESSION['nbvisites'] = 0;
}

if (isset($_POST['reset'])) {
    $_SESSION['nbvisites'] = 0;
} else {
   
    $_SESSION['nbvisites']++;
}

echo "Nombre de visites : " . $_SESSION['nbvisites'];
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
