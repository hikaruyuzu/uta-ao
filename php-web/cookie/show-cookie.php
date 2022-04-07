<?php

// mengambil cookie daari browser, di set cookie, cookie akan selalu dikirikm oleh browser
$cookie = $_COOKIE['x-kizuna'];

?>

<!doctype html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h1>Hello <?= $cookie ?>, yorosiku onegaizimasu</h1>
</body>
</html>