<?php

require_once "data/Person.php";

// kita bisa menggunakan keyeord cost untuk mendefinisikan const value
// jika kamu buat constantnya di dalam class kamu bisa mengaksesnya dengan
// NamaClass::NAMACONST

const VERSION = "1.0.0";
echo "App version " . VERSION . PHP_EOL;

echo "Author app " . Person::AUTHOR . PHP_EOL;


