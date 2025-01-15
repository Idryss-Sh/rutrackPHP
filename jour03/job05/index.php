<?php

$str = "On n'est pas le meilleur quand on le croit mais quand on le sait";

$dic = array("consonnes" => 0, "voyelles" => 0);


$voyelles = 'aeiouyAEIOUY';

for ($i = 0; isset($str[$i]); $i++) {
    $char = $str[$i];
    if (strpos($voyelles, $char) !== false) {
        $dic["voyelles"]++;
    } elseif (ctype_alpha($char)) {
        $dic["consonnes"]++;
    }
}

echo "<table border='1'>
        <thead>
            <tr>
                <th>Voyelles</th>
                <th>Consonnes</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{$dic['voyelles']}</td>
                <td>{$dic['consonnes']}</td>
            </tr>
        </tbody>
      </table>";
?>