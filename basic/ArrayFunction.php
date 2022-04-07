<?php


$data = [1, 2, 3, 4, 5, 6, 7 ,8, 9, 10];

$functionArray = fn(int $value) => $value * 10;
$finalResult =  array_map($functionArray, $data);
var_dump($finalResult);


// baca dokumentasi lengkapnya di https://www.php.net/manual/en/ref.array.php
// digunakan untuk memanipulasi array