<?php
$person = [
    "name" => "Mashum Hossain",
    "age" => 30,
    "gender" => "Male",
    "email" => "mashum@example.com",
    "phone" => "+8801234567890",
    "skills" => ["PHP", "JavaScript", "HTML", "CSS", "Laravel"],
];
$personString = json_encode($person, JSON_PRETTY_PRINT);

$personFileRead = file_put_contents('person2.txt', $personString);
echo $personFileRead;
?>