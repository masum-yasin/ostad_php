<?php
// String Lenth count kora hoy
// $message = "Bangladesh is a beautiful Country";

// $result = str_split($message);
// print_r($result);
$message2 = "Bangladesh is a population Country";
$allWord  =str_split($message2);
$countryWord = [];

foreach($allWord as $word){
    if(isset($countryWord[$word])){
        $countryWord[$word]++;
    }
    else{
        $countryWord[$word] = 1;
    }
}

print_r($countryWord);




?>