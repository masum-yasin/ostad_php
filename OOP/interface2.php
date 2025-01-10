<?php
interface Vehicle {
    function start();
    function stop();
    function getMileage($distance,$fuel);
}

abstract class VehicleX implements Vehicle{
    function getMileage($distance, $fuel)
    {
        echo "Vehicle Milse is". $distance / $fuel;
    }
}

class Car extends VehicleX{
    public function start()
    {
        echo "Vehicle Start Now";
    }
    public function stop(){
        echo "Vehicle Stop Now";
    }

    public function getMileage($distance, $fuel)
    {
        echo "Vehicle Milesage is". $distance / $fuel . "kmpl";
    }
    
}
class MotorCycle extends VehicleX {
    public function start()
    {
        echo "MotorCycle Start Now";
    }
    public function stop(){
        echo "MotorCycle Stop Now";
    }
   
}
class Truck extends VehicleX{
    public function start()
    {
        echo "Truck Start Now";

    }
    public function stop(){
        echo "Truck Stop Now";
    }
    public function getMileage($distance, $fuel)
    {
        echo "Truck Import From Canada". $distance *  $fuel."MPL";

    }
    
}

$m = new MotorCycle();
$m->start();
echo "<br>";
$m->stop();
echo "<br>";
$m->getMileage (20, 10);
echo "<br>";
$c = new Car();
$c->getMileage(60, 6);
echo "<br>";
$d = new Truck();
$d->getMileage(50, 5);

?>