<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jour08";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connexion échouée: " . $conn->connect_error);
}

$sql = "SELECT COUNT(*) AS nb_etudiants FROM etudiants";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Nombre Total d'Étudiants</title>
</head>
<body>

<table border="1">
    <thead>
        <tr>
            <th>Nombre Total d'Étudiants</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if ($result->num_rows > 0) {
            
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["nb_etudiants"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td>Aucun résultat trouvé</td></tr>";
        }
        $conn->close();
        ?>
    </tbody>
</table>

</body>
</html>
