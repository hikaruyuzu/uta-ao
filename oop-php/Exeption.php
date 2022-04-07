<?php

require_once "data/LoginRequest.php";
require_once "exepsion/ValidationExeption.php";
require_once "exepsion/ValidationLogin.php";

$user = new LoginRequest();
$user->setUsername("");
$user->setPassword("rahasia");

// jika terjadi error kita bisa tangkap menggunakan try catch
try {
    validateLoginExeption($user);
} catch (ValidationExeption | Exception $exeption) {
    echo "Error validation {$exeption->getMessage()}" . PHP_EOL;

    // kamu bisa melakukan debug daengan menggunakan , get trace atau get traxe as sting
//    $exeption->getTrace();

    echo $exeption->getTraceAsString();
} finally {
    echo "Finnally ini akan secara otomastis di eksekusi mau dia error atau nga" . PHP_EOL; // bisanya digunakan untuk menutup koneksi
}

