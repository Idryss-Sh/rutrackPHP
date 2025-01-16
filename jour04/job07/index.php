<?php
function dessinerMaison($largeur, $hauteur) {
    
    for ($i = 0; $i < $hauteur; $i++) {
        echo str_repeat("&nbsp;", $hauteur - $i - 1);
        echo str_repeat("*", 2 * $i + 1);
        echo "<br>";
    }
    
    for ($i = 0; $i < $hauteur; $i++) {
        echo "|";
        echo str_repeat("&nbsp;", $largeur - 2);
        echo "|<br>";
    }
    
    echo str_repeat("-", $largeur);
}

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['largeur']) && isset($_GET['hauteur'])) {
    $largeur = intval($_GET['largeur']);
    $hauteur = intval($_GET['hauteur']);

    dessinerMaison($largeur, $hauteur);
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire Maison</title>
</head>
<body>
    <form action="index.php" method="get">
        <label for="largeur">Largeur:</label>
        <input type="number" id="largeur" name="largeur" required><br><br>
        <label for="hauteur">Hauteur:</label>
        <input type="number" id="hauteur" name="hauteur" required><br><br>
        <input type="submit" value="Construire">
    </form>
</body>
</html>
