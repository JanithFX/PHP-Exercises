<?php
$startReading = 100;
$endReading = 10;
$unitPrice = 32;
$fixedCharge = 480;
$serviceChargePercentage = 10;
$vatPercentage = 12;
$nbtPercentage = 2;

$ConsumedUnits = 0;
$consumptionCharge = 0;
$TotalWaterCost = 0;
$VATAmount = 0;
$NBTAmount = 0;
$FinalBill = 0;

$ConsumedUnits = $endReading - $startReading;
$consumptionCharge = ( $ConsumedUnits * $unitPrice ) + $fixedCharge;
$TotalWaterCost = $consumptionCharge * ( (100 + $serviceChargePercentage ) / 100);
$VATAmount = $TotalWaterCost * ( $vatPercentage / 100 );
$NBTAmount = $TotalWaterCost * ( $nbtPercentage / 100 );
$FinalBill = $TotalWaterCost + $VATAmount + $NBTAmount;

echo "Consumed Units: " . $ConsumedUnits . "<br>";
echo "Consumption Charge: LKR " . $consumptionCharge . "<br>";
echo "Total Water Cost (including service charge): LKR " . $TotalWaterCost . "<br>";
echo "VAT Amount: LKR " . $VATAmount . "<br>";
echo "NBT Amount: LKR " . $NBTAmount . "<br>";
echo "Final Bill: LKR " . $FinalBill . "<br>";

?>