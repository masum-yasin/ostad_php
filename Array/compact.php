<?php
// variable er maddhoe value ....o show kore
$alice_first_name = "Alice";
$alice_last_name = "Johnson";
$alice_email = "alice.johnson@example.com";
$alice_age = 24;
$arr=compact('alice_first_name','alice_last_name','alice_email','alice_age');
print_r($arr);

?>