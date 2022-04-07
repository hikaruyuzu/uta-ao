<?php

require_once __DIR__ . '/GetConnection.php';

$connection = GetConnection();

$username = "admin";
$password = "neko";

//prepare juga bisa digunakan untuk melakukan insert data
$sql = "SELECT username, password FROM admin WHERE username = ? AND password = ?";
$statement = $connection->prepare($sql);
$statement->bindParam(1, $username); // jika menggunakan index maka dia akandi mulai dari index 1,
$statement->bindParam(2, $password);
$statement->execute();


$success = false;
$user = null;

foreach ($statement as $row) {
    $success = true;
    $user = $row["username"];
}

if ($success) {
    echo "Hello $user welcome back" . PHP_EOL;
} else {
    echo "Upps probably username or password is wrong" . PHP_EOL    ;
}

$connection = null;


