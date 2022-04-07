<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $file_name = $_FILES['file_name']['name'];
    $file_type = $_FILES['file_name']['type'];
    $file_size = $_FILES['file_name']['size'];
    $file_temp_name = $_FILES['file_name']['tmp_name'];
    $file_error = $_FILES['file_name']['error'];
}

// memindah file upload, selengkapnya https://www.php.net/manual/en/ref.filesystem.php
move_uploaded_file($file_temp_name, __DIR__ . '/files/'. $file_name);

?>


<!doctype html>
<html lang="en">
<head>

    <title>upload-file</title>
</head>
<body>
<?php if($_SERVER['REQUEST_METHOD'] == 'POST') {?>
    <table>
        <tr>
            <td>File name</td>
            <td><?= $file_name ?></td>
        </tr>
        <tr>
            <td>File type</td>
            <td><?= $file_type ?></td>
        </tr>
        <tr>
            <td>File size</td>
            <td><?= $file_size ?></td>
        </tr>
        <tr>
            <td>File temp name</td>
            <td><?= $file_temp_name ?></td>
        </tr>
        <tr>
            <td>File error</td>
            <td><?= $file_error ?></td>
        </tr>
    </table>
<?php }?>
<h1>Upload File</h1>
<form action="upload.php" method="post" enctype="multipart/form-data">
    <label>
        <input type="file" name="file_name">
    </label>
    <input type="submit" value="Upload">
</form>
</body>
</html>
