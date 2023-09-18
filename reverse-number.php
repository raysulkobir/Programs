<?php
// Function to reverse a number
function reverseNumber($number) {
    $reversedNumber = 0;
    while ($number > 0) {
        $digit = $number % 10; // Get the last digit
        $reversedNumber = $reversedNumber * 10 + $digit; // Append the digit to the reversed number
        $number = (int)($number / 10); // Remove the last digit
    }
    return $reversedNumber;
}

// Input number
$number = 156; // You can change this number to any positive integer

// Reverse the number
$reversedNumber = reverseNumber($number);

// Print the reversed number
echo "The reversed number of $number is $reversedNumber\n";
