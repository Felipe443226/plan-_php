
<?php

$metros = intval(readline("Ingrese la cantidad en metros: "));

echo "1) Centímetros\n";
echo "2) Kilómetros\n";
echo "3) Pulgadas\n";
$opcion = intval(readline("seleccione una opcion : "));

switch ($opcion) {
    case '1':
        $resultado = $metros * 100;
        echo "la cantidad en centímetros es: {$resultado} cm\n";
        break;

    case '2':
        $resultado = $metros / 1000;
        echo "la cantidad en kilómetros es: {$resultado} km\n";
        break;

    case '3':
        $resultado = $metros / 0.0254; // 
        echo "la cantidad en pulgadas es: {$resultado} pulgadas\n";
        break;

}
