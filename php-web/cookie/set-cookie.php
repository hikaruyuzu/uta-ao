<?php

// set cookie, baca doc https://www.php.net/manual/en/function.setcookie.php

$futureDate = date('Y-m-d', strtotime('+1 year', strtotime(date_default_timezone_get())));
setcookie(
    name: "x-kizuna",
    value: hash("sha256", "yuzuko hikaru"),
);

header('Location: /cookie/show-cookie.php');

