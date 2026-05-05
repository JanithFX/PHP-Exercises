<?php
$averageMarks = "a";
$grade = "F";

if ($averageMarks >= 75 && $averageMarks <= 100) {
    $grade = "A";
}
else if ($averageMarks >= 65 && $averageMarks < 75) {
    $grade = "B";
}
else if ($averageMarks >= 50 && $averageMarks < 65) {
    $grade = "C";
}
else if ($averageMarks >= 35 && $averageMarks < 50) {
    $grade = "D";
}
else if ($averageMarks >= 0 && $averageMarks < 35) {
    $grade = "F";
}

echo "The grade is: " . $grade;

?>