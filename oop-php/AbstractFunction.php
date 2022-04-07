<?php

require_once "data/Animals.php";

use Animals\{Animals, Cat, Monkey};

$cat = new Cat("Luna");
$cat->runAnimals("120");

$monkey = new Monkey("Juna");
$monkey->runAnimals("300");
