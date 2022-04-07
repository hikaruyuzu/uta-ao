<?php

// jika kamu ingin menggunakan class atau helper atau constant berulang kali di dalam namespace kamu bisa menggunakan import ini
// agar kamu tidak perlu menybutkan nama namespaceny dan lokasinya saetiap membuat object
// kamu bisa menggunakan keyword use
require_once "data/ConstantNamespace.php";
require_once "data/Helper.php";

use Data\One\Users\ConstantNamespace;
//use Data\Two\Sellers\ConstantNamespace; -> disini akan error jika kamu import 2 hal yang hampr sama walaupun beda,  olusinya kamu bisa menggunakan alias
use function Data\Helper\ErrorHandler;
use const Data\Helper\APPLICATION;

$user1 = new ConstantNamespace();
$user2 = new ConstantNamespace();

var_dump($user1);
var_dump($user2);

ErrorHandler();
var_dump(APPLICATION);

