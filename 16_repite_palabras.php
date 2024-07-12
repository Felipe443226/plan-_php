
<?php

$texto = "felipe tiene ambre y estaq triste";

$texto = strtolower($texto);

$palabras = str_word_count($texto, 1, "áéíóúüñÁÉÍÓÚÜÑ'");

$conteo = [];

foreach ($palabras as $palabra) {
    if (isset($conteo[$palabra])) {
        $conteo[$palabra]++;
    } 
    
    else {
        $conteo[$palabra] = 1;
    }
}

echo "Recuento de palabras:\n";
foreach ($conteo as $palabra => $cantidad) {
    echo "$palabra: $cantidad\n";
}
