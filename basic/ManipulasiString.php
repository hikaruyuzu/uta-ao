<?php

// dot operator digunakan untuk mengabungkan data . alih alh menggunakna +
// PHP_EOL memiliki fungdi yang sama seperti enter \n

$name = "Kato Megumi";
$anime = "Saekano";
echo  "Hello my namw is " .$name . " from anime " .$anime . PHP_EOL;

// konversi tioe data dari string ke number atausaebaliknya
$number = (int)"1000";
var_dump($number);

$data = (float)"19.78";
var_dump($data);
// dll

$waifu = "Rem chan";
echo $waifu[0];
echo $waifu[1];
echo $waifu[2];

$love = "Kato megumi";
echo "Hello " .$love . "from anime saekano " .PHP_EOL;
// bisa dibuat lebih simple menjadi
echo "Hello $love aku sayang kamu ".PHP_EOL;

// jika kamu ingin menambahkan atau mengabungkan  string di belakang variable kamu bisa memakai {}
$book = "Eromanga sensei";
echo "Manga ${book}s ditulis oleh Tsukasa Fushimiya";