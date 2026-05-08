<?php
$number = 0;

if ($number > 0) {
    $factorial = 1;
    $count = 1;
    while ($count <= $number) {
        $factorial = $factorial * $count;
        $count++;
    }
    echo "The factorial of " . $number . " is " . $factorial . ".";
} else {
    echo "Invalid input.";
}
?>