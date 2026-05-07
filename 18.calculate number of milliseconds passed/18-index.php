<?php
$hours = -6;
$minutes = -10;
$seconds = -30;

$hoursInSeconds = 0;
$minutesInSeconds = 0;
$totalMilliseconds = 0;

$hoursInSeconds = $hours * 3600;
$minutesInSeconds = $minutes * 60;

$totalMilliseconds = ( $hoursInSeconds + $minutesInSeconds + $seconds ) * 1000;
echo "Total milliseconds passed : " . $totalMilliseconds;

?>