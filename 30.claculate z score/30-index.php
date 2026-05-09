<?php
//data
$mark = 0;
$mean = 0;
$standardDeviation  = 0;
//information
$zScore = 0;
//calculation 01
$zScore = calculateZscore($mark, $mean, $standardDeviation);
// Output the result
echo "The Z-Score is: " . $zScore;

// function name: calculateZscore
//pre-condition: $mark, $mean, $standardDeviation
//post-condition: $zScore
//description: This function calculates the Z-Score based on the given mark, mean, and standard deviation. It also handles the case where standard deviation is zero to avoid division by zero errors.
//version: 1.0
function calculateZscore($mark, $mean, $standardDeviation) {
    $zScore = 0;
    if ($standardDeviation == 0) {
        return "Error: Standard Deviation cannot be zero</br>";
    }
    $zScore = ($mark - $mean) / $standardDeviation;
    return $zScore;
}
?>