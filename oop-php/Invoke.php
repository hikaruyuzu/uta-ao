<?php

require_once "data/ObjectCloning.php";

use Data\Cloning\{Student};

// misal
$student1 = new Student();
$student1->name = "Yuzuko Hikaru";
$student1->city = "Tokyo";
$student1->age = 20;
$student1->setExample("Wakaranaii desu");

$student1($student1->name, $student1->city, $student1->age);
