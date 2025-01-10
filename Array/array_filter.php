<?php
// akti array thake je value filter kore ana jye.
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
function even($n){
    return $n % 2 ==0;
}
$filter = array_filter($numbers, 'even');
// print_r($filter)."\n";
function odd($m){
    return $m % 2 !==0;
}
$odd_filter =array_filter($numbers, 'odd');
print_r($odd_filter); 


?>