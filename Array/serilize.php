<?php
// Array to String Conversion
$fruits = ['apple', 'banana', 'orange', 'jackfruit', 'guava', 'pine-apple'];
$fruitsAll = serialize($fruits);
echo $fruitsAll;
echo "<br>";
$unSerialize = unserialize($fruitsAll);
print_r($unSerialize);

?>