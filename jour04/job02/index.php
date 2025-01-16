<?php

if (!empty($_GET)) {
    echo "<table border='1'>";
    echo "<tr><th>Argument</th><th>Valeur</th></tr>";
    
    foreach ($_GET as $arg => $val) {
        echo "<tr><td>" . htmlspecialchars($arg) . "</td><td>" . htmlspecialchars($val) . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "Aucun argument GET n'a été passé.";
}
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
