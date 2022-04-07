<?php

require_once "data/Location.php";

use Location\{Location, City,Province, Country};

// disini kamu ga bisa buat object dengan class Location, karena dia adalah abstract
//$location = new Location(); akan error

$city = new City();
$province = new Province();
$country = new Country();
