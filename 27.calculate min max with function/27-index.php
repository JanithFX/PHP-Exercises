<?php
//data
$Number1 = 0;
$Number2 = 0;
$Number3 = 0;
//information
$Max = 0;
$Min = 0;
//calculation 01
list($Max, $Min) = findMinMax($Number1, $Number2, $Number3);
// Output the result
echo "The maximum value is: " . $Max . "<br>" . "The minimum value is: " . $Min;

// function name: findMinMax
//pre-condition: $num1, $num2, $num3
//post-condition: $Max, $Min
//description: This function finds the maximum and minimum values among three given numbers.
//version: 1.0
function findMinMax($num1, $num2, $num3) {
    $Max = $num1;
    $Min = $num1;
    if ($num2 > $Max) {
        $Max = $num2;
    }
    if ($num3 > $Max) {
        $Max = $num3;
    }
    if ($num2 < $Min) {
        $Min = $num2;
    }
    if ($num3 < $Min) {
        $Min = $num3;
    }
    return array($Max, $Min);
}
?>