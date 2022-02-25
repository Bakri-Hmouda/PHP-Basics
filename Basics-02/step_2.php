<?php

function number ($num){
    switch($num){
        case $num > 30: echo "$num is greater than 30";
        break;
        case $num > 20: echo "$num is greater than 20";
        break;
        case $num > 10: echo "$num is greater than 10";
        break;
    };
};

number(21);