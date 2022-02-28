<?php

$num = 6;
$factorial = 1;
$x = $num;

while ($x >= 1) {
    $factorial = $factorial * $x;
    $x--;
}

echo "The factorial of $num is $factorial";
