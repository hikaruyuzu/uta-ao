<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->username = "Yuzuko Hikaru";
$manager->sayHello("Kaguya shinomiya");

$vp = new VicePesident();
$vp->username = "Yuzuko Hikaru";
$vp->sayHello("Rem chan");
