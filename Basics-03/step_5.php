<?php

$str = "12345";
$sum = 0;

for ($i = 0; $i < strlen($str); $i++) {
    $sum += $str[$i];
};

echo " the sum is: " . $sum . "\n";
