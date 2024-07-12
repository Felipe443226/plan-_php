
<?php

echo "Ingrese la coordenada x : ";
$x = readline();

echo "Ingrese la coordenada y : ";
$y = readline();

if ($x > 0 && $y > 0) {
    echo "El punto se encuentra en el primer cuadrante.";
} 

elseif ($x < 0 && $y > 0) {
    echo "El punto se encuentra en el segundo cuadrante.";
} 

elseif ($x < 0 && $y < 0) {
    echo "El punto se encuentra en el tercer cuadrante.";
} 

elseif ($x > 0 && $y < 0) {
    echo "El punto se encuentra en el cuarto cuadrante.";
} 

else {
    echo "El punto está en el origen.";
}
