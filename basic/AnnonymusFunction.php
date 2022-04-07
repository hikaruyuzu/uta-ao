<?php

// annonymus function biasanyua akan di masukan kedalam varibale
// digunakan untuk operasi simple
// bisa di passing ke arguments dalam method/ function

// example
$goodNight = function (string $name) {
    echo "Hello $name , Good night" . PHP_EOL;
};

$goodNight("Kaguya shinomiya");

function goodByeWorld(string $name, $filter) {
    $resultCheck = isset($name) ? $name : "Data tidak ditemukan";

    $finalResult = $filter($resultCheck);
    return "Hello $finalResult , good byee, see youuu" .PHP_EOL;
}
// bisa seperti ini atau buat annonymus functionnya di luar saja
$result = goodByeWorld("Kaguya shinomiya", function ($nameFilter) : string {
    return "$nameFilter sama";
});

echo $result;

// example
$dataUser = function (string $username) : string {
    return "$username sama";
};

$sayUser = goodByeWorld("Tsukasa Tsukoomi", $dataUser);
echo $sayUser;

// function annonymus gabisa akseas varibale di luar scopenya(global val)
// kamu bisa meggunakan kat akunci use untuk mengaksesnya
// example

$goods = "Manga kaguya sama love is war";
$price = 2000000;
$dataProduct = function (string $seller) use ($goods, $price){
    echo "Seller dengan nama $seller menjual $goods dengan harga $price";
};

$dataProduct("Rem chan");









