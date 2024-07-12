
<?php
$numero = intval(readline("Ingrese un número entero positivo de hasta tres cifras: "));
 
if ($numero < 10) {
    echo ("Tiene un dígito");
}

elseif ($numero < 100) {
    echo ("Tiene dos dígitos");
} 

else {
    echo ("Tiene tres dígitos");
}
