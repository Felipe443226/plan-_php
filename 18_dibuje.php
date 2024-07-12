
<?php

$lado = readline("Ingrese el tamaño del lado: ");
$tipo = readline("Ingrese el tipo de figura (cuadrado/triangulo): ");

$lado = intval(trim($lado));
$tipo = trim($tipo);

if ($lado <= 0) {
    echo "El tamaño del lado debe ser mayor a 0.\n";
    exit();
}

if ($tipo === 'cuadrado') {
    echo "Dibujando un cuadrado de lado {$lado}:\n";
    for ($i = 0; $i < $lado; $i++) {
        for ($j = 0; $j < $lado; $j++) {
            echo "* ";
        }
        echo "\n";
    }
} 
elseif ($tipo === 'triangulo') {
    echo "Dibujando un triángulo equilátero de lado {$lado}:\n";
    for ($i = 0; $i < $lado; $i++) {
        echo str_repeat("* ", $i + 1) . "\n";
    }
} 
else {
    echo "Tipo de figura desconocido.\n";
}