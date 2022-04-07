<?php

require_once "data/ObjectCloning.php";

use Data\Cloning\{Student};

// misal
$student1 = new Student();
$student1->name = "Yuzuko Hikaru";
$student1->city = "Tokyo";
$student1->age = 20;
$student1->setExample("Wakaranaii desu");

// var_dump($student1);
// kita coba clone, btw is clone ini bisa cloning private field
// secara otomatis dia akan melakukan clone ke semua field yang ada di field ojectnya,
// nah kamu bisa melakukan copy beberapa field saja dengan mengoveride fucntion __clone(), fimana disini kita bisa unset(field yang mau di hapus)
// work flow clone = $student1 -> clone student1 ke student 2 -> function __clone() dipanngil -> data di proses di __clone() -> meghasilkan output
// misal
$student2 = clone $student1;
var_dump($student2);
