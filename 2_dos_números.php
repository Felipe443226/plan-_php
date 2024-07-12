
<?php

$numero1 = intval(readline("ingresa el primer número: "));
$numero2 = intval(readline("ingresa el segundo número: "));

if ($numero1 > $numero2) {
    echo "La suma de ambos números es: ", $numero1 + $numero2, "\n";
    echo "La diferencia entre ambos números es: ", $numero1 - $numero2, "\n";

 } else {
    echo "El producto de ambos números es: ", $numero1 * $numero2, "\n";
    echo "La división del primer número y el segundo es: ", $numero1 / $numero2, "\n";
}
