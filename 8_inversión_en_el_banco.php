
<?php

$inversion_inicial = 10000; 
$tasa_interes = 0.05; 
$reinvertir_interes = 7000; // Umbral 

$intereses = $inversion_inicial * $tasa_interes;

if ($intereses > $reinvertir_interes) {
    $inversion_inicial += $intereses;
}

$camtidad_final = $inversion_inicial;

echo "El monto final en la cuenta es: $" . $camtidad_final;
