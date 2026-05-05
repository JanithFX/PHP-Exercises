<?php
// Data
$range1Start = 1;
$range1End = 10; 
$range2Start = 11;
$range2End = 20;
$range3Start = 21;
$range3End = 30;
$range4Start = 31;
$range4End = 40;
$range5Start = 41;
$range5End = 50;

$frequency1 = 2; //(f1) 
$frequency2 = 7; //(f2) 
$frequency3 = 10; //(f3)
$frequency4 = 3; //(f4)
$frequency5 = 1; //(f5)

$C = 22.89; //μ value (C)

//inforamation
$range1DeviationValue = 0; // (D1)
$range2DeviationValue = 0; // (D2)
$range3DeviationValue = 0; // (D3)
$range4DeviationValue = 0; // (D4)
$range5DeviationValue = 0; // (D5)

$totalDeviationValue = 0;
$standardDeviation = 0;

//function name : Calculate deviation value
//pre-condition : $rangeStart, $rangeEnd, $frequency, $C
//post-condition : $deviationValue
//description : This function calculates the deviation value for a given range, frequency, and μ value(C)
//version : 1.0
function calculateDeviationValue($rangeStart, $rangeEnd, $frequency, $C) {
    $deviationValue = 0;
    $midpoint = 0;
    $midpoint = ($rangeStart + $rangeEnd) / 2;
    $deviationValue = $frequency * ( ($midpoint - $C) ** 2);
    return $deviationValue;
}

//calculation 01
$range1DeviationValue = calculateDeviationValue($range1Start, $range1End, $frequency1, $C);
//calculation 02
$range2DeviationValue = calculateDeviationValue($range2Start, $range2End, $frequency2, $C);
//calculation 03
$range3DeviationValue = calculateDeviationValue($range3Start, $range3End, $frequency3, $C);
//calculation 04
$range4DeviationValue = calculateDeviationValue($range4Start, $range4End, $frequency4, $C);
//calculation 05
$range5DeviationValue = calculateDeviationValue($range5Start, $range5End, $frequency5, $C);
//calculation 06
$totalDeviationValue = $range1DeviationValue + $range2DeviationValue + $range3DeviationValue + $range4DeviationValue + $range5DeviationValue;
//calculation 07
$totalFrequency = $frequency1 + $frequency2 + $frequency3 + $frequency4 + $frequency5;
//calculation 08
$standardDeviation = sqrt($totalDeviationValue / ($totalFrequency - 1) );

// Output
echo "Standard Deviation: " . $standardDeviation . "</br>";

?>


