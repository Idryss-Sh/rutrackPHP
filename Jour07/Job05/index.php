<?php
session_start();

if (!isset($_SESSION['grille']) || isset($_POST['reset'])) {
    $_SESSION['grille'] = array_fill(0, 3, array_fill(0, 3, '-'));
    $_SESSION['joueur'] = 'X';
    $_SESSION['vainqueur'] = null;
    $_SESSION['match_nul'] = false;
}

if (isset($_POST['cell']) && $_SESSION['vainqueur'] === null && !$_SESSION['match_nul']) {
    list($row, $col) = explode(',', $_POST['cell']);
    if ($_SESSION['grille'][$row][$col] === '-') {
        $_SESSION['grille'][$row][$col] = $_SESSION['joueur'];
        if (check_victory($_SESSION['grille'], $_SESSION['joueur'])) {
            $_SESSION['vainqueur'] = $_SESSION['joueur'];
        } elseif (check_draw($_SESSION['grille'])) {
            $_SESSION['match_nul'] = true;
        } else {
            $_SESSION['joueur'] = $_SESSION['joueur'] === 'X' ? 'O' : 'X';
        }
    }
}


function check_victory($grille, $joueur) {
    
    for ($i = 0; $i < 3; $i++) {
        if ($grille[$i][0] === $joueur && $grille[$i][1] === $joueur && $grille[$i][2] === $joueur) return true;
        if ($grille[0][$i] === $joueur && $grille[1][$i] === $joueur && $grille[2][$i] === $joueur) return true;
    }
    if ($grille[0][0] === $joueur && $grille[1][1] === $joueur && $grille[2][2] === $joueur) return true;
    if ($grille[0][2] === $joueur && $grille[1][1] === $joueur && $grille[2][0] === $joueur) return true;

    return false;
}

function check_draw($grille) {
    foreach ($grille as $row) {
        if (in_array('-', $row)) return false;
    }
    return true;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Jeu de Morpion</title>
    <style>
        table { border-collapse: collapse; }
        td { border: 1px solid black; width: 50px; height: 50px; text-align: center; }
    </style>
</head>
<body>
    <h1>Jeu de Morpion</h1>
    <?php if ($_SESSION['vainqueur'] !== null): ?>
        <p><?php echo $_SESSION['vainqueur']; ?> a gagné !</p>
    <?php elseif ($_SESSION['match_nul']): ?>
        <p>Match nul !</p>
    <?php endif; ?>
    
    <form method="POST" action="">
        <table>
            <?php for ($row = 0; $row < 3; $row++): ?>
                <tr>
                    <?php for ($col = 0; $col < 3; $col++): ?>
                        <td>
                            <?php if ($_SESSION['grille'][$row][$col] === '-'): ?>
                                <button type="submit" name="cell" value="<?php echo $row . ',' . $col; ?>">-</button>
                            <?php else: ?>
                                <?php echo $_SESSION['grille'][$row][$col]; ?>
                            <?php endif; ?>
                        </td>
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>
        </table>
        <button type="submit" name="reset">Réinitialiser la partie</button>
    </form>
</body>
</html>
