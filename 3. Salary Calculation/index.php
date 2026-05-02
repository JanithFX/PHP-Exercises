<?php
$Basic_Salary = 50000;
$Loan_Amount=10000;
$Overtime_Working_Hours=10;
$Number_of_Working_Days=20;
$Number_of_Working_Hours_Per_Day=8;
$Overtime_Rate=1.5;
$Monthly_Allowance_Percentage=55;
$Fixed_Cost_of_Living_Allowance=12800;
$EPF_Percentage=8;
$TAX_Percentage=12;

$Hourly_Rate=0;
$Overtime_Pay=0;
$Monthly_Allowance=0;
$Total_Monthly_Allowance=0;
$EPF_Amount=0;
$Tax_Amount=0;
$Final_Salary=0;


$Hourly_Rate= $Basic_Salary / ($Number_of_Working_Days * $Number_of_Working_Hours_Per_Day);

$Overtime_Pay = $Hourly_Rate * $Overtime_Rate * $Overtime_Working_Hours;

$Monthly_Allowance = $Basic_Salary * ( $Monthly_Allowance_Percentage / 100 );

$Total_Monthly_Allowance = $Basic_Salary + $Overtime_Pay + $Monthly_Allowance + $Fixed_Cost_of_Living_Allowance;

$EPF_Amount = $Basic_Salary * ( $EPF_Percentage / 100 );

$Tax_Amount = $Basic_Salary * ( $TAX_Percentage / 100 );

$Final_Salary = $Total_Monthly_Allowance - ( $EPF_Amount + $Tax_Amount + $Loan_Amount );   

echo "Hourly Rate: " . $Hourly_Rate . "<br>";
echo "Overtime Pay: " . $Overtime_Pay . "<br>";
echo "Monthly Allowance: " . $Monthly_Allowance . "<br>";
echo "Total Monthly Allowance: " . $Total_Monthly_Allowance . "<br>";
echo "EPF Amount: " . $EPF_Amount . "<br>";
echo "Tax Amount: " . $Tax_Amount . "<br>";
echo "Final Salary: " . $Final_Salary;

?>