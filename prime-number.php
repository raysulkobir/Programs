<?php
// Prime Number

function is_prime($n)
{
    if ($n < 2) {
        return false;
    }
    for ($i = 2; $i <= $n / 2; $i++) {
        if ($n % $i === 0) {
            return false;
        }
    }
    return true;
}

echo is_prime(3);
