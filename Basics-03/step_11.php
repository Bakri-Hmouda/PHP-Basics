<?php

$personal_details = array("name" => "Rajesh Rao", "occupation" => "Engineer", "age" => 39, "country" => "India");

function print_array($arg)
{
    foreach ($arg as $key => $value) {
        echo "$key=$value\n";
    }
}

print_array($personal_details);
