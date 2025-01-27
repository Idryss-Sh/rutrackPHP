<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jour08";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connexion échouée: " . $conn->connect_error);
}

$sql = "SELECT prenom, nom, naissance FROM etudiants WHERE naissance BETWEEN '1998-01-01' AND '2018-12-31'";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Liste des Étudiants</title>
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