<?php
$numberOfWords = "f";
$chargePerWord = 0;
$Charge = 0;

    if ($numberOfWords < 20 && $numberOfWords > 0) {
        $chargePerWord = 30;
    }
    else if ($numberOfWords < 40 && $numberOfWords >= 20) {
        $chargePerWord = 27;
    }
    else if ($numberOfWords < 60 && $numberOfWords >= 40) {
        $chargePerWord = 25;
    }
    else if ($numberOfWords < 80 && $numberOfWords >= 60) {
        $chargePerWord = 20;
    }
    else if ($numberOfWords < 100 && $numberOfWords >= 80) {
        $chargePerWord = 17;
    }
    else if ($numberOfWords >= 100) {
        $chargePerWord = 15;
    }
    else {
        $chargePerWord = 0;
    }

    $Charge = $numberOfWords * $chargePerWord;

    echo "The number of words in the advertisement is: " . $numberOfWords . "<br>";
    echo "The charge per word is: LKR " . $chargePerWord . "<br>";
    echo "The total charge for the paper advertisement is: LKR " . $Charge;
?>
