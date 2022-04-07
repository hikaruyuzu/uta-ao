<?php

// arrow function hampir sama dengan annonymus function dimana secara functional sama saja

$animeName = "Kaguya sama love is war";
$ratingAnime = "9";

$withAnnonymus = function () use ($animeName, $ratingAnime) : string {
    return "Anime dengan judul $animeName memiliki rating $ratingAnime" .PHP_EOL;
};

// secara otomatis dia bisa akseas global var, tapi saat ini sudah depreceted
$withArrowFunction = fn() => "Anime dengan judul $animeName memiliki rating $ratingAnime" . PHP_EOL;

$data1 = $withArrowFunction();
$data2 = $withAnnonymus();
echo $data1 . PHP_EOL;
echo $data2 . PHP_EOL;

