<?php

function sayHii($firtName, $lastName) {
    echo "Hello $firtName $lastName konichiwa, ogenki desuka ?" . PHP_EOL;
}

sayHii("Kaguya", "Shinomiya");

// atau kamu bisa menggunakan default parameter, untuk menjadikannya nilai default jika user tidak memasukan data
function dataUser($name, $age, $address="tokyo") {
    if ($age >= 18) {
        echo "Hello $name nice to meet you, your age is $age, and you're from $address right ?" . PHP_EOL;
    } else {
        echo "sumimasen $name, your age not enough to visit this page" . PHP_EOL;
    }
}

dataUser("kaguya shinomiya", 19, "chiba");
dataUser("Hikaru", "Fukouka");

// kamu bisa menggunakan nama tipe data di function agar inputannya memiliki tipe data yang sama
// bila tipe data berbeda dia akan berusaha mengkonversi tipe data inputaanya ke tipe data terkait

function createAccount(string $name, string $email, int $age) {
    echo "Account name $name with age $email, and age $age" . PHP_EOL;
}

createAccount("Kaguya shinomiya", "kaguyachan@gmail.com", "19");

function sum(int $value1, int $value2) {
    $result = $value1 + $value2;
    echo "Jumlah value $value1 + $value2 = $result" . PHP_EOL;
}

sum(100, 200);
sum("20", "89"); // akan otomatis di konversi
//sum("salah", "10"); // error
sum(true, false); // akan di konversi jadi 0, 1
//sum([], []) => error


//kamu juga bisa menggunakan array ebagai paramter akan tetapi harus menggunakan keyword array
function sumArray(array $value1, array $value2) {
    $resultValue1 = 0;
    foreach ($value1 as $valueTmp1) {
        $resultValue1 += $valueTmp1;
    }

    $resultValue2 = 0;
    foreach ($value2 as $valueTmp2) {
        $resultValue2 += $valueTmp2;
    }

    $finalResult = $resultValue1 + $resultValue2;
    echo "Hasil penjumlahan dua array adalah $finalResult" . PHP_EOL;
}


$value1 = ["10", 90, 127, 90];
$value2 = ["8923", 90, 26, 19];

sumArray($value1, $value2);

// variable arguments list
function sumAll(...$values) {
    $total = 0;
    foreach ($values as $value) {
        $total += $value;
    }

    echo "Hasil penjumlahan " .implode(" + ", $values) . " adalah $total" . PHP_EOL;
}

sumAll(10, 90, 12, 1239);

// jika terlanjur array
sumAll(...$value1);
