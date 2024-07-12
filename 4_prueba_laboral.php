
<?php

echo "ingresa tu nombre: ";
$nombre = readline();

echo "ingresa la cantidad total de preguntas que te realizaron: ";
$total_Preguntas = readline();

echo "ingresa la cantidad de preguntas que contestaste correctamente: ";
$correctas = readline();

$porcentaje_Correcto = ($correctas / $total_Preguntas) * 100;

if ($porcentaje_Correcto >= 90) {
    $nivel = "Nivel superior";
} 

elseif ($porcentaje_Correcto >= 75 && $porcentaje_Correcto < 90) {
    $nivel = "Nivel medio";
} 

elseif ($porcentaje_Correcto >= 50 && $porcentaje_Correcto < 75) {
    $nivel = "Nivel regular";
} 

else {
    $nivel = "Fuera de nivel";
}

echo "\nTu nivel es: $nivel\n";
