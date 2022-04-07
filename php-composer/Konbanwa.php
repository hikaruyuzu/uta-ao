<?php

require_once __DIR__ . '/vendor/autoload.php';

$costumer = new \Hikaru\Learn\Konbanwa("Hikaru san");
$say = $costumer->Konbanwa("Kaguya shinomiya");
echo $say;


$greetings = new \Hikaru\Learn\Konbanwa("Sagiri Izumi");
$myname = $greetings->Konbanwa();
echo $myname;
