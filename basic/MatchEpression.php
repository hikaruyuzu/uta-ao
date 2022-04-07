<?php

// digunakan untuk opsi lain swttch case yang lebih simple
// bisa digunakan untuk melakukan operasi perbanfingan
//atau operasi function yang mengembalikan nilai boolean


$animeRating  = 6;

$result = match (true) {
    $animeRating <= 5 => "Bad anime",
    $animeRating > 5 && $animeRating < 7 => "middle anime",
    $animeRating >= 7 => "Good anime",
};

echo $result .PHP_EOL;

// kamu juga bisa memasukan function kedalam operasinya