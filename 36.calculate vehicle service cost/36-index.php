<?php
//data
$customerLaborCost = 500; // in Rs.
$customerPartsCost = 300; // in Rs.
$taxAmount = 50; // in Rs.

//information
$totalCharge = 0;

// Calculate total charge
$totalCharge = $customerLaborCost + $customerPartsCost + $taxAmount;

// Display the total charge
echo "Your total service charge is: Rs. " . $totalCharge;
?>