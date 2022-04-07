<?php
session_start();
if ($_SESSION['user_login'] != true) {
    header('Location: /session/login.php');
    exit();
}

$success = session_destroy(); // digunakan untuk menghapus session
?>

<!doctype html>
<html lang="en">
<head>
    <title>Logout</title>
</head>
<body>
<?php if ($success){?>
    <h2>Good bye, nice to meet you</h2>
<?php } else {?>
    <h2>Opps something when wrong</h2>
<?php }?>

</body>
</html>
