<?php


require_once __DIR__ . '/GetConnection.php';



$connection = GetConnection();

// start transaction
$connection->beginTransaction();

$name = "Siyzu kun";
$comment = "lahh kok isoo wkwkkwk";

$name2 = "Hayasaka chan";
$comment2 = "lahh kok isoo wkwkkwk";

$name3 = "Isla chan";
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

// commit transaction
$connection->commit();

$connection = null;
