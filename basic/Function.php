<?php
// function di php bisa dibuaat dimana saja
// bisa di dalam block if dll

function helloMyWaifu() {
    echo "Hello Kaguya shinomiya from anime Kaguya sama love is war" . PHP_EOL;
}


helloMyWaifu();
helloMyWaifu();
helloMyWaifu();

// kamu juga bisa
$create = true;
if ($create) {
    function fromBlockIf() {
        echo "Hello function from block if " . PHP_EOL;
    }
}

fromBlockIf();



