<?php

class Manager
{
    var string $username;

    function sayHello(string $username) : void // void digunakan untuk memberi tau bahwa dia tidak memiliki retu valur
    {
        echo "Hello $username my name is Manager $this->username" . PHP_EOL;
    }

}

// gunakan extends untuk melakukan pewarisana

class VicePesident extends Manager
{
    function sayHello(string $username) : void // ovveride fucntion dari class parernt
    {
        echo "Hello $username my name is Vice Prsident $this->username" . PHP_EOL;
    }

}