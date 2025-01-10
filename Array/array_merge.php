<?php
// onk gula array ke akti array te convert kora jye ae function er maddhome
$john = [
    "first_name" => "John",
    "last_name" => "Doe",
    "email" => "john.doe@example.com",
    "age" => 28
];

$jane = [
    "first_name" => "Jane",
    "last_name" => "Smith",
    "email" => "jane.smith@example.com",
    "age" => 32
];

$alice = [
    "first_name" => "Alice",
    "last_name" => "Johnson",
    "email" => "alice.johnson@example.com",
    "age" => 24
];

$bob = [
    "first_name" => "Bob",
    "last_name" => "Brown",
    "email" => "bob.brown@example.com",
];

$merge = array_merge($john,$jane,$alice,$bob);
print_r($merge);

?>