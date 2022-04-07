<?php


namespace Data\Traits;

// trait ini bisa disebut mirip dngan extension, dimana dia di dalamnya bisa mempunyai banyak funcion dan propertiesang nantinya bisa di gunakan
// di class yang menggunakanya, disini kamu bisa membuat function dan juga field
// gunakan kat akunci trait untuk memulai membuat trait
// gunakan usae untuk menggunkan trait
trait SayGoodBye {
    public function goodBye(?string $name) : void
    {
        if (is_null($name)) {
            echo "Goodbye" . PHP_EOL;
        } else {
            echo "Goodbye $name konichiwa" , PHP_EOL;
        }
    }
}

trait SayHello {
    public function sayHello(string $name) {
        if (is_null($name)) {
            echo "Hello konichiwa minasan" . PHP_EOL;
        } else {
            echo "Hello $name konichiwa, ogenki desuka ?" . PHP_EOL;
        }
    }
}
// field
trait HasName {
    public string $name;
}

// kamu juga bisa menguunakan abstract function, akan tetapi dia wajib di oerride oleh class yang mengunaknnya
trait TestAbstraact {
    abstract function abstracatDesu(string $name) : void;
}

trait All {
    // kamu bisa menggunakan trait inheritence, dimana nanti kamu cukup menggunakan treat all iniuntuk menjadi treat yang difgunakan
    // untuk include semua trait
    use SayGoodBye, SayHello, HasName, TestAbstraact {
        TestAbstraact as private; // jika tidak ingin mengubah aksesibelitanya kamu bisa menghilangkan blocknya
        HasName as private;
    }
}

trait UseAllTrest {
    use All;
}
// disini juga berlakuka konsep overrideing dimana,
// jika kamu override traint di child yang menggunakan trair tersebut, trait yang ada akan teroveride
// akan tetapi jika kamu menggunakan trait tersebut di chilf class dimana child class tersebut memiliki parent class dimana di parent
// memiliki method yang sma dengan traintnya maka dia akan tetap mengakses traitnya.

class Person {
    // kamu bisa magubah aksesibilitty dengan cara berikut
    use SayGoodBye, SayHello, HasName, TestAbstraact {
        TestAbstraact as private; // jika tidak ingin mengubah aksesibelitanya kamu bisa menghilangkan blocknya
        HasName as private;
    }

    // override abstracat from traint
    public function abstracatDesu(string $name): void
    {
        echo "Hello abstract $name" . PHP_EOL;
    }
    // jika kamu mengoveride trait function di sini maka dia akan teroveride
    public function goodBye(?string $name): void
    {
        echo "Good bye from $name in person" . PHP_EOL;
    }

    // override
    public function sayHello(string $name)
    {
        echo "Hello from $name in Person" . PHP_EOL;
     }
}

// nah ini adalah contoh kasus yang tidak akan ter override
class Person1 {
    // jika kamu mengoveride trait function di sini maka dia tidaak akan teroveride di childnya
    // childnya akan tetap mengakses trait aslinya
    public function goodBye(?string $name): void
    {
        echo "Good bye from $name in person1 parent" . PHP_EOL;
    }

    public function sayHello(string $name)
    {
        echo "Hello from $name in person1 parent" . PHP_EOL;
    }
}

class Person2 extends Person1 {
    use SayGoodBye, SayHello, HasName, TestAbstraact;
    // override abstracat from traint
    public function abstracatDesu(string $name): void
    {
        echo "Hello abstract $name" . PHP_EOL;
    }
}


