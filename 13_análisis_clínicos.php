
<?php

function planificarFinanzas($saldo_actual) {
    $prestamo = 0;
    $nuevo_saldo = $saldo_actual;

    if ($saldo_actual < 0) {
        $prestamo = 10000 - $saldo_actual;
        $nuevo_saldo = 10000;
    } elseif ($saldo_actual > 20000) {

    } else {
        $prestamo = 20000 - $saldo_actual;
        $nuevo_saldo = 20000;
    }

    $equipo_computo = 5000;
    $mobiliario = 2000;
    $restante = $nuevo_saldo - $equipo_computo - $mobiliario;
    $insumos = $restante / 2;
    $incentivos = $restante / 2;

    return [
        'prestamo' => $prestamo,
        'nuevoSaldo' => $nuevo_saldo,
        'equipoComputo' => $equipo_computo,
        'mobiliario' => $mobiliario,
        'insumos' => $insumos,
        'incentivos' => $incentivos
    ];
}

$saldo_actual = 5000;
$resultado = planificarFinanzas($saldo_actual);

echo "Saldo actual: " . $saldo_actual . "\n";
echo "Préstamo necesario: " . $resultado['prestamo'] . "\n";
echo "Nuevo saldo: " . $resultado['nuevoSaldo'] . "\n";
echo "Equipo de cómputo: " . $resultado['equipoComputo'] . "\n";
echo "Mobiliario: " . $resultado['mobiliario'] . "\n";
echo "Insumos: " . $resultado['insumos'] . "\n";
echo "Incentivos al personal: " . $resultado['incentivos'] . "\n";
