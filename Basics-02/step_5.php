<?php


function convert($word){
    switch($word){
        case($word=="one"): echo 1;
        break;
        case($word=="two"): echo 2;
        break; 
        case($word=="three"): echo 3;
        break; 
        case($word=="four"): echo 4;
        break; 
        case($word=="five"): echo 5;
        break; 
        case($word=="six"): echo 6;
        break; 
        case($word=="seven"): echo 7;
        break; 
        case($word=="eight"): echo 8;
        break;
        case($word=="nine"): echo 9;
        break;
        default: echo "not a number";
    };
};

convert('eight');