<!doctype html>
<html lang="en">
<head>
    <!--global $_SERVER akan berisi informasi jika ada request masuk dimana dia akan mengembalikan data array-->
    <title>Document</title>
</head>
<body>
<table border="1">
     <?php foreach ($_SERVER as $key => $value) { ?>
        <tr>
            <td><?= $key?></td>
            <td><?= $value?></td>
        </tr>
     <?php }?>
</table>
</body>
</html>
