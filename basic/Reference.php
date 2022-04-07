<?php

// like pointer, tapi jarang dipake
$name = "Kaguya shinomiya";
function changeName(string &$value) {
    $value = "Rem chan";
}

changeName($name);
echo "$name" . PHP_EOL; // akan berubah nilainya


$status = "ok";

$request = &$status;
$request = "bad request";

echo $status;
