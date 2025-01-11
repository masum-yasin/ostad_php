<?php
// srtotime string to convert date 
$date = strtotime('today');
echo date('Y-m-d H:i:s', $date);
echo "<br>";
$dateafter10days = strtotime('today +10 days 6 Hours');
echo date('Y-m-d H:i:s',$dateafter10days);
echo "<br>";
// number of year week
$week =date('W');
echo $week;
echo "<br>";
$tomorrow = strtotime('tomorrow');
echo date('Y-m-d H:i:s', $tomorrow);
echo "<br>";
$date2 = strtotime('22nd May 2025 12 PM');
echo date('Y-m-d H:i:s', $date2);
?>