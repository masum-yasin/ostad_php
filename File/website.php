<?php
$startTime = microtime(true);
$website = file_get_contents('https://jsonplaceholder.typicode.com/posts');
$endTime = microtime(true);
echo $website;
echo "<br>";
$execuationTime = ($endTime - $startTime) *1000;
echo $execuationTime;
?>