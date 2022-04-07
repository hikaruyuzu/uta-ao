<?php

$host = "localhost";
$port = 3360;
$database = "php_mysql";
$username = "root";
$password = "neko";

try {
    $connection = new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
    echo "Successfully connceted to MySQL database";

    // close connection
    $connection = null;
} catch (PDOException $exception) {
    echo "Error to connecting to MySQL database : " . $exception->getMessage() . PHP_EOL;
}

