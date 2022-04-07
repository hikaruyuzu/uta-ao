<?php

class Person
{
    // kamu bisa membuat constant disini
    const AUTHOR = "Yuzuko HIkaru";
    const VERSION = "1.0.0";

    // ? digunakan jika data yang di inputkab boleh null, bisa digunakan di function juga

    var string $name;
    var string $city;
    var string $contry = "Japan";
    var ?int $age;

    // kamu bisa mmembuat costructor di php dengan nama func  __construct(string $parameter)
    // tidak seperti bahasa pemrograman lainnya di php menggunakan __construct()

    function __construct(string $name, int $age) {
        $this->name = $name;
        $this->age = $age;
    }


    function sayHelloFromYourWaifu(string $waifu, string $myname) : string
    {
        return "Hello watashi namaewa $waifu desu, aishiteru $myname sama" .PHP_EOL;
    }

    // kata kunci this digunakan untuk mengakses object saat ini
    function sayHello(?string $name) {
        if (!(isset($name))) {
            echo "Hello my name is $this->name" . PHP_EOL;
        } else {
            echo "Hello $name my name is $this->name, yorosiku onegaizimasu" .PHP_EOL;
        }
    }

    // jika kamu ingin mengakses constant didalam Classnya itu sendiri kamu bisa menggunakan self::NAMA
    function getAppInfo() {
        echo "Author " . self::AUTHOR . PHP_EOL;
        echo "Version " . self::VERSION . PHP_EOL;
    }

    // destructor adalah function yang dipanggil ketika object akan di hapus dari memory
    // biasaya ini digunakan untuk menutup koneksi ke database atau menutup setelah pembacaan file selsesai agat tidak terkena  memory leak
    // kamu bisa menggunakan keeord __destruct() untuk nama functionnya
    // disini kamu tidak boleh pnya parameter
    function __destruct() {
        echo "Object $this->name is destroyed..." . PHP_EOL;
    }

}