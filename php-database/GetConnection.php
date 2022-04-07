<?php

function GetConnection() : PDO
{

    $host = "localhost";
    $port = 3360;
    $database = "php_mysql";
    $username = "root";
    $password = "neko";

    return  new PDO("mysql:host=$host:$port; dbname=$database", $username, $password);

}
