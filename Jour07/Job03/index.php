<?php
session_start();

if (!isset($_SESSION['prenoms'])) {
    $_SESSION['prenoms'] = [];
}

if (isset($_POST['prenom']) && !empty($_POST['prenom'])) {
    $_SESSION['prenoms'][] = $_POST['prenom'];
}

if (isset($_POST['reset'])) {
    $_SESSION['prenoms'] = [];
}

$prenomsList = isset($_SESSION['prenoms']) ? $_SESSION['prenoms'] : [];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Liste des Prénoms</title>
</head>
<body>
    <form method="POST" action="">
        <label for="prenom">Prénom:</label>
        <input type="text" id="prenom" name="prenom" required>
        <button type="submit">Ajouter</button>
        <button type="submit" name="reset">Réinitialiser</button>
    </form>

    <?php if (!empty($prenomsList)): ?>
        <h2>Liste des Prénoms</h2>
        <ul>
            <?php foreach ($prenomsList as $prenom): ?>
                <li><?php echo htmlspecialchars($prenom); ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</body>
</html>
