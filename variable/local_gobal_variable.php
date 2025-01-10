<?php 
$name = "Golam Rabbil";
$age = 60;
$address = "Maymansing";
$isBangladesh = true;
$weight= 65.5;
$country = array('India', "canada", "pakistan");

function myFunc3(){
    global $country;
    print_r($country)."<br>";
};
myFunc3();

// Global Variable;
function myfun(){
    global $name;
    echo $name."<br>";
}
myfun();

function myfun2(){
    $name = "khayrul Alam Rayan";
    echo $name;
}
myfun2();


?>