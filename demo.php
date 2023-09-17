<?php
//  Even Odd Program

$numbers = [10, 20, 30, 40, 50, 51];

foreach($numbers as $number) {
    if($number % 2){
        echo "$number is Even Number \n";   
    }else{
        echo "$number is Odd Number \n";   
    }
}