<?php

require_once 'Database.php';

$connection = \Config\Database::GetConnection();
echo "Succesfully coneced to the database";

$connection = null;

