<?php
// akti array thake nirdisto property ber korar khttre laghe 
$people = [
    [
        "first_name" => "John",
        "last_name" => "Doe",
        "email" => "john.doe@example.com",
        "age" => 28
    ],
    [
        "first_name" => "Jane",
        "last_name" => "Smith",
        "email" => "jane.smith@example.com",
        "age" => 32
    ],
    [
        "first_name" => "Alice",
        "last_name" => "Johnson",
        "email" => "alice.johnson@example.com",
        "age" => 24
    ],
    [
        "first_name" => "Bob",
        "last_name" => "Brown",
        "email" => "bob.brown@example.com",
        "age" => 40
    ]
];
$outPut = array_column($people, "first_name", 'email');
print_r($outPut);

?>