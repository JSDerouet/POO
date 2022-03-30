<?php

require_once 'bycicle.php';
$bicycle = new Bycicle('blue', 1);

echo $bicycle->forward();

var_dump($bicycle);

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
