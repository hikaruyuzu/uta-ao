<?php

require_once __DIR__ . "/GetConnection.php";

$connecetion = GetConnection();

$sql = <<<SQL
    INSERT INTO costumers(id, name, email) VALUES('nekox01', 'Kaguya shinomiya', 'kaguyachan@gmail.com')
SQL;

try {
    $connecetion->exec($sql); // gunkan exec jika tidak membutuhkan kembalian data
    echo "Sucessfully insert data into database" . PHP_EOL;

    // close connection
    $connecetion = null;
} catch (PDOException $exception) {
    echo "Upps somethig wrong => " . $exception->getMessage() . PHP_EOL;
}




