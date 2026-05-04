<?php
$monthStartReading = 50;
$monthEndReading = 150;
$supplyMethod = "two phase";
$serviceTaxPercentage = 15;
$usageType = "personal";

$usedUnits = 0;
$unitsCost = 0;
$supplyMethodCost = 0;
$grossBill = 0;
$usageTax = 0;
$serviceTax = 0;
$totalBill = 0;


$usedUnits = $monthEndReading - $monthStartReading;

switch (true) {
    case ($usedUnits >= 0 && $usedUnits <= 30):
        $unitsCost = $usedUnits * 8;
        break;
    case ($usedUnits >= 31 && $usedUnits <= 80):
        $unitsCost = (30 * 8) + (($usedUnits - 30) * 12);
        break;    
    case ($usedUnits >= 81 && $usedUnits <= 120):
        $unitsCost = (30 * 8) + (50 * 12) + (($usedUnits - 80) * 20);
        break;
    case ($usedUnits >= 121 && $usedUnits <= 150):
        $unitsCost = (30 * 8) + (50 * 12) + (40 * 20) + (($usedUnits - 120) * 32);
        break;
    case ($usedUnits >= 151 && $usedUnits <= 200):
        $unitsCost = (30 * 8) + (50 * 12) + (40 * 20) + (30 * 32) + (($usedUnits - 150) * 56);
        break;
    case ($usedUnits > 200):
        $unitsCost = (30*8 + 50*12 + 40*20 + 30*32 + 50*56 + (($usedUnits - 200) * 60));
        break;
    default:
        $unitsCost = 0;
}

switch($supplyMethod) {
    case "two phase":
        $supplyMethodCost = 150;
        break;
    case "three phase":
        $supplyMethodCost = 450;
        break;
    default:
        $supplyMethodCost = 0;
}

$grossBill = $unitsCost + $supplyMethodCost;

switch($usageType) {
    case "personal":
        $usageTax = 0;
        break;
    case "industry":
        $usageTax = $grossBill * 0.3;
        break;
    case "government":
        $usageTax = $grossBill * 0.2;
        break;
    default:
        $usageTax = 0;
}

$serviceTax = ($grossBill + $usageTax) * ($serviceTaxPercentage / 100);

$totalBill = $grossBill + $usageTax + $serviceTax;

echo "Used Units: " . $usedUnits . " | Unit Cost: " . $unitsCost . "</br>";
echo "Supply Method: " . $supplyMethod . " | Supply Method Cost: " . $supplyMethodCost . "</br>";
echo "Usage Type: " . $usageType . " | Usage Tax: " . $usageTax . "</br>";
echo "Service Tax: " . $serviceTax . "</br>";
echo "Total Bill: " . $totalBill . "</br>";

?>