<?php

//data
$distance = 0;
$time = 0;
//information
$estimatedCost = 0;
//calculation 01
$estimatedCost = calculateFare($distance, $time);
// Output the result
echo "Your estimated trip cost is: Rs. " . $estimatedCost;

// function name: calculateFare
//pre-condition: $distance, $time
//post-condition: $totalCost
//description: This function calculates the total fare for a taxi ride based on distance and time using a predefined fare structure.
//version: 1.0
function calculateFare($distance, $time) {
    $baseFare = 100;
    $ratePerKm = 50;
    $ratePerMinute = 10;
    
    $distanceCost = $distance * $ratePerKm;
    $timeCost = $time * $ratePerMinute;
    
    $totalCost = $baseFare + $distanceCost + $timeCost;
    
    return $totalCost;
}
?>