<?php
function is_prime($num) {
    if ($num <= 1) return false;
    if ($num <= 3) return true;
    if ($num % 2 == 0 || $num % 3 == 0) return false;
    for ($i = 5; $i * $i <= $num; $i += 6) {
        if ($num % $i == 0 || $num % ($i + 2) == 0) return false;
    }
    return true;
}

for ($i = 2; $i <= 1000; $i++) {
    if (is_prime($i)) {
        echo $i . "<br>";
    }
}
?>
