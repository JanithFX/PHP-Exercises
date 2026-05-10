<?php
//data
$subject1_mark = 45;
$subject2_mark = 38;
$subject3_mark = 42;
$subject4_mark = 50;
$subject5_mark = 35;
$subject6_mark = 40;
$subject7_mark = 30;
$subject8_mark = 48;
//information
$sum = 0;
$average = 0;
$result = "0";

//calculate sum
$sum = $subject1_mark + $subject2_mark + $subject3_mark + $subject4_mark + $subject5_mark + $subject6_mark + $subject7_mark + $subject8_mark;
//calculate average
$average = $sum / 8;
//evaluate completion
if ($average >= 40) {
    $result = "Student has completed the segments.";
} else {
    $result = "Student has not completed the segments.";
}
//output
echo "Sum of marks: " . $sum . "<br>";
echo "Average mark: " . $average . "<br>";
echo "Result: " . $result . "<br>";
?>