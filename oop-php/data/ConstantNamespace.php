<?php

// solusi jika kit amempunyai nama classa yang sama kita bisa menggunakan namespace
// atau jika kita ingin mengelompokkan class aberdasarkan apa yang kitaw mau kita bisa menggunekana namespace ini
// bisa dibilang namespace adalaah tempat menyimpan Class, kamu bisa menggunakan awalan namespace untuk mebuat namespaenya
// namespace bisa memiliki nested misal namesspace Data/animals
// dinamespace kau juga bisa mwmbuat constant dan function


namespace Data\One\Users{
    class ConstantNamespace
    {

        // kamu bisa melakukan apa saja disini seperti pada class pada umumnya
    }

    class Address {

    }

    class Account {

    }
}


namespace Data\Two\Sellers {
    class ConstantNamespace extends \Data\One\Users\ConstantNamespace
    {

    }
}

// sebenrnya kamu tidak harus membuat block untuk di akhir namespace jika dalam file tersebut hanya terddapat satu classa saja
// namespace Data\Example;
