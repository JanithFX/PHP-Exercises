<?php
$yearStartBalance = -2000;
$yearEndBalance = -4000;
$yearlyInterestRate = 4.75;

$accountBalance = 0;
$interest = 0;

$accountBalance = $yearEndBalance - $yearStartBalance;
$interest = $accountBalance * ($yearlyInterestRate / 100);

echo "Yearly Interest earned: LKR " . $interest;

?>  