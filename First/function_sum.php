<?php

function processmarks($marr){
    $sum = 0;
    foreach ($marr as $value){
        $sum += $value;
    }
    return $sum;
}

$yash = [45,65,78,98,99,89,90];
$summarks = processmarks($yash);
echo "Total marks is $summarks "

?>