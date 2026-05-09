<?php
//data
$requestedHallNumber = "0"; // Get from user input
$requestedSlot = "0"; // Get from user input
$lecturerName = "0"; // Get from user input

if (empty($requestedHallNumber) && empty($requestedSlot)) {
    echo "Error: Slot already occupied";
} else {

    echo "Success: " . $lecturerName . " allocated to Hall Number " . $requestedHallNumber . " and time slot " . $requestedSlot;
}
?>