<?php

class Data Implements IteratorAggregate {
    var string $first = "Kaguya san";
    public string $second ="Tsukasa chan";
    private string $third = "Rem chan";
    protected string $fourth = "Kato Megumi chan";

    // nah nantinya kamu bisa itersi data di dalam object dari class tersebut ada dua cara
    // secara manual menggunakan iterator dimana iterator menggunakan Implement dari IteratorAgregate

    // disini kita akan mengiterasinya secara manual agar kita bisa memilih field mana yang ingin kita iterasi dari property subuah class
//    function getIterator()
//    {
//        $array = [
//            "first" => $this->first,
//            "second" => $this->second,
//            "third" => $this->third,
//            "fourth" => $this->fourth,
//        ];
//       // jadi kit amenggunakan function tambahan dari turunan iterator untuk mereturnkan nilainyadan memprosesnya agar bisa di iterasi
//        return new ArrayIterator($array);
//    }

    // tapi sebenarnya ada yang lebih simple kamu bisa manggunakan Generator untuk membuat iterator
    // kamu bisa menggunakan kata kunci yield, dimana yield ini akanmengembalikan data berupa iterator
    // hasilnya sma saja
    public function getIterator()
    {
        yield "first" => $this->first;
        yield "second" => $this->second;
        yield "third" => $this->third;
        yield "fourth" => $this->fourth;
    }
}

// ini adalah contoh mnggunaka carabiasa, secara otomatis dia kaan mengierasi data dengan aksesibility public, jika dia protected atau private tidak akan di iterasi
// kecuali sebelunya sudah di deklarasikan manual menggunakan iterator agregate di dalam sebuah functiona array iterator, jika tidak di deklarasikan manual saeperti di atas
// dia hanya akan meng eksaekusi pivate property
$numbers = new Data();
// bisa kita iterasi
foreach ($numbers as $property => $value) {
    echo "Data key $property => $value" . PHP_EOL;
}
