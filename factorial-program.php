<?php
// Factorial of 6 using recursion method is shown.

$num = 4;
$factorial = 1;

for ($x = $num; $x >= 1; $x--) {
    $factorial = $factorial * $x;
}

echo "Factorial {$factorial}";


// function fact($n)
// {
//     if ($n <= 1) {
//         return 1;
//     } else {
//         return $n * fact($n - 1);
//     }
// }

// echo "Factorial of 3 is " . fact(6);  
