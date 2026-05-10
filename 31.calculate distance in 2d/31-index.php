<?php
//data  
$Point1X = 1;
$Point1Y = 1;
$Point2X = 1;
$Point2Y = 1;
//information
$distance = 0;

//calculation 01
$distance = calculateDistance($Point1X, $Point1Y, $Point2X, $Point2Y);
// Output the result
echo "The distance is: " . $distance;

// function name: calculateDistance
//pre-condition: $x1, $y1, $x2, $y2
//post-condition: $distance
//description: This function calculates the distance between two points in a 2D space using the distance formula derived from the Pythagorean theorem.
//version: 1.0
function calculateDistance($x1, $y1, $x2, $y2) {
    $x = $x2 - $x1;
    $y = $y2 - $y1;
    $sum = ($x * $x) + ($y * $y);
    $distance = sqrt($sum);
    return $distance;
}
?>