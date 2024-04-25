<?php 
$name = "Golam Rabbil";
$age = 60;
$address = "Maymansing";

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