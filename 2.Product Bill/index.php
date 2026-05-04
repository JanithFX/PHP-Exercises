<?php
$itemCode = "1010";
$description = "Processor"; 
$unitPrice = -10000.99;
$quantityOfProduct = -20;
$totalAmountOfProduct = 0;
$VATamount = 0;
$NBTamount = 0;
$netAmount = 0;

$totalAmountOfProduct = 0;
$VATamount = 0;
$NBTamount = 0;
$netAmount = 0;

$totalAmountOfProduct = $unitPrice * $quantityOfProduct;
$VATamount = $totalAmountOfProduct * 0.12;
$NBTamount = ( $totalAmountOfProduct + $VATamount ) * 0.02;
$netAmount = $totalAmountOfProduct + $VATamount + $NBTamount;


echo "Item Code: " . $itemCode . " Description: " . $description . " Unit Price: " . $unitPrice . " Quantity: " . $quantityOfProduct . "</br>";
echo "Total Amount: " . $totalAmountOfProduct . "</br>";
echo "12% VAT Amount: " . $VATamount . "</br>";
echo "2% NBT Amount: " . $NBTamount . "</br>";
echo "Net Amount: " . $netAmount . "</br>";

?>