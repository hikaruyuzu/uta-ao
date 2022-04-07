<?php

require_once __DIR__ . '/GetConnection.php';

$connection = GetConnection();

$name = "Hikaru";
$comment = "lahh kok isoo wkwkkwk";
$sql = "INSERT INTO comments(name, comment) VALUES(?, ?) ";
$statement = $connection->prepare($sql);
$statement->execute([$name, $comment]);

// get last insert id
$id = $connection->lastInsertId();

echo "Hello from id $id" . PHP_EOL;

$connection = null;

// function last insert id difunakan untuk memngambil id terakhir dari insert data dsb
