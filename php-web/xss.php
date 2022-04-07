<?php
// htmlspecialchars digunakan untuk menangani xss cross site scripting
$respone = "Hello " . htmlspecialchars($_GET["name"]) . PHP_EOL;
?>

<!doctype html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
<h1><?= $respone?></h1>
</body>
</html>
