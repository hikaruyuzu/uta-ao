<?php

require_once __DIR__  . '/GetConnection.php';

$connection = GetConnection();

$username = "kaguya";

$password = trim("grawwduarr");

$passwordHasing = null;
if (isset($password)) {

    $passwordHasing = hash('sha256', $password);
}
$sql = "INSERT INTO admin(username, password) VALUES (?, ?)";
$statement = $connection->prepare($sql);
// cukup langdung gunakan index dari parametternya saja di executtenya, yang ini sangat direkinmendasikan untuk digunakan,
// prepare juga bisa digunakan untuk melakukan insert data
$statement->execute([$username, $passwordHasing]);

echo "Success insert data into db" . PHP_EOL;


$connection = null;

