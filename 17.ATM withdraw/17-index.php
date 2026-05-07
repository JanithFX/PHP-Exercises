<?php
$amount = -2000;

$remainder = 0;
$numberOf5000Notes = 0;
$numberOf1000Notes = 0;
$numberOf500Notes = 0;
$numberOf100Notes = 0;

if ($amount%100 == 0) {

    $numberOf5000Notes = (int)($amount /5000);
    $remainder = $amount % 5000;
    $numberOf1000Notes = (int)($remainder /1000);
    $remainder = $remainder % 1000;
    $numberOf500Notes = (int)($remainder /500);
    $remainder = $remainder % 500;
    $numberOf100Notes = (int)($remainder /100);

    echo "Your Amount : " . $amount . "</br> You will get :- </br>";
    echo "$numberOf5000Notes x 5000 notes <br>";
    echo "$numberOf1000Notes x 1000 notes <br>";
    echo "$numberOf500Notes x 500 notes <br>";
    echo "$numberOf100Notes x 100 notes <br>";

} else {
    echo "Invalid amount, must be a multiple of 100.";
}

?>