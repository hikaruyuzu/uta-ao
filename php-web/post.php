<?php
$firstName = $_POST['first_name'];
$lastName = $_POST['last_name'];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>show-post</title>
</head>
<body>
<table>
    <tr>
        <td>First name: </td>
        <td><?= $firstName?></td>
    </tr>
    <tr>
        <td>Last name: </td>
        <td><?= $lastName?></td>
    </tr>
</table>
</body>
</html>