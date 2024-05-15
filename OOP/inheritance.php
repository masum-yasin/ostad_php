<?php 
class Father
{
    public function Count100(){
        for($i = 0; $i<=100; $i++){
            echo "$i"."<br/>";
        }
    }
}
$myCount = new Father();
$myCount->Count100();


?>