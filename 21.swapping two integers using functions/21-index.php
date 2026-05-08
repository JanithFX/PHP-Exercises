<?php

//data
$number1 = -1;
$number2 = -2;

// output 1
echo "Before swapping : " . $number1 . " and " . $number2 . "</br>";

// call swap function to swap the values of number1 and number2
list($number1, $number2) = swap($number1, $number2);

// output 2
echo "After swapping : " . $number1 . " and " . $number2 . "</br>";

// function Name: swap
// pre-condition: $a, $b
// post-condition: $a, $b
// Description: This function takes two integer variables as input and swaps their values.
//version: 1.0
function swap($a, $b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
    return [$a, $b];
}
?>