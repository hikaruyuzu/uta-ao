<?php

$result = 0;
$response = $_GET["number"];
// dia bisa menerima data input berupa array dari http header sebanyak banyaknya
foreach ($response as $value) {
    $result += $value;
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hasil <?=$result?></h1>
</body>
</html>

