<?php

require_once __DIR__  . '/GetConnection.php';

$connection = GetConnection();

$username = "admin";
$password = "neko";

$sql = "SELECT username, password FROM admin WHERE username = ? AND password = ?";
$statement = $connection->prepare($sql);
// cukup langdung gunakan index dari parametternya saja di executtenya, yang ini sangat direkinmendasikan untuk digunakan,
// prepare juga bisa digunakan untuk melakukan insert data
$statement->execute([$username, $password]);

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


