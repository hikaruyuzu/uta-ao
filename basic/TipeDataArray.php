<?php

$ages = array(
    12, 34, 35, 17, 8.1
);

var_dump($ages);

$names = ["Yuzuko Hikaru", "Tsukasa Chan", "Horimiya", "Ranko", "Rem"];
var_dump($names);

$names[0];
// add di last index
$names[] = "Ram chan";
var_dump($names);


// mengubah nilai index
$names[4] = "Rem chan";
var_dump($names);

// menghapuss indexx
assert($names[2]);
var_dump($names);

// mendapatkan panjang index
var_dump(count($names));

// map di array
$data = array(
    "name" => "Yuzuko Hikaru",
    "age" => 19,
    "address" => [
        "country" => "Japan",
        "city" => "Tokyo",
    ]
);

// aksess, ubah etc sama saja
var_dump($data["address"]["city"]);

// map di array
$dataComplate = [
    "name" => "Yuzuko Hikaru",
    "age" => 19,
    "married" => true,
    "wife" => "Rem chan",
    "address" => [
        "country" => "Japan",
        "city" => "Tokyo",
    ]
];

var_dump($dataComplate);






