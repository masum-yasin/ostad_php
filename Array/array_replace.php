<?php 
// array te value replace kora jye ae function diye
$country = ["Bangladesh", "canada", "buthan", "Pakistan"];

$replace = array_replace($country,[0=>"India", 2=>"Nepal"]);
print_r($replace);

?>