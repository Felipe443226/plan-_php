
<?php

$radio = intval(readline("Introduce el radio: "));

$perimetroCircunferencia = 2 * 3.1416 * $radio;

$areaCirculo = 3.1416 * pow($radio, 2);

$volumenEsfera = (4 / 3) * 3.1416 * pow($radio, 3);

echo "Perímetro de la circunferencia: {$perimetroCircunferencia}\n";
echo "Área del círculo: {$areaCirculo}\n";
echo "Volumen de la esfera: {$volumenEsfera}\n";
