<?php
require_once "data/Manager.php";

$manager = new Manager();
$manager->username = "Yuzuko hikaru";

$vp = new VicePesident();
$vp->username = "Yuzuko hikaru";

$manager->sayHello("Rem chan");
$vp->sayHello("Kaguya shinomiya");


