<?php


// To find sum of digits of a number just add all the digits.

$num = 14597;
$sum = 0;


for ($i = 0; $i <= strlen($num); $i++) {
    $rem = $num % 10;
    $sum = $sum + $rem;
    $num = intval($num / 10);
}

echo "Sum of digits 14597 is $sum \n";
