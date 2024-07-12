
<?php

echo "ingrese el monto de la hipoteca:";
$hipoteca = readline();

if ($hipoteca >= 1000000) {

    $inversion_total = $hipoteca;
    $inversion_persona = $hipoteca / 2; 
    $inversion_socio = $inversion_total - $inversion_persona; 

} 

else {
    
    $inversion_total = $hipoteca * 2; 
    $inversion_persona = $inversion_total / 2; 
    $inversion_socio = $inversion_total / 2; 
}

echo "la inversión total será de: $" . $inversion_total . "\n";
echo "usted invertirá: $" . $inversion_persona . "\n";
echo "el socio invertirá: $" . $inversion_socio . "\n";
