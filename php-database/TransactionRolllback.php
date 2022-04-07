<?php


require_once __DIR__ . '/GetConnection.php';


$connection = GetConnection();

// start transaction
$connection->beginTransaction();

$name = "Hikaru nya";
$comment = "lahh kok isoo wkwkkwk";

$name2 = "Kaguya nya";
$comment2 = "lahh kok isoo wkwkkwk";


$name3 = "Rem nya";
$comment3 = "lahh kok isoo wkwkkwk";

$sql = "INSERT INTO comments(name, comment) VALUES(?, ?) ";
$statement = $connection->prepare($sql);
$statement->execute([$name, $comment]);

$sql = "INSERT INTO comments(name, comment) VALUES(?, ?) ";
$statement = $connection->prepare($sql);
$statement->execute([$name2, $comment2]);

$sql = "INSERT INTO comments(name, comment) VALUES(?, ?) ";
$statement = $connection->prepare($sql);
$statement->execute([$name3, $comment3]);

// rolleback transaction, digunakan untuk membatalkan trasaction
$connection->rollBack();

$connection = null;
