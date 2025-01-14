<?php

$booleanVar = true;
$intVar = 42;
$stringVar = "Bonjour";
$floatVar = 3.14;


echo "<table border='1'>";
echo "<thead><tr><th>Type</th><th>Nom</th><th>Valeur</th></tr></thead>";
echo "<tbody>";


echo "<tr><td>Boolean</td><td>booleanVar</td><td>" . ($booleanVar ? 'true' : 'false') . "</td></tr>";
echo "<tr><td>Integer</td><td>intVar</td><td>$intVar</td></tr>";
echo "<tr><td>String</td><td>stringVar</td><td>$stringVar</td></tr>";
echo "<tr><td>Float</td><td>floatVar</td><td>$floatVar</td></tr>";

echo "</tbody></table>";
?>
