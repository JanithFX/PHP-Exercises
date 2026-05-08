<?php
$date = "1971-1-1";

$dateArray = explode("-", $date);
$targetYear = $dateArray[0];
$targetMonth = $dateArray[1];
$targetDay = $dateArray[2];

$currentYear = 1970;
$currentMonth = 1;
$currentDay = 1;

$daysInYear = 0;
$daysInMonth = 0;

$totalDays = 0;

for ( $currentYear; $currentYear < $targetYear; $currentYear++) {
    if ($currentYear % 4 == 0 && $currentYear % 100 != 0 || $currentYear % 400 == 0) {
        $daysInYear = 366;
    } else {
        $daysInYear = 365;
    }
    $totalDays = $totalDays + $daysInYear;

}

for ($currentMonth; $currentMonth < $targetMonth; $currentMonth++) {
    switch ($currentMonth) {
        case 1:
            $daysInMonth = 31;
            break;
        case 3:
        case 5:
        case 7:
        case 8:
        case 10:
        case 12:
            $daysInMonth = 31;
            break;
        case 4:
        case 6:
        case 9:
        case 11:
            $daysInMonth = 30;
            break;
        default:
            if ($targetYear % 4 == 0 && $targetYear % 100 != 0 || $targetYear % 400 == 0) {
                $daysInMonth = 29;
            } else {
                $daysInMonth = 28;
            }
    }
    $totalDays = $totalDays + $daysInMonth;
}

$totalDays = $totalDays + ($targetDay - $currentDay);

echo "Number of days passed since 1970-1-1 : " . $totalDays;
?>