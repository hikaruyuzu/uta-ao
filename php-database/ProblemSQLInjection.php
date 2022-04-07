<?php

require_once __DIR__ . '/GetConnection.php';

$connection = GetConnection();

// $username = "admin'; #"; // jika seperti inii kamu akan terkena sql injection
// $password = "admin";

// bisa di atasi dengan mengguinakan quote functtion, tapi ga di rekomendasikan, karen harus menghapus ' ' di querynya, lebih direkomendasikan menggunakan prepare
$username = $connection->quote("admin'; #");
$password = $connection->quote("test wkwkwkw'");


$sql = "SELECT username, password FROM admin WHERE username=$username AND password=$password"; // jangan di hardcode, sebenarnya
$statement = $connection->query($sql);

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
$connection= null;
