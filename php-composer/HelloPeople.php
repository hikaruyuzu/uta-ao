<?php

require_once __DIR__ . '/vendor/autoload.php';


use KizunaAI\Data\People;

// tidak perlu require once lagi karena sudah di auto load
// tapi sebelumua kamu harus menambahkan setting autoloadnya di composer.json
$kizuna = new People("Kaguaya shinomiya");
$myname = $kizuna->sayHello("hikaru");
echo $myname . PHP_EOL;
