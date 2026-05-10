<?php
//data
$requestedHallNumber = "1"; // Get from user input
$requestedSlot = "9-11 AM"; // Get from user input
$requestedlecturerName = "Dr. Perera"; // Get from user input

$hallNumber="";
$slot="";
$lecturerName="";

if (empty($hallNumber) && empty($slot)) {
    $hallNumber = $requestedHallNumber;
    $slotNumber = $requestedSlot;
    echo "Success: " . $lecturerName . " allocated to Hall Number " . $requestedHallNumber . " and time slot " . $requestedSlot;
} else {
    echo "Error: Slot already occupied";
}
?>