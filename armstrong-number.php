<?php

// An Armstrong number is the one whose value is equal to the sum of the cubes of its digits.

$armnum2 = 407;
$total3 = 0;
for ($x3 = $armnum2; $x3 != 0; $x3 = (intval($x3 / 10))) {
    $rem3 = $x3 % 10;
    $total3 = $total3 + $rem3 * $rem3 * $rem3;
}
if ($armnum2 == $total3) {
    echo "Yes, Number $armnum2 is an Armstrong number";
} else {
    echo "No, Number $armnum2 it is not an armstrong number";
}

 