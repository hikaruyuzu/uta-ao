<?php

// a + b, a == b(true jika memiliki key dan value yang sama), a === b(true jika identik)
// != (true jika a dan b tidak sama), !== (true jika a dan b tidak identik

$first = [
    "firstname" => "Yuzuko",
    "lastname" => "Hikaru",
];

$last = [
    "lastname" => "Hikaru",
    "firstname" => "Yuzuko",
];

$lastFull = $first + $last;
var_dump($lastFull);

var_dump($first == $last); // true
var_dump($first === $last); // false