<?php
//data
$timeA = 2; // Time for Route A in hours
$costA = 50; // Cost for Route A in LKR
$timeB = 3; // Time for Route B in hours
$costB = 30; // Cost for Route B in LKR

// Calculate scores
$scoreA = $timeA + $costA; // Score for Route A
$scoreB = $timeB + $costB; // Score for Route B

// Determine the best route
if ($scoreA < $scoreB) {
    $output = "Route A is the most economical and efficient.";
} elseif ($scoreB < $scoreA) {
    $output = "Route B is the most economical and efficient.";
} else {
    $output = "Both routes are equally efficient and economical.";
}
// Display the output
echo $output;
?>