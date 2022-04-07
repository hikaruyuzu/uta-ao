<?php

$dateTime = new DateTime();
$dateTime->setDate(2002, 8, 24); // set date
$dateTime->setTime(10, 10, 10); // set time

// adapun cara untuk memanipulasi data waktu misal kamu ingin menambah tahunnya + satu thun, month + 1 bulan atau Tanggal/ jam menjadi +1 atau lebih kamu bisa menggunakan nfate interval
// selalu awali dengan P
// contoh
$dateTime->add(new DateInterval("P1Y"));

// kamu juga bisa megurangi waktunya tahun etc dengan meng set invert menjadi true
$minusOne = new DateInterval("P1M");
$minusOne->invert = true;
$dateTime->add($minusOne);

var_dump($dateTime);

$indonesia = new DateTime();
var_dump($indonesia);

// kita juga bisa mengubah timezonenya
$japan = new DateTime();
$japan->setTimezone(new DateTimeZone("Asia/Tokyo"));
var_dump($japan);

$string = $japan->format("Y-m-d H:i:s"); // konversi tipe data date time ke string , doc https://www.php.net/manual/en/datetime.format.php
echo "Time now in japan, Tokyo is $string" . PHP_EOL;

// kamu juga bisa melakukan konversi dari tipe string ke fate time dengan menggunakan static function di class DateTime dengan nama createFromFormat
// jika kamu memasukan format yang salah maka dia akan mengembalikan boolan false
$dateNowMember = DateTime::createFromFormat("Y-m-d H:i:s", "2022-08-24 00:00:00", new DateTimeZone("Asia/Jakarta"));
// jika input salah kita bisa validasi seperi iini
if ($dateNowMember) {
    var_dump($dateNowMember);
} else {
    echo "Upps data yang kamu masukan tidak valid" . PHP_EOL;
}

var_dump($dateNowMember);

