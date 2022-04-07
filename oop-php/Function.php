<?php

require_once "data/Person.php";

$person = new Person();
$person->name = "Kaguya shinomiya";
$person->city = "Tokyo";
$person->age = 17;

// memanggil function dari class
$result = $person->sayHelloFromYourWaifu($person->name, "Yuzuko Hikaru");
echo $result . PHP_EOL;

$person->getAppInfo();