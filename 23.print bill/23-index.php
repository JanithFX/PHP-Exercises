<?php
//data
$unitPrice = -1000;
$quantity = -5;

//information
$total = 0;
$discount = 0;
$netAmount = 0;

//calculation 01
$total = calculateTotal($unitPrice, $quantity);
//calculation 02
$discount = calculateDiscount($total);
//calculation 03
$netAmount = calculateNetAmount($total, $discount);
//output
printBill($unitPrice, $quantity, $total, $discount, $netAmount);

//function Name: calculateTotal
//pre-condition: $unitPrice and $quantity
//post-condition: $total
//description: This function calculates the total price by multiplying the unit price with the quantity.
//version: 1.0
function calculateTotal($unitPrice, $quantity) {
    $total = $unitPrice * $quantity;
    return $total;
}

//function Name: calculateDiscount
//pre-condition: $total
//post-condition: $discount
//description: This function calculates the discount based on the total price.
//version: 1.0
function calculateDiscount($total) {
    if ($total > 1000) {
        $discount = $total * 0.1;
    } else {
        $discount = 0;
    }
    return $discount;
}

//function Name: calculateNetAmount
//pre-condition: $total and $discount
//post-condition: $netAmount
//description: This function calculates the net amount by subtracting the discount from the total price.
//version: 1.0
function calculateNetAmount($total, $discount) {
    $netAmount = $total - $discount;
    return $netAmount;
}

//function Name: printBill
//pre-condition: $unitPrice, $quantity, $total, $discount, and $netAmount
//post-condition: None
//description: This function prints the bill with the unit price, quantity, total, discount, and net amount.
//version: 1.0
function printBill($unitPrice, $quantity, $total, $discount, $netAmount) {
    echo "------------------------</br>";
    echo "         ABC Shop       </br>";
    echo "------------------------</br>";
    echo "Unit Price: RS." . $unitPrice . "</br>";
    echo "Quantity: " . $quantity . "</br>";
    echo "------------------------</br>";
    echo "Total: RS." . $total . "</br>";
    echo "Discount: RS." . $discount . "</br>";
    echo "------------------------</br>";
    echo "Net Amount: RS." . $netAmount . "</br>";
    echo "------------------------</br>";
}
?>