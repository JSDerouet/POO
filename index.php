<?php

require_once 'bycicle.php';
$bike = new Bycicle('blue');
var_dump ($bike);
$bike->setCurrentSpeed (0);
var_dump($bike);

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed . ' km/h' . '<br>';
echo $bike->brake();

$rockrider = new Bicycle('yellow');

$tornado = new Bicycle('black');

$tornado->forward();

require_once 'car.php';
$hommersPinkSedan = new Car('pink', 4, 'diesel');
$margesStationWagon = new Car('orange', 6, 'essence');
$teenageHomersCar = new Car('yellow', 2, 'essence');
$lilBandit = new Car('red', 2, 'essence');
$springfieldPolice = new Car('black', 4, 'gazole');
$flandersGeo = new Car('purple', 4, 'gazole');
$theHomer = new Car('lightgreen', 2, 'gazole');
$mrPlow = new Car('red', 10, 'gazole');
$canyonero = new Car('red', 8, 'essence');
$krustysporsche = new Car('grey', 2, 'electric');
$pattyAndSelmasThing = new Car('green', 4, 'essence');
$lovejoysKarmannGhia = new Car('white', 2,'electric');
