<?php
/**
 *
 * @param array 
 * @param bool 
 *
 * @return array 
 */
function bubblesort(array $tab, bool $croissant = true): array {
    $n = count($tab);
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if (($croissant && $tab[$j] > $tab[$j + 1]) || (!$croissant && $tab[$j] < $tab[$j + 1])) {
                
                $temp = $tab[$j];
                $tab[$j] = $tab[$j + 1];
                $tab[$j + 1] = $temp;
            }
        }
    }
    return $tab;
}

$tab = ["abc", "ghi", "def"];

echo "Tri croissant:\n";
print_r(bubblesort($tab, true));

echo "Tri décroissant:\n";
print_r(bubblesort($tab, false));
?>