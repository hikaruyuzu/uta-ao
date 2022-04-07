<?php

// baca docnya di https://www.php.net/manual/en/pcre.pattern.php
// disini kita bisa melakuukan pengecekan untuk validasi email misalnya

$element = [];
// element terakhir bisa menampung regex pattern apa saja yang di dapat
$validation = (bool)preg_match_all("/@|.|.com|[\s]|yahoo|gmail|,|/i", "kaguyachan@gmail.com", $element);
var_dump($validation);
var_dump($element);

$filter = preg_replace("/anjing|banke|tolol/i", "* * *", "ih kok kamu anjing banget sih tololl");
var_dump($filter);

$toArray = preg_split("/[\s,-]/", "Hello kaguya-san from anime kaguya sama love,is-war");
// return nilai berupa array
var_dump($toArray);
