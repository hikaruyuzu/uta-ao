<?php

require_once __DIR__ . '/GetConnection.php';


$conncetion = GetConnection();

$sql = "SELECT id, name, email FROM costumers"; // gunakan query untuk mendapatkan query yang mengembalikan data

$statement = $conncetion->query($sql); // dia akan mengembalikan object bernama PDO statenment, dimana dia extend terhadap IterationAgregation, jadi bisa di looping menggunakan for each

foreach ($statement as $row => $value) {

    var_dump($statement); // memiliki tipe object pdo statement

    $id = $row["id"];
    $name = $row["name"];
    $email = $row["email"];

    echo "id $id" . PHP_EOL;
    echo "name $name" . PHP_EOL;
    echo "email $email" . PHP_EOL;
}

// close connecetion
$conncetion = null;