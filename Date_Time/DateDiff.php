<?php
$date1 = new DateTime('now');
$date2 = new DateTime('2026-03-23 20:00:00');
$differenceDate = $date1->diff($date2);
echo $differenceDate->format('%Y years %m months %d days');
echo "<br>";
echo $differenceDate->format('%r%a Days');
echo "<br>";
// Create a new DateTime object with the correct timezone
$date3 = new DateTime('now', new DateTimeZone('Asia/Dhaka'));

// Format and display the date                                            
echo $date3->format('Y-m-d g:i:s A');

?>