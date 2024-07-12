
<?php

$monto_total_Compra = 600000; 

if ($monto_total_Compra > 500000) {
    $monto_invertido = $monto_total_Compra * 0.55;
} 

else {
    $monto_invertido = $monto_total_Compra * 0.7;
}

if ($monto_total_Compra > 500000) {
    $monto_Prestado_banco = $monto_total_Compra * 0.3;
}

$monto_credito_fabricante = $monto_total_Compra - $monto_invertido - $monto_Prestado_banco;
$intereses = $monto_credito_fabricante * 0.2;

echo "Monto invertido: " . ($monto_invertido) . "\n";
echo "Monto prestado al banco: " . ($monto_Prestado_banco) . "\n";
echo "Monto a crédito al fabricante: " . ($monto_credito_fabricante) . "\n";
echo "Intereses: " . ($intereses) . "\n";
