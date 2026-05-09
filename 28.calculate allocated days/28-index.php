<?php
//data
$regNumber = "a";
//information
$allocatedDay = "0";
//calculation 01    
$allocatedDay = allocateDay($regNumber);
// Output the result
echo "The allocated day for registration number " . $regNumber . " is: " . $allocatedDay;

// function name: allocateDay
//pre-condition: $regNumber
//post-condition: $result
//description: This function allocates a day of the week based on the registration number using modulo operation.
//version: 1.0
function allocateDay($regNumber) {
    $result = "0";
    $remainder = $regNumber % 5;
    switch ($remainder) {
        case 0:
            $result = "Monday";
            break;
        case 1:
            $result = "Tuesday";
            break;
        case 2:
            $result = "Wednesday";
            break;
        case 3:
            $result = "Thursday";
            break;
        case 4:
            $result = "Friday";
            break;
        default:
            $result = "Invalid Registration Number";
    }
    return $result;
}
?>