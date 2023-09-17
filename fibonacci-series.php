<?php

 
$n1 = 0;
$n2 = 1;

echo "<h3>Fibonacci series for first 12 numbers:</h3>\n";
echo $n1.' '.$n2.' ';

for ($num = 3; $num <= 12; $num++) {
    $n3 = $n2 + $n1;
    echo $n3.' ';
    $n1 = $n2;
    $n2 = $n3;
}
?>
