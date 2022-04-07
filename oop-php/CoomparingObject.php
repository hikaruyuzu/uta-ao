<?php

require_once "data/ObjectCloning.php";

use Data\Cloning\{Student};

// jika kamu membandingkan object dengan
// == ini akan membandingkan isi fieldny saja,tidak degan memory
// === ini akan membandingkan beserta dengna dimaan object tersebut di memory, (identik), jika dia merupkan dua object yang berbeda maka
// dia akan bernilai false

$student1 = new Student();
$student1->name = "Hikaru";
$student1->city = "Shibuya";

$student2 = new Student();
$student2->name = "Hikaru";
$student2->city = "Shibuya";

// Comparing
var_dump($student1 == $student2); // true
var_dump($student1 === $student2); // false, karena dia adalah object yang berbeda
var_dump($student1 === $student1); // true, karena dia adalah object yang sama

