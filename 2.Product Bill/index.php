<?php
$itemCode = 0;
$description = ""; 
$unitPrice = 0;
$quantityOfProduct = 0;
$totalAmountOfProduct = 0;
$VATamount = 0;
$NBTamount = 0;
$netAmount = 0;

function calculateTotalAmountOfProduct($unitPrice, $quantityOfProduct) {
    $totalAmountOfProduct = $unitPrice * $quantityOfProduct;
    return $totalAmountOfProduct;
}

$totalAmountOfProduct = calculateTotalAmountOfProduct($unitPrice, $quantityOfProduct);

function calculateVATamount($totalAmountOfProduct) {
    $VATamount = $totalAmountOfProduct * 0.12;
    return $VATamount;
}

$VATamount = calculateVATamount($totalAmountOfProduct);

function calculateNBTamount($totalAmountOfProduct, $VATamount) {
    $NBTamount = ( $totalAmountOfProduct + $VATamount ) * 0.02;
    return $NBTamount;
}

$NBTamount = calculateNBTamount($totalAmountOfProduct, $VATamount);

function calculateNetAmount($totalAmountOfProduct, $VATamount, $NBTamount) {
    $netAmount = $totalAmountOfProduct + $VATamount + $NBTamount;
    return $netAmount;
}

$netAmount = calculateNetAmount($totalAmountOfProduct, $VATamount, $NBTamount);

echo "Item Code: " . $itemCode . " Description: " . $description . " Unit Price: " . $unitPrice . " Quantity: " . $quantityOfProduct . "</br>";
echo "Total Amount: " . $totalAmountOfProduct . "</br>";
echo "12% VAT Amount: " . $VATamount . "</br>";
echo "2% NBT Amount: " . $NBTamount . "</br>";
echo "Net Amount: " . $netAmount . "</br>";

?>