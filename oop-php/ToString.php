<?php

require_once "data/ObjectCloning.php";

use Data\Cloning\{Student};

// misal
$student1 = new Student();
$student1->name = "Yuzuko Hikaru";
$student1->city = "Tokyo";
$student1->age = 20;
$student1->setExample("Wakaranaii desu");
// jika kita ga buat overide to stringnya di class nya dia akan error
$string = (string)$student1;
var_dump($string);


