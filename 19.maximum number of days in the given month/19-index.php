<?php

$month = "A";

$numberOfDays = 0;
switch ($month) {
    case "January":
    case "March":
    case "May":
    case "July":
    case "August":
    case "October":
    case "December":
        $numberOfDays = 31;
        break;
    case "April":
    case "June":
    case "September":
    case "November":
        $numberOfDays = 30;
        break;
    case "February":
        $numberOfDays = 28;
        break;
    default:
        $numberOfDays = 0;
}
echo "The number of days in " . $month . " is : " . $numberOfDays;

?>
