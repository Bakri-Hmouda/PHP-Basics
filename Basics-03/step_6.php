<?php

$str = "*";
$n = 10;

for ($i = 1; $i < $n; $i++) {

    for ($j = 0; $j <= $i; $j++) {
        echo $str;
    }
    echo "\n";
}

for ($i = $n; $i >= 0; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo $str;
    }
    echo "\n";
}
