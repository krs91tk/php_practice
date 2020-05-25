<?php
//1
function double($x){
    echo $x * 2;
    echo "\n";
}
double(2);

//2
function f($a, $b){
    echo $a + $b;
    echo "\n";
}
f(1, 2);

//3
function arr($arr){
    $total = 1;
    foreach($arr as $ar){
        $total *= $ar;
    }
    return $total;
}
echo arr(array(1, 3, 5, 7, 9)) . "\n";

//4
function max_array($max_arr){
    $max_number = $max_arr[0];
    foreach($max_arr as $value){
        if ($max_number < $value){
            $max_number = $value;
        }
    }
    return $max_number;
}
echo max_array(array(1, 3, 5, 7, 9));
