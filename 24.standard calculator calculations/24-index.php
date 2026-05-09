<?php
//data
$number1 = 8;
$number2 = 0;
$operation = "/";
//information
$result = 0;

//calculation 01
switch ($operation) {
    case "+":
        $result = add($number1, $number2);
        break;
    case "-":
        $result = subtract($number1, $number2);
        break;
    case "*":
        $result = multiply($number1, $number2);
        break;
    case "/":
        $result = divide($number1, $number2);
        break;
    default:
        $result = "Invalid operation";
}
//output
echo "The result of " . $number1 . " " . $operation . " " . $number2 . " is: " . $result;

//function Name: add
//pre-condition: $num1 and $num2
//post-condition: $result
//description: This function takes two numbers as input and returns their sum.
//version: 1.0
function add($num1, $num2) {
    $result = 0;
    $result = $num1 + $num2;
    return $result;
}
//function Name: subtract
//pre-condition: $num1 and $num2
//post-condition: $result
//description: This function takes two numbers as input and returns their difference.
//version: 1.0
function subtract($num1, $num2) {
    $result = 0;
    $result = $num1 - $num2;
    return $result;
}
//function Name: multiply
//pre-condition: $num1 and $num2
//post-condition: $result
//description: This function takes two numbers as input and returns their product.
//version: 1.0
function multiply($num1, $num2) {
    $result = 0;
    $result = $num1 * $num2;
    return $result;
}
//function Name: divide
//pre-condition: $num1 and $num2
//post-condition: $result
//description: This function takes two numbers as input and returns their quotient. It also checks for division by zero.
//version: 1.0
function divide($num1, $num2) {
    $result = 0;
    if ($num2 == 0) {
        $result = "Error.";
    } else {
        $result = $num1 / $num2;
    }
    return $result;
}
?>