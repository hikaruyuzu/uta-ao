<?php

require_once "data/Car.php";

use Cars\{Car, KinsdOfCar, Avanza};

$carAvanza = new Avanza("Avanza 2020", 4);
$carAvanza->getCar();
echo $carAvanza->getTire();