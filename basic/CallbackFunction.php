<?php

//digunakan untuk menampung function di args(memasukan function di arguments)
// gunakan data type callable
// disini kita bisa  mamasukan berbagai macam jenis function, annonymus , arrow dll

function getNiceLetters(string $name, callable $filter) {
    // disini call)_user_func sama saja dengan kamu memanggil $filter($name)
    $finalLeters = call_user_func($filter, $name);
    echo "Hello $finalLeters" . PHP_EOL;
}


// bisa menggunakan annonymus dll
getNiceLetters("kaguya shinomiya", function (string $value) : string {
    return strtoupper($value);
});

// atau
function wow(string $value) : string {
    return strtoupper($value);
}

getNiceLetters("Rem chan", "wow");

// etc





