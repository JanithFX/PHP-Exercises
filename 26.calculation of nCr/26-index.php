<?php
//data
$n = 5;
$r = 10;
//information
$nFactorial = 0;
$rFactorial = 0;
$nMinusRFactorial = 0;
$denominator = 0;
$nCr = 0;

if ($n < 0 || $r < 0 || $n < $r) {
    // output 01
    echo "Invalid input.";
} else {
    //calculation 01
    $nFactorial = calculateFactorial($n);
    //calculation 02
    $rFactorial = calculateFactorial($r);
    //calculation 03
    $nMinusRFactorial = calculateFactorial($n - $r);
    //calculation 04
    $denominator = $rFactorial * $nMinusRFactorial;
    //calculation 05
    $nCr = $nFactorial / $denominator;
    // output 02
    echo "The value of nCr is: " . $nCr;
}
//function name: calculateFactorial
//pre-condition: $num
//post-condition: $factorial
//description: This function calculates the factorial of a given number.
//version: 1.0
function calculateFactorial($num) {
    $factorial = 1;
    $count = 1;
    if ($count <= $num) {
        while ($count <= $num) {
            $factorial = $factorial * $count;
            $count++;
        }
    }
    return $factorial;
}
?>