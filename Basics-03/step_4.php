<?php


$str = "Using while loop write a programme that count number of times a word present in a sentence.";

function count_word($text, $word)
{

    $str_array = explode(" ", $text);
    $array_length = count($str_array);
    $i = 0;
    $counter = 0;

    while ($i < $array_length) {
        if ($str_array[$i] == $word) {
            $counter++;
        };
        $i++;
    };
    echo " The word: '$word' is found $counter in the inputted string\n";
    // print_r($str_array);
};

count_word($str, "a");
