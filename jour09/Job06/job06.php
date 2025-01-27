<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jour08";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connexion échouée: " . $conn->connect_error);
}

$date_limite = date('Y-m-d', strtotime('-18 years'));

$sql = "SELECT * FROM etudiants WHERE date_de_naissance > '$date_limite'";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Liste des Étudiants de Moins de 18 Ans</title>
</head>
<body>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Date de Naissance</th>
            <th>Sexe</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if ($result->num_rows > 0) {
            
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["nom"] . "</td>";
                echo "<td>" . $row["prenom"] . "</td>";
                echo "<td>" . $row["naissance"] . "</td>";
                echo "<td>" . $row["sexe"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='6'>Aucun résultat trouvé</td></tr>";
        }
        $conn->close();
        ?>
    </tbody>
</table>

</body>
</html>
