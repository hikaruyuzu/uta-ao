<?php

require_once __DIR__ . '/GetConnection.php';

// fetch digunakan untuk mengambil satu data di dalam row query
$connection = GetConnection();

$username = "kaguya";
$password = "grawwduarr";

$passwordDecrypt = null;
if (isset($password)) {
    $passwordDecrypt = hash("sha256", $password);
}

$sql = "SELECT username, password FROM admin WHERE username = ? AND password = ?";
$statement = $connection->prepare($sql);
$statement->execute([$username, $passwordDecrypt]);

if ($row = $statement->fetch()) { // dia akan mengecek 1 row, jika afa maka true
    echo "Hello $username welcome back" . PHP_EOL;
} else {
    echo "Upps username or passwaoard is wrong" . PHP_EOL;
}

$connection = null;