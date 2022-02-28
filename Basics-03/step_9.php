<?php

$transactions = array(
    array(
        "id" => 1,
        "debit" => 2,
        "credit" => 3
    ),
    array(
        "id" => 2,
        "debit" => 15,
        "credit" => 10
    )
);


foreach ($transactions as $key => $value) {
    echo "the absolute value of transaction " . ($key + 1) . " is: " . abs($value["debit"] - $value["credit"]) . "\n";
};

print count($transactions);
