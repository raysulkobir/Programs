<?php

 
$n1 = 0;
$n2 = 1;

echo "<h3>Fibonacci series for first 12 numbers:</h3>\n";
echo $n1.' '.$n2.' ';

for ($num = 2; $num <= 7; $num++) {
    $n3 = $n2 + $n1;
    echo $n3.' ';
    $n1 = $n2;
    $n2 = $n3;
}


// step-3: $n1=0, $n2=1 and $n3=$n1+$n2  => 1 
// step-4: $n1=1, $n2=2 and $n3=$n1+$n2 => 3
// step-5: $n1=2, $n2=3 and $n3=$n1+$n2 => 5
// step-6: $n1=3, $n2=5 and $n3=$n1+$n2 => 8
// step-7: $n1=5, $n2=8 and $n3=$n1+$n2 => 13


// 0 1 1 2 3 5 8 13
?>
