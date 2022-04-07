<?php


// biasanya digunakan sebagai function parameter
// dia bisa memasukan function dengan "namafunction" kedalam  variable string


function foo() {
    echo "foo" . PHP_EOL;
}

function ber() {
    echo "ber " .PHP_EOL;
}

$getFoo = "foo";
$getFoo(); // call method get foo

$getBer = "ber";
$getBer();

// kamu bisa menggunakannya untuk di dalam parameter sebuah function, dalam bentuk string
function getModifyName(string $name, $helperFunction) {
    $result = $helperFunction($name);

    echo "Hello $result yorosiku onegaizimasu" . PHP_EOL;
}

function testSampleHelper($value) : string{
    return "ayang $value";
}
// seperti ini
getModifyName("Kaguya shinomiya", "testSampleHelper");
getModifyName("Kato megumi", "strtoupper");
getModifyName("Kato megumi", "strtolower");








