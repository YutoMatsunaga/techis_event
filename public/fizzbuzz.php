<?php

$start = 1;
$end = 100;

$value = $start;
while($value <= $end){

    if(($value % 3) == 0 && ($value % 5) == 0){
        echo $value . 'Fizz Buzz' . "<br />";
    }elseif(($value % 3) == 0){
        echo $value . 'Fizz' . "<br />";
    }elseif (($value % 5) == 0){
        echo $value . 'Buzz' . "<br />";
    }else {
        echo $value . "<br />";
    }

    $value = $value + 1;
}






