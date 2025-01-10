<?php
// Index array
$array = array("apple", 'banana', "Orange", "Jackfruit", "Mango");
$array2 = ["Dhaka", "Comilla", "Dinajpur", "Barishal", "sylhet"];



echo $array[3]."<br/>";
echo $array2[4];

// for($i = 0; $i<count($array); $i++){
//     echo $array[$i]."<br/>";
// }



foreach($array as $key =>$value){
    echo $value. "<br>";
}
?>