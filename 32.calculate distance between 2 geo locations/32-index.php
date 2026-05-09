<?php
//data
$Radius1 = 0;
$Angle1 = 0;
$Radius2 = 0;
$Angle2 = 0;
//information
$distance = 0;

//calculation 01
$distance = calculatePolarDistance($Radius1, $Angle1, $Radius2, $Angle2);
// Output the result
echo "The distance is: " . $distance;

// function name: calculatePolarDistance
//pre-condition: $r1, $angle1, $r2, $angle2
//post-condition: $distance
//description: This function calculates the distance between two points in polar coordinates using the cosine formula.
//version: 1.0
function calculatePolarDistance($r1, $angle1, $r2, $angle2) {
    $angleDifference = $angle1 - $angle2;
    $cos_val = cos(deg2rad($angleDifference)); // Convert angle difference to radians for cosine calculation
    $r1_squared = $r1 * $r1;
    $r2_squared = $r2 * $r2;
    $sub_part = 2 * $r1 * $r2 * $cos_val;
    $squared_distance = $r1_squared + $r2_squared - $sub_part;
    $distance = sqrt($squared_distance);
    return $distance;
}
?>