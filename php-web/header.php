<?php

// kamku bisa mendapatkan http header request dari clieht dengan menggunkan $_SERVRER
// menggunkaan global server dimana dia adalah sebuah array
// contoh kita ingin mengambil nama sender melalui header

//$_SERVER['HTTP_FILE_SENDER']

// disini kita menggunakan HTTP_ di awalan karena secara otomatis dia
// akan di tambahkan di depannya, dan Sender_File otomartis akan menjadi upper case jika - , akan di replace menggunakan _

$header = $_SERVER['HTTP_FILE_SENDER'];
echo "Hello $header" . PHP_EOL;

// jika kamu ingin menulis atau menambahakan informasi ke heder kamu bisa menggunakan header('key : value')

header('Author : Yuzuko Hikaru');
header('Time-Zone : Asia/Jakarta');

