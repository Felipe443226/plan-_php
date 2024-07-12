
<?php

$saldo_Capital = -15000; 

if ($saldo_Capital < 0) {
    $prestamo_necesario = 10000;
} elseif ($saldo_capital > 20000) {
    $prestamo_necesario = 0;
} else {
    $prestamo_necesario = 20000;
}

$saldo_actualizado = $saldo_capital + $prestamo_necesario;

$equipo_Computo = 5000;
$mobiliario = 2000;

$resto_Presupuesto = $saldo_actualizado - ($equipo_computo + $mobiliario);

$insumos = $resto_presupuesto / 2;
$incentivos = $resto_presupuesto / 2;

echo "Saldo inicial: $" . abs($saldoCapital) . "\n";
if ($prestamoNecesario > 0) {
    echo "Se necesita solicitar un préstamo de: $" . $prestamoNecesario . "\n";
}

echo "Distribución del presupuesto:\n";
echo "- Equipo de cómputo: $" . $equipo_computo . "\n";
echo "- Mobiliario: $" . $mobiliario . "\n";
echo "- Insumos: $" . $insumos . "\n";
echo "- Incentivos al personal: $" . $incentivos . "\n";
