<?php
// key ke variable convert kore
$alice = [
    "first_name" => "Alice",
    "last_name" => "Johnson",
    "email" => "alice.johnson@example.com",
    "age" => 24
];
extract($alice);
echo $first_name."<br>";
echo $email."<br>";
echo $last_name."<br>";

?>