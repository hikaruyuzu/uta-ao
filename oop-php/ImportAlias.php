<?php

require_once "data/ConstantNamespace.php";
require_once "data/Helper.php";

// untuk membuat alias kamu bisa menggunakan as key

use Data\One\Users\ConstantNamespace as User;
use Data\Two\Sellers\ConstantNamespace as Seller;
use function Data\Helper\ErrorHandler as help;
use const Data\Helper\APPLICATION as APP;

$user1 = new User();
$user2 = new Seller();

help();
echo APP;

