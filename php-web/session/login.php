<?php
session_start(); // wajib digunakan sebelum menggunakan session

// check ketersediaan session

if ($_SESSION['user_login'] == true) {
    header('Location: /session/member.php');
    exit();
}

$error = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['username'] == "hikaru" && $_POST['password'] == "neko") {
        // set session
        $_SESSION['user_login'] = true;
        $_SESSION['username'] = "hikaru";
        header('Location: /session/member.php');
        exit();
    } else {
        $error = "Oppss probably username or password is wrong" . PHP_EOL;
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <title>login</title>
</head>
<body>
<h1>Login user</h1>

<?php if (isset($error)){?>
    <h2><?= $error ?></h2>
<?php }?>

<form action="/session/login.php" method="post">
    <label>Username:
        <input type="text" name="username">
    </label>
    <br/>
    <label>Password:
        <input type="password" name="password">
    </label>
    <br/>
    <input type="submit" value="Login">
</form>
</body>
</html>
