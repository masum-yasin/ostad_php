<?php
// Array to String Conversion
$person = [
    "name" => "Mashum Hossain",
    "age" => 30,
    "gender" => "Male",
    "email" => "mashum@example.com",
    "phone" => "+8801234567890",
];
$person_encode = json_encode($person);
echo$person_encode;
echo "<br>";
$person_decode = json_decode($person_encode, true);
print_r($person_decode);

?>           