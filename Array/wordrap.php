<?php
// String to be wrapped
$message = "It bridges the gap between your Laravel application and your modern Vue or React frontend, allowing you to build full-fledged, modern frontends using Vue or React while leveraging Laravel routes and controllers for routing, data hydration, and authentication — all within a single code repository.";

// Apply wordwrap with 20 characters per line
$result = wordwrap($message, 20, "<br/>\n");

echo $result;
?>
