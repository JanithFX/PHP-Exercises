<?php
//data
$hotWaterVolume = 200; // in ml
$teaLeavesWeight = 2; // in grams
$sugarSpoons = 2; // number of sugar spoons
//information
$hotWaterCost = 0;
$teaLeavesCost = 0;
$sugarCost = 0;
$totalBill = 0;

if ($hotWaterVolume >= 125 && $hotWaterVolume <= 375) {
    $hotWaterCost = 50;
}

if ($teaLeavesWeight >= 1 && $teaLeavesWeight <= 3) {
    $teaLeavesCost = $teaLeavesWeight * 2.5;
}   

if ($sugarSpoons >= 1 && $sugarSpoons <= 3){
        $sugarCost = $sugarSpoons * 5;
}

// calculate Total Bill
$totalBill = $hotWaterCost + $teaLeavesCost + $sugarCost;

// output
echo "Detailed Bill:<br>";
echo "Fix Charge for Hot Water: " . $hotWaterCost . " LKR<br>";
echo "Tea Leaves Cost: " . $teaLeavesCost . " LKR<br>";     
echo "Sugar Cost: " . $sugarCost . " LKR<br>";
echo "Total Bill: " . $totalBill . " LKR<br>";
?>