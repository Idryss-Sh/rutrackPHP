<?php
function calcule($num1, $operation, $num2) {
    switch ($operation) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        case '/':
            return $num1 / $num2;
        case '%':
            return $num1 % $num2;
        default:
            return "Opération invalide";
    }
}

echo calcule(10, '+', 5);
echo calcule(10, '-', 5);
echo calcule(10, '*', 5);
echo calcule(10, '/', 5);
echo calcule(10, '%', 3);
?>
