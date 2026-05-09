<?php
//data
$number = 0;
//information
$result = false;

//calculation 01
$result = isPrime($number);
// Output the result
if ($result) {
    echo "$number is a prime number.";
} else {
    echo "$number is not a prime number.";
}
// function name: isPrime
//pre-condition: $N
//post-condition: $result
//description: This function checks if the given number is prime or not.
//version: 1.0
function isPrime($N) {
    if ($N <= 1) {
        $result = false;
    } else {
        $result = true;
        $divisor = 2;
        for ($divisor; $divisor < $N; $divisor++) {
            if ($N % $divisor == 0) {
                $result = false;
                break;
            }
        }
    }
    return $result;
}
?>