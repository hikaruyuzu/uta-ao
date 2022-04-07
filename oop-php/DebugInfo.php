<?php

require_once "data/ObjectCloning.php";

use Data\Cloning\{Student};

// misal
$student1 = new Student();
$student1->name = "Yuzuko Hikaru";
$student1->city = "Tokyo";
$student1->age = 20;
$student1->setExample("Wakaranaii desu");

// debug info harus di overide di class field berada/ childnya
// disini untuk pemanggilan dari __debugInfo, bisa gunakan var_dump, karena __debugInfo adalah method yang di panggil oleh var_dump
var_dump($student1);