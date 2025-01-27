<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jour08";


$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connexion échouée: " . $conn->connect_error);
}

$sql = "SELECT nom, capacite FROM salles";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Liste des Salles</title>
</head>
<body>

<table border="1">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Capacité</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if ($result->num_rows > 0) {
            // Afficher chaque ligne de la table
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["nom"] . "</td>";
                echo "<td>" . $row["capacite"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='2'>Aucun résultat trouvé</td></tr>";
        }
        $conn->close();
        ?>
    </tbody>
</table>

</body>
</html>
