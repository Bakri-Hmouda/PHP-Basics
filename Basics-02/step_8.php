<?php

function is_power_ofTwo($x){
if (($x & ($x - 1)) == 0) return true;
else  return false;
};

echo(is_power_ofTwo(64));