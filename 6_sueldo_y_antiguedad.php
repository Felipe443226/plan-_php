
<?php
$sueldo = intval(readline("Ingrese el sueldo del operario : "));
$antiguedad = intval(readline("Ingrese la antiguedad del operario en años : "));

if ($sueldo < 500) {
    if ($antiguedad >= 10) {
        $sueldo_total = $sueldo * 1.20;
    } else {
        $sueldo_total = $sueldo * 1.05;
    }
} else {
    $sueldo_total = $sueldo;
}

echo "el sueldo total a pagar es: " . $sueldo_total;
