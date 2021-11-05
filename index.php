<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'HightWay.php';
require_once 'ResidentialWay.php';
require_once 'PedestrianWay.php';
require_once 'MotorWay.php';




$Car = new Car("green", 5, "diesel", true);

try {
    var_dump ($Car->start());   
} catch(Exception $e){
    $Car->setParkBrake();
} finally {
    echo "Ma voiture roule comme un donut";
}



