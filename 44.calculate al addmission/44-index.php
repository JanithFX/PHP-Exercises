<?php
//data
$year1Semester1Subject1Mark = 55;
$year1Semester1Subject2Mark = 60;
$year1Semester1Subject3Mark = 45;
$year1Semester2Subject1Mark = 50;
$year1Semester2Subject2Mark = 65;
$year1Semester2Subject3Mark = 70;
$year1Semester3Subject1Mark = 80;
$year1Semester3Subject2Mark = 75;
$year1Semester3Subject3Mark = 85;    
$year2Semester1Subject1Mark = 90;
$year2Semester1Subject2Mark = 95;
$year2Semester1Subject3Mark = 85;
$year2Semester2Subject1Mark = 80;
$year2Semester2Subject2Mark = 70;
$year2Semester2Subject3Mark = 75;    
$year2Semester3Subject1Mark = 85;
$year2Semester3Subject2Mark = 90;
$year2Semester3Subject3Mark = 95;
//information
$sum = 0;
$average = 0;
$result = "0";
//calculate sum
$sum = $year1Semester1Subject1Mark + $year1Semester1Subject2Mark + $year1Semester1Subject3Mark + $year1Semester2Subject1Mark + $year1Semester2Subject2Mark + $year1Semester2Subject3Mark + $year1Semester3Subject1Mark + $year1Semester3Subject2Mark + $year1Semester3Subject3Mark + $year2Semester1Subject1Mark + $year2Semester1Subject2Mark + $year2Semester1Subject3Mark + $year2Semester2Subject1Mark + $year2Semester2Subject2Mark + $year2Semester2Subject3Mark + $year2Semester3Subject1Mark + $year2Semester3Subject2Mark + $year2Semester3Subject3Mark;
//calculate average
$average = $sum / 18;
//check average mark
if ($average >= 50) {
    $result = "Have the permission for G.C.E. A/L exam";
} else {
    $result = "Do not have the permission for G.C.E. A/L exam";
}
//display result
echo "Result: " . $result;
?>