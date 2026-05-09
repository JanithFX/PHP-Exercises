<?php
//data
$totalFileSize = 100; // in MB
$downloadedSize = 60; // in MB
$downloadSpeed = 5; // in MB/s
//information
$remainingTime = 0;

// Check for invalid input
if ($downloadSpeed == 0 || $totalFileSize < $downloadedSize) {
    echo "Error: Invalid input values.";
} else {
    // Calculate remaining size
    $remainingSize = $totalFileSize - $downloadedSize;
    
    // Calculate remaining time
    $remainingTime = $remainingSize / $downloadSpeed;
    
    // Print the remaining time
    echo "Remaining time: " . $remainingTime . " seconds.";
}
?>