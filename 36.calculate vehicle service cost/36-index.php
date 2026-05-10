<?php
//data
$customerLaborCost = 0; 
$customerPartsCost = 0;
$taxAmount = 0;

//information
$totalCharge = 0;

// Calculate total charge
$totalCharge = $customerLaborCost + $customerPartsCost + $taxAmount;

// Display the total charge
echo "Your total service charge is: Rs. " . $totalCharge;
?>