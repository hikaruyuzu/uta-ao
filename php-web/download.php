<?php

if (isset($_GET['key']) && $_GET['key'] = 'hikaru') {
    // gunakan , inline untuk show dan display dna attachment untuk download
    header('Content-Disposition: attachment; filename="filename.jpg');
    // header('Content-Type: image/jpg');
    readfile(__DIR__ . '/files/capucino.jpg');
} else {
    echo 'Infalid key' . PHP_EOL;
}