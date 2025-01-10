<?php

// $arr = [
//     ['a', 'b', 'c','d','f'],
//     ['g', 'h', 'i', 'j'],
//     ['g', 't', 'i', 'j'],
//     ['g', 'h', 'b', 'y'],
// ];
// echo $arr[2][1];
// Multidaimonsional Associtive Array
$array = [
    ["a" => "Apple", "b" => "Banana", "c" => "Orange", "d" => "Mango"],
    ["a" => "Jackfruit", "b" => "Banana", "c" => "Orange", "d" => "Mango"],
    ["a" => "Guava", "b" => "Orange", "c" => "Orange", "d" => "Mango"],
    ["a" => "Mango", "b" => "Banana", "c" => "Orange", "d" => "Mango"],
];

// echo $array[2]['b']."<br>";
// echo $array[1]['d'];
foreach($array as $child){
    foreach($child as $key=>$value){
        echo "$key : $value". "<br>";
    }
}

?>