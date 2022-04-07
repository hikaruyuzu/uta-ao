<?php

require_once "data/Person.php";

$person = new Person();
$person->name = "Yuzuko Hikaru";
$person->age = 20;
$person->city = "Shibuya";

$person->sayHello(null);
$person->sayHello("Kaguya shinomiya");
