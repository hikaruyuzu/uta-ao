<?php


function getGenap(int $max) : Iterator {
    for ($i = 0; $i <= $max; $i++) {
        if ($i % 2 == 0) {
            yield $i; // disini yield akan otomatis mengembalikan dia sebagai iterator, jika mau contoh lebih jelas lihat file ObjectIterator.php
        }
    }
}

$iteratos = getGenap(100);
foreach ($iteratos as $value) {
    echo "data $value" . PHP_EOL;
}