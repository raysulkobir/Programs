<?php
function isLeapYear($year)
{
    if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
        return true;
    } else {
        return false;
    }
}

$year = 2023; // Change this to the year you want to check

if (isLeapYear($year)) {
    echo "$year is a leap year.";
} else {
    echo "$year is not a leap year.";
}
