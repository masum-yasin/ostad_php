<?php
$array = ["a" => "Apple", "b" => "Banana", "c" => "Orange", "d" => "Mango"];
// print_r($array);

// $a = json_encode($array);
// echo $a;

foreach($array as $key=>$valule){
    echo "$key: $valule". "<br/>";
}
foreach($array as $key=>$valule){
    echo $valule. "<br/>";
}
foreach($array as $key=>$valule){
    echo $key. "<br/>";
}

?>