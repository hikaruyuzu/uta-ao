<?php
$address = "Tokyo, japan";
echo "Address old ", $address;

$address = null;
echo "Address now ", $address;

$age = null;
echo "Age old ", $age;

$age = 19;
echo "Age now ", $age, "\n";

$title = null;
// cek null
echo is_null($title);

// mengahpus variable menggunakan unset
$test = "wkwkwk";
unset($test);

// akan error jika di print

//  kita bisa cek menggunakan isset
isset($test);
