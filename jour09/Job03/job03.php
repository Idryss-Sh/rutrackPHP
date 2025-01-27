<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jour08";

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connexion échouée: " . $conn->connect_error);
}

// Exécuter la requête SQL pour récupérer les informations des étudiantes de sexe féminin
$sql = "SELECT prenom, nom, naissance FROM etudiants WHERE sexe = 'Femme'";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Liste des Étudiantes</title>
</head>
<body>

<table border="1">
    <thead>
        <tr>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Date de Naissance</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if ($result->num_rows > 0) {
            // Afficher chaque ligne de la table
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["prenom"] . "</td>";
                echo "<td>" . $row["nom"] . "</td>";
                echo "<td>" . $row["naissance"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>Aucun résultat trouvé</td></tr>";
        }
        $conn->close();
        ?>
    </tbody>
</table>

</body>
</html>
