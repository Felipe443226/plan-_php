
<?php

$alfabeto_morse = array(
    'a' => '.-',     'b' => '-...',   'c' => '-.-.',   'd' => '-..',
    'e' => '.',      'f' => '..-.',   'g' => '--.',    'h' => '....',
    'i' => '..',     'j' => '.---',   'k' => '-.-',    'l' => '.-..',
    'm' => '--',     'n' => '-.',     'o' => '---',    'p' => '.--.',
    'q' => '--.-',   'r' => '.-.',    's' => '...',    't' => '-',
    'u' => '..-',    'v' => '...-',   'w' => '.--',    'x' => '-..-',
    'y' => '-.--',   'z' => '--..',   
    '0' => '-----',  '1' => '.----',  '2' => '..---',  '3' => '...--',
    '4' => '....-',  '5' => '.....',  '6' => '-....',  '7' => '--...',
    '8' => '---..',  '9' => '----.'
);

$texto1 = "Hola mundo";
$morse1 = "... --- .-.. .-   -- ..- -. -.. ---";

$morseTexto1 = '';
foreach (str_split(strtolower($texto1)) as $char) {
    if (isset($alfabeto_morse[$char])) {
        $morseTexto1 .= $alfabeto_morse[$char] . ' ';
    } elseif ($char == ' ') {
        $morseTexto1 .= '  ';
    }
}
echo "Texto original: $texto1\n";
echo "Texto a Morse: " . rtrim($morseTexto1, ' ') . "\n\n";

$textoMorse1 = explode('  ', $morse1);
$textoResultado1 = '';
foreach ($textoMorse1 as $palabra) {
    $letras = explode(' ', $palabra);
    foreach ($letras as $letra) {
        foreach ($alfabeto_morse as $char => $code) {
            if ($code === $letra) {
                $textoResultado1 .= strtoupper($char);
                break;
            }
        }
    }
    $textoResultado1 .= ' ';
}
echo "Morse original: $morse1\n";
echo "Morse a texto: " . rtrim($textoResultado1, ' ') . "\n";