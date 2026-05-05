<?php
// Data
$subject1Grade = "0";
$subject2Grade = "0";
$subject3Grade = "0";

$subject1CreditHours = 0;
$subject2CreditHours = 0;
$subject3CreditHours = 0;

// information
$subject1GradePointAverage = 0;
$subject2GradePointAverage = 0;
$subject3GradePointAverage = 0;

$subject1Points = 0;
$subject2Points = 0;
$subject3Points = 0;

$totalPoints = 0;
$totalCreditHours = 0;
$gradePointAverage = 0;

// function name : Calculate grade point average
//pre-condition : $subjectGrade
//post-condition : $gradePointAverage
// description : This function calculates the grade point average for a given grade.
//version : 1.0
function calculateGradePointAverage($subjectGrade) {
    $gradePointAverage = 0;
    switch ($subjectGrade) {
        case "A":
            $gradePointAverage = 4.0;
            break;
        case "B":
            $gradePointAverage = 3.0;
            break;
        case "C":
            $gradePointAverage = 2.0;
            break;
        case "D":
            $gradePointAverage = 1.0;
            break;
        case "F":
            $gradePointAverage = 0.0;
            break;
        default:
            $gradePointAverage = 0.0;
    }
    return $gradePointAverage;
}

//function name : Calculate points
//pre-condition : $gradePointAverage, $creditHours
//post-condition : $points
//description : This function calculates the points for a given grade point average and credit hours.
//version : 1.0
function calculatePoints($gradePointAverage, $creditHours) {
    $points = 0;
    $points = $gradePointAverage * $creditHours;
    return $points;
}

//calculation 01
$subject1GradePointAverage = calculateGradePointAverage($subject1Grade);
//calculation 02
$subject2GradePointAverage = calculateGradePointAverage($subject2Grade);
//calculation 03
$subject3GradePointAverage = calculateGradePointAverage($subject3Grade);
//calculation 04
$subject1Points = calculatePoints($subject1GradePointAverage, $subject1CreditHours);
//calculation 05
$subject2Points = calculatePoints($subject2GradePointAverage, $subject2CreditHours);
//calculation 06
$subject3Points = calculatePoints($subject3GradePointAverage, $subject3CreditHours);
//calculation 07
$totalPoints = $subject1Points + $subject2Points + $subject3Points;
//calculation 08
$totalCreditHours = $subject1CreditHours + $subject2CreditHours + $subject3CreditHours;
//calculation 09
$gradePointAverage = $totalPoints / $totalCreditHours;

echo "Total Grade Point Average: " . $gradePointAverage;

?>