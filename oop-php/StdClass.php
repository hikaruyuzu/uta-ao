<?php

// std class digunakan untuk mengubah tipe data ARRAY ke OBJECT atau OBJET ke ARRAY
// misal

$data = [
  "name" => "Yuzuko Hikaru",
  "city" => "Tokyo",
  "country" => "Japan"
];
// cara akses jika tidak menggunakan object
echo $data["name"] . PHP_EOL;
// nah kita konverrsi menjadi object
$dataObject = (object)$data;
var_dump($dataObject);
// nah jadi kita bisa mengaksesnya dengan cara seprti kalau kita akses object
echo $dataObject->name . PHP_EOL;
echo $dataObject->city . PHP_EOL;
echo $dataObject->country . PHP_EOL;

// atau kamu bisa konversi object dari class misal ke array
require_once "data/Person.php";
$person = new Person("Kaguya shinomiya", 20);
// kita konversi ke array
$arrayPerson = (array) $person;
var_dump($arrayPerson);