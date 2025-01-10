<?php
// ae function key ke value te convert kore and value ke key te convert kore
$array =  [
    "first_name" => "John",
    "last_name" => "Doe",
    "email" => "john.doe@example.com",
    "age" => 28
];
$arrayFlip = array_flip($array);
print_r($arrayFlip);

?>