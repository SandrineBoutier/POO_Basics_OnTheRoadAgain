<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'Skateboard.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';

$bike = new Bicycle('blue',1);
var_dump($bike);
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>' . '<br>';


$toyota = new Car('green', 4, 'electric');
var_dump($toyota);
echo $toyota->forward();


$fourgonnette = new Truck('yellow',3,'electric',100);
$fourgonnette->setCurrentSpeed(50);
var_dump($fourgonnette);

echo $fourgonnette->fillingStatus();
echo '<br> Truck speed : ' . $fourgonnette->getCurrentSpeed() . ' km/h' . '<br>';
echo $fourgonnette->forward();
echo $fourgonnette->brake();
echo '<br> Truck speed : ' . $fourgonnette->getCurrentSpeed() . ' km/h' . '<br>';

$kangoo = new Truck('red',2,'fuel',70);
$kangoo->setCurrentSpeed(25);

echo '<br> Truck speed : ' . $kangoo->getCurrentSpeed() . ' km/h' . '<br>';
echo $kangoo->forward();
echo '<br> Truck speed : ' . $kangoo->getCurrentSpeed() . ' km/h' . '<br>';
echo $kangoo->brake();
echo $kangoo->fillingStatus();
echo '<br> Truck speed : ' . $kangoo->getCurrentSpeed() . ' km/h' . '<br>';

$monsterTruck = new Truck('pink',8,'fuel',20);

$A7 = new MotorWay();
$A7->addVehicle($kangoo);
$A7->addVehicle($toyota);
$A7->addVehicle($bike);
var_dump($A7);

$ruedelasoif = new PedestrianWay();
$planche = new Skateboard('purple',0);
$ruedelasoif->addVehicle($bike);
$ruedelasoif->addVehicle($fourgonnette);
$ruedelasoif->addVehicle($planche);
var_dump($ruedelasoif);



