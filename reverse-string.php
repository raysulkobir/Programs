<?php
// Reverse String Without using strrev() function

$string = "JAVATPOINT";
$length = strlen($string);

for ($i = ($length - 1); $i >= 0; $i--) {
    $string[$i];
}

echo $string;