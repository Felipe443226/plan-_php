
<?php

$edad = 30; 
$sexo = 'femenino'; 

function calcular_Pulsaciones($edad, $sexo) {
    if ($sexo === 'femenino') {
        return (220 - $edad) / 10;
    } 
    
    else { // Si el sexo es masculino
        return (210 - $edad) / 10;
    }
}

$pulsaciones = calcular_Pulsaciones($edad, $sexo);

echo "las pulsaciones que debes tener por cada 10 segundos de ejercicio aeróbico son: " . $pulsaciones;
