<?php

$year = 2015;

$leapYear = false;

$leapYear = ( ($year % 4 == 0) && ($year % 100 != 0) ) || ($year % 400 == 0);

if ( $leapYear == true ) {
    echo $year . " is a leap year.";
}
else {
    echo $year . " is not a leap year.";
}

?>