<?php 
class Father
{

  public function __construct(){
   
    echo "Bangladesh is a Bigest Country"."<br>";
  }
}
$myFather = new Father();


// Constructor Method Pass parameter value
class Mother
{
  public $name;
  public $age;
  public function __construct($name, $age, $country){
     $this->name = $name;
     $this->age = $age;
     echo $this->name."<br>";
     echo $this->age."<br>";
     echo $country."<br>";
    
 
  }
}
echo "<br>";

$myFather = new Mother("Rahima Akter Parvin", 42, "Khulan");



// Property Value Change With Constructor Method//

class Brother
{
  public $name = "Ifran Khan";
  public $age = 42;

  public function __construct($newName,$newAge){
  $this->name = $newName;
  $this->age = $newAge;
  echo $this->name."<br>";
  echo $this->age."<br>";

  

  }
}
$myFather = new Brother("Kamrul Hasan",36);




?>