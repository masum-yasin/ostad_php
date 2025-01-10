<?php

class Person {
        private $name;
        private $age;
    
        // Setter for name
        public function setName($name) {
            $this->name = $name;
        }
    
        // Setter for age
        public function setAge($age) {
            $this->age = $age;
        }
    
        // Getter for name
        public function getName() {
            return $this->name;
        }
    
        // Getter for age
        public function getAge() {
            return $this->age;
        }
    
        // Introduce the person
        public function introduced() {
            echo "My name is {$this->name} and I am {$this->age} years old.";
        }

        public function __clone()
        {
            $this->name = "{$this->name}";
        }
    }
    
    $p = new Person();
   
    $p->setName("Md Mashum Hossin");
    $p->setAge(26);
   
    $p->introduced(); 
    echo '</br>';
    $p2 = clone $p;
    $p2->introduced();

echo "<br>";

    $array = ['name' => "Md Mashum Hossin", 'age' => 70, 'city' => "New Yourk", 'profission' => 'conporate job'];
    $en_jos = json_encode($array);
    print_r($en_jos);

    echo "<br>";

    // convert to arrary
    $d_code = json_decode($en_jos);
    print_r($d_code);


    class MyGadgets{
        public static $myDSLRName = 'CANON 2765';

        public function DSLR(){
            echo self::$myDSLRName;
        }
    }

MyGadgets::$myDSLRName;
    

?>