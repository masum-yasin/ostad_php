<?php
$person = [
    "name" => "Mashum Hossain",
    "age" => 30,
    "gender" => "Male",
    "email" => "mashum@example.com",
    "phone" => "+8801234567890",
    "skills" => ["PHP", "JavaScript", "HTML", "CSS", "Laravel"],
];
$persingString = json_encode($person);
echo $persingString;
file_put_contents('person.txt', "\n".$persingString, FILE_APPEND);
?>