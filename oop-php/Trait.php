<?php

require_once "data/SayGoodBye.php";

use Data\Traits\{SayGoodBye, SayHello, HasName, Person, Person1, Person2, TestAbstraact};

$person = new Person();
$person->name = "Kaguya sama love is war";
$person->sayHello($person->name);
$person->goodBye("Kaguya san");

// dia akan tetap megakses trait utama
$person2 = new Person2();
$person2->name = "Kaguya sama love is war";
$person2->sayHello($person2->name);
$person2->goodBye("Kaguya san");
