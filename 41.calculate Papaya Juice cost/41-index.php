<?php
//data
$waterVolume = 10; // in ml
$papayaWeight = 0; // in grams
$sugarSpoons = 0; // number of sugar spoons
//information
$waterCost = 0;
$papayaCost = 0;
$sugarCost = 0;
$totalBill = 0;
// Check Water Volume
if ($waterVolume >= 250 && $waterVolume <= 500) {
    $waterCost = 150;
}
// Check Papaya Weight
if ($papayaWeight >= 50 && $papayaWeight <= 100) {
    $papayaCost = $papayaWeight * 1;
}
// Check Sugar Spoons
if ($sugarSpoons >= 2 && $sugarSpoons <= 6) {
    $sugarCost = $sugarSpoons * 5;
}
// Calculate Total Bill
$totalBill = $waterCost + $papayaCost + $sugarCost;
// Display Detailed Bill
echo "Detailed Bill:</br>";
echo "Fix Charge for Cold Water: " . $waterCost . " LKR</br>";
echo "Papaya Cost: " . $papayaCost . " LKR</br>";
echo "Sugar Cost: " . $sugarCost . " LKR</br>";
echo "Total Bill: " . $totalBill . " LKR</br>";
?>