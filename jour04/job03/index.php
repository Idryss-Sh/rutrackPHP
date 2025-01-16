<?php

$nombreArguments = count($_POST);

echo "Nombre d'arguments POST: " . $nombreArguments;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire POST</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="arg1">Argument 1:</label>
        <input type="text" id="arg1" name="arg1"><br><br>
        <label for="arg2">Argument 2:</label>
        <input type="text" id="arg2" name="arg2"><br><br>
        <input type="submit" value="Soumettre">
    </form>
</body>
</html>
