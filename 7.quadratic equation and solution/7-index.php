<?php
$a = 3;
$b = 4;
$c = 1;

$discriminant = 0;
$x1 = 0;
$x2 = 0;
$realPart = 0;
$imaginaryPart = 0;

$discriminant = ( $b * $b ) - ( 4 * $a * $c );
echo "Discriminant: " . $discriminant . "<br>";

if ( $discriminant > 0 ) {
    $x1 = ( (-1 * $b) + sqrt($discriminant)) / ( 2 * $a );
    $x2 = ( (-1 * $b) - sqrt($discriminant)) / ( 2 * $a );
    echo "Two distinct real roots: root1 = " . $x1 . ", root2 = " . $x2;
} 

elseif ( $discriminant == 0 ) {
    $x1 =  (-1 * $b)  / ( 2 * $a );
    echo "One real root : " . $x1;
} 
else {
    $realPart = (-1 * $b) / (2 * $a);
    $imaginaryPart = sqrt((-1 * $discriminant) / (2 * $a));
    echo "Two complex roots: root1 = " . $realPart . " + " . $imaginaryPart . "i, root2 = " . $realPart . " - " . $imaginaryPart . "i";
}

?>