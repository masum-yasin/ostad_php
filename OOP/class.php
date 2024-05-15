<?php 
class car{
    public $color = "yellow";
    public function drive(){
        echo "I am Driving Now"."<br>";
    }
    public function washing(){
        echo "I do the wash my new car";
    }
}
$myObject = new car();
echo $myObject->color."<br>";
$myObject->drive();
$myObject->washing();


?>