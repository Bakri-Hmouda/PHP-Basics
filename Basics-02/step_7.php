<?php

$search = array('Python', 'PHP');
$replace = array( "php", 'Python');

$input = "there should be 2 PHP Here and Python Here";

$replace = str_replace($search, $replace, $input, $count);

echo $replace."\n";
echo $count;