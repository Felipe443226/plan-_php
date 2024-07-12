
<?php

$fibonacci_1 = 0;
$fibonacci_2 = 1;

$count = 0;

while ($count < 50) {

    echo $fibonacci_1 . "\n";
    
    $temp = $fibonacci_1 + $fibonacci_2;
    
    $fibonacci_1 = $fibonacci_2;
    $fibonacci_2 = $temp;
    
    $count++;
}
