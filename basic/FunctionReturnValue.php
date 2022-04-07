<?php

// : string merupakan tipe data yang di returnkan, kamu bisa membuatnya sesuai dngan ke inginanmu
function sayHello(string $name) : string {
    return "Hello $name nice to meet you";
}

$greetigs = sayHello("Kaguya shinomiya");
echo $greetigs . PHP_EOL;

// kamu bisa melakukan retun sesuai kondisi yang ada bisa retun > 1 tempat
function greetingsSomething(int $clock) : string {
    if ($clock >= 5 && $clock <= 11) {
        return "good morning";
    } else if ($clock >= 11 && $clock <= 17) {
        return "Good evening";
    } else {
        return "Good night";
    }
}


$clock = greetingsSomething(10);
echo $clock .PHP_EOL;