<?php

$num = "333";
$num_length = strlen($num);
$sum = 0;

for($i = 0; $i < $num_length; $i++){
$sum = $sum + $num[$i];
};

echo $sum;