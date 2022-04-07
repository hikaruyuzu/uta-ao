<?php
$respone = "Hello " . $_GET["name"] . " from anime " . $_GET["anime"] . PHP_EOL;
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
