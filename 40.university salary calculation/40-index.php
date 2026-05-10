<?php
//data
$postName = "Guest";
$basicSalary  = 0;
$rate = 0;

//information
$totalSalary = 0;
$allowanceAmount = 0;

switch ($postName) {
    case "Lecturer (Probationary)":
        $basicSalary  = 67950;
        $rate = 1.44;
        break;
    case "Lecturer":
        $basicSalary  = 77730;
        $rate = 1.64;
        break;
    case "Senior Lecturer II":
        $basicSalary  = 97290;
        $rate = 1.89;
        break;
    case "Senior Lecturer I":
        $basicSalary  = 106500;
        $rate = 1.89;
        break;
    case "Associate Professor":
        $basicSalary  = 121350;
        $rate = 1.96;
        break;
    case "Professor":
        $basicSalary  = 152450;
        $rate = 2.03;
        break;
    case "Senior Professor":
        $basicSalary  = 171350;
        $rate = 2.09;
        break;
    default:
        echo "Error: Post not recognized";
        exit;
}

// Calculation 01
$allowanceAmount = $basicSalary * $rate;
// Calculate 02
$totalSalary = $basicSalary  + $allowanceAmount;
// output
echo "Total Salary for " . $postName . ": " . $totalSalary . " LKR";
?>