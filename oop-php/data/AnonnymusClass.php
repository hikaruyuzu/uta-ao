<?php

// anonnymus class digunakan untuk membuat object secara langsung bersma classanya
// digunakan untuk hal hal ang simple saja, biasanya digunakan untuk implementasi interface atau absract yang relaatif sedrhana

interface Helper
{
    public function ErrorHandler() : void;
}

// begini cara membuat annymus class, kamu juga bisa gunakan costructor di dalamnya
// apa-a[a sja ang bisa dilakukan di class bisa dilakukan disini
$handler = new class("Kaguya chan") implements Helper {
    public string $name;
    // kita juga bisa membuat conctructor disini
    public function __construct(string $name) {
        echo "Hello $name form constructor" . PHP_EOL;
    }
    public function ErrorHandler(): void
    {
        echo "Terjadi error dengan message ...." . PHP_EOL;
    }
};

$handler->ErrorHandler();