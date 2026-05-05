<?php
$number1 = "0";
$number2 = "!";
$number3 = "a";


$minimumNumber =0;


if ( ($number1 < $number2) && ($number1 < $number3) ){
    $minimumNumber = $number1;
}
elseif ( ($number2 < $number1) && ($number2 < $number3) ){
    $minimumNumber = $number2;
}
else {
    $minimumNumber = $number3;
}


echo "The minimum number is: " . $minimumNumber;
?>
