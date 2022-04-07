<?php

// berbeda dengan fetch, fetch all digunakan untuk mengiterasi semua data pada return Query

require_once __DIR__  . '/GetConnection.php';

$connection = GetConnection();

$sql = "SELECT name, email FROM costumers";
$statement = $connection->query($sql);

// kamu bisa menggunakan fetach all untuk mengambil semua data, dimana data yang di returnkan fetch all adalah sebuah array


$result = $statement->fetchAll();

foreach ($result as $row) {
    echo "Name => " . $row["name"] . " Email => " . $row["email"] . PHP_EOL;

}

$connection = null;
