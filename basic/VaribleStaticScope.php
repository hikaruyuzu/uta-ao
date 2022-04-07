<?php
// digunakan untuk mengakses varibale local scope untuk melanjutkan life cyclenya

function getWakaranai() {
    static $counter = 1;
    echo "counter now - $counter" . PHP_EOL;
    $counter++;
}
//  disini dia akan melanjutkan dari scope static sebelunya
getWakaranai();
getWakaranai();
getWakaranai();

