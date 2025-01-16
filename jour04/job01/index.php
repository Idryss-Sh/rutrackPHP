<?php

$nombreArguments = count($_GET);

echo "Nombre d'arguments GET: " . $nombreArguments;
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire GET</title>
</head>
<body>
    <form action="index.php" method="get">
        <label for="arg1">Argument 1:</label>
        <input type="text" id="arg1" name="arg1"><br><br>
        <label for="arg2">Argument 2:</label>
        <input type="text" id="arg2" name="arg2"><br><br>
        <input type="submit" value="Soumettre">
    </form>
</body>
</html>
