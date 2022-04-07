<?php

$data = [
    "action" => null
];

// untuk mengecek jika data null atau belum di set, bis agunakan isset tapi lebih di rekomendasikan menggunakan
// null coalescing operator

if (isset($data["action"])) {
    $action = "action ". $data["action"] . " is set " . PHP_EOL;
} else {
    $action = "nothing set";
}

echo $action .PHP_EOL;

// sudah tidak di support null coalescing semenjak php 7
//$action = $data["action"] ?? "nothing";
//echo $action .PHP_EOL;


// diganti dengan ternary operator
$getSomething = isset($data["action"]) ? "action ". $data["action"] . " is set" :  "nothing";
echo $getSomething . PHP_EOL;