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

$sql = "SELECT SUM(superficie) AS superficie FROM etage";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Superficie Totale des Étages</title>
</head>
<body>

<table border="1">
    <thead>
        <tr>
            <th>Superficie Totale</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if ($result->num_rows > 0) {
            
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["superficie"] . "</td>";
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
