<?php
// Array to String Conversion
$fruits = ['apple', 'banana', 'orange', 'jackfruit', 'guava', 'pine-apple'];
$fruitsAll = implode(' , ', $fruits);
echo $fruitsAll;
echo "<br>";
// String to Array conversion
$fruitsExplode = explode(',', $fruitsAll);
print_r($fruitsExplode);
echo "<br>";
// Array to json object convert
$fruits_encode = json_encode($fruitsExplode);
echo $fruits_encode;
echo "<br>";
$fruits_decode = json_decode($fruits_encode);
print_r($fruits_decode);

?>