<?php
$firstYearPremium = -3000;
$secondYearPremium = -2000;
$thirdYearPremium = -1000;
$firstYearPercentage = 30;
$secondYearPercentage = 20;
$thirdYearPercentage = 15;



$firstYearCommission = 0;
$secondYearCommission = 0;
$thirdYearCommission = 0;
$totalCommission = 0;
$monthlyCommission = 0;

$firstYearCommission = $firstYearPremium * ( $firstYearPercentage / 100 );
$secondYearCommission = $secondYearPremium * ( $secondYearPercentage / 100 );
$thirdYearCommission = $thirdYearPremium * ( $thirdYearPercentage / 100 );

$totalCommission = $firstYearCommission + $secondYearCommission + $thirdYearCommission;

$monthlyCommission = $totalCommission / 12;

echo "Monthly Commission: LKR " . $monthlyCommission . "<br>";
?>