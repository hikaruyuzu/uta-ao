<?php

require_once "data/Person.php";

$peron = new Person();

$peron->name = "Yuzuko Hikaru";
$peron->city = "Hokkaido";
$peron->contry = "Japan";
$peron->age = 20;

echo "$peron->name" . PHP_EOL;
echo "$peron->city" . PHP_EOL;
echo "$peron->contry" . PHP_EOL;
echo "$peron->age" . PHP_EOL;

// jika ...
$peron2 = new Person();
$peron2->name = "Kaguya shinomiya";
$peron2->city = "Tokyo";
$peron2->age = null;
echo "$peron2->name" . PHP_EOL;
echo "$peron2->city" . PHP_EOL;
echo "$peron2->contry" . PHP_EOL;
echo "$peron2->age" . PHP_EOL;






