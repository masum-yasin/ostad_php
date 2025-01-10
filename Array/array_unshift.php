<?php
// array te nirdisto element replace   kore 
$country = ["Bangladesh", "canada", "buthan", "Pakistan"];
array_splice($country, 0, 2,["demo", "demo"]);
print_r($country);

?>