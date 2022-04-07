<?php

namespace Data\Cloning;

// object cloning ini digunakan untuk mengcopy semua data field dari object sebelum ke object sesudah(objecr destinationnya)
// disini kita bisa menggunakan keyeord clone
class Student {
    public string $name;
    public string $city;
    public int $age;
    private string $example;


    public function setExample(string $example): void
    {
        $this->example = $example;
    }

    // disini digunakan untuk melakukan proses modify, dimana kit harus menggunakan __clone()
    public function __clone() {
        // disinikiata bisa melakukan modifikasi
        // work flow clone = $student1 -> clone student1 ke student 2 -> function __clone() dipanngil -> data di proses di __clone() -> meghasilkan output
        unset($this->example); // disisi kita menghapus data exmple (tidak akan di clone)
    }


    // Magic Method, merupakakan function build in dari php, sepertio __clone(), __invoke(), __toString() dll kamu bisa melihat dokumentasinya di
    // doc php.net/manual/en/language.oop5.magic.php

    // contoh dikit, misal kta infin merubah data object student manjadi string
    // jadi misal obejct melakukan (string)$namaObject
    // dia akan otomatis memanggil __tostring();
    public function __toString() {
        return "$this->name tinggal di $this->city dan memiliki umur $this->age, test $this->example" . PHP_EOL;
    }

    // invoke digunakan untuk jika misal obejct diberi tanda (); saat pemanggilan dia akan otomatis menjadi fucntion
    public function __invoke(...$args) {
        $join = join(",", $args);
        echo "Hello from invoke $join" . PHP_EOL;
    }

    // nah disini selanjtya adalah method __debugInfo(); method ini dipanggil oleh var_dump()
    // disini digunakan untuk process debuging, kamu bisa mengedit isi dari debug info dengan mengembalikan nilai berupa array
    public function __debugInfo() {
        $array = [
            // masukan debuger apa saja disini
            "name" => $this->name,
            "city" => $this->city,
            "example" => $this->example,
            "author" => "Yuzuko hikaru",
            "version" => "1.0.0",

        ];

        return $array;
    }

}

