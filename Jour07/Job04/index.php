<?php

$cookie_lifetime = time() + (30 * 24 * 60 * 60);

if (isset($_POST['deco'])) {
    setcookie('prenom', '', time() - 3600);
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

if (isset($_POST['prenom']) && !empty($_POST['prenom'])) {
    setcookie('prenom', $_POST['prenom'], $cookie_lifetime);
    header("Location: " . $_SERVER['PHP_SELF']); 
    exit();
}

$prenom = isset($_COOKIE['prenom']) ? $_COOKIE['prenom'] : null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulaire de Connexion</title>
</head>
<body>
    <?php if ($prenom === null): ?>
        <form method="POST" action="">
            <label for="prenom">Prénom:</label>
            <input type="text" id="prenom" name="prenom" required>
            <button type="submit" name="connexion">Connexion</button>
        </form>
    <?php else: ?>
        <p>Bonjour <?php echo htmlspecialchars($prenom); ?>!</p>
        <form method="POST" action="">
            <button type="submit" name="deco">Déconnexion</button>
        </form>
    <?php endif; ?>
</body>
</html>
