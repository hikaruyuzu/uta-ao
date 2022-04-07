<?php

require_once __DIR__ . '/GetConnection.php';

$connection = GetConnection();


$username = "admin'";
$password = "salah";

$sql = "SELECT username, password FROM admin WHERE username= :username AND password= :password";
// gunakan prepare untuk mangatasi masalajl sql injection
$statement = $connection->prepare($sql);
// lakukan binding agar dia di quote secara otokmatis, quote dibahas pada file PoblemSQLIjecton prepare juga bisa digunakan untuk melakukan insert data
$statement->bindParam("username", $username); // disini param harus sama dengan :username
$statement->bindParam("password", $password);
$statement->execute(); // setelah itu harus di execute

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