<?php

// properties overloading digunakan jika misal kita memanggil function atau properties(field) yang ga di
// deklarasikan di classnya maka php ga secara langsung menyatakan bahwa dia error nih,
// dia akan otomatis mengecek erlebih dahulu ke magic function yang di khusus digunakan untuk menangani hal tersrebut
// jika tidak ada brula dia mengembalikan error

class Zero {
    private array $property  = [];

    // kita bisa atasi dengan ini, kita bisa membuat set, get , isset, dan unset untuk property
    // dia harus di delarasikan secaera dynmic(manual)
    public function __get($name)
    {
        return $this->property[$name];
    }

    public function __set($name, $value)
    {
       $this->property[$name] = $value;
    }

    public function __isset($name)
    {
        return isset($name);
    }

    public function __unset($name)
    {
        unset($name);
    }

    // jika di function kita bisa mebuatnya dengan du acara yaitu __call dan __callStatic, dimana parameter kedua
    // adalah var args dan param pertama adalah nama functionnya
    public function __call($name, $arguments) : void
    {
        $join = join(",", $arguments);
        echo "Hello function with name $name have value $join" . PHP_EOL;
    }

    public static function __callStatic($name, $arguments)
    {
        $join = join(",", $arguments);
        echo "Hello function call static with name $name have value $join" . PHP_EOL;
    }


}

// example -> dia otomatis akan mengecek ke magic function, jika di magic function tidak ada dia akan error
$data = new Zero();
$data->firstName = "Yuzuko Hikaru";
$data->middleName = "Sama";
$data->lastName = "El gario van rosum";
echo $data->firstName . PHP_EOL;
echo $data->middleName . PHP_EOL;
echo $data->lastName . PHP_EOL;

$data->sayHello($data->firstName, $data->middleName);
// contoh yang static
Zero::ErrorHandler("404 not found", "500 internal server error");



