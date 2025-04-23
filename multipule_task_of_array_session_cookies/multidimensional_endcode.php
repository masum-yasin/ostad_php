<?php
$multidimen = [
    [
        'fname' => 'Khayrul Alam',
        'lname' => 'Rayan',
        'age' => 40,
        'country' => 'Bangladesh',
        'city' => 'Dhaka',
        'Email' => 'rayan@gmail.com',
        'phone' => '01920798865',
    ],
    [
        'fname' => 'John',
        'lname' => 'Doe',
        'age' => 35,
        'country' => 'USA',
        'city' => 'New York',
        'Email' => 'john.doe@example.com',
        'phone' => '0123456789',
    ],
    [
        'fname' => 'Maria',
        'lname' => 'Gomez',
        'age' => 28,
        'country' => 'Spain',
        'city' => 'Madrid',
        'Email' => 'maria.gomez@example.com',
        'phone' => '0987654321',
    ],
    [
        'fname' => 'Li',
        'lname' => 'Wei',
        'age' => 30,
        'country' => 'China',
        'city' => 'Beijing',
        'Email' => 'li.wei@example.com',
        'phone' => '01122334455',
    ],
];
$encode = json_encode($multidimen);
echo $encode;

?>