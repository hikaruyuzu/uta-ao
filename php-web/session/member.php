<?php
session_start();

if ($_SESSION['user_login'] != true) {
    header('Location: /session/login.php');
    exit();
}

$result = $_SESSION['username'];
?>

<!doctype html>
<html lang="en">
<head>

    <title>Member</title>
</head>
<body>
<h2>Hello welcome to Kizuna Ai <?= $result?></h2>
<h4><a href="/session/logout.php">Log out from account</a></h4>
</body>
</html>
