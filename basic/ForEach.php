<?php

$names = ["Kaguya shinomiya", "Pekora", "Rem chan", "Tsukasa tsukoyomi"];
// for loop biasa

for ($counter = 0; $counter < count($names); $counter++) {
    echo "Index $counter = $names[$counter]" . PHP_EOL;
}

// jika meggunakan for each
foreach ($names as $name) {
    echo "name $name" . PHP_EOL;
}

// jika butuh index
foreach ($names as $key => $value) {
    echo "name with index $key have name $value" . PHP_EOL;
}

// jika kamu butuh iterasi data key value
$data = [
    "name" => "Kaguya shinomiya",
    "address" => "Japan, tokyo",
    "age" => 20,
];

// gunakan
foreach ($data as $key => $result) {
    echo "data $key => $result" . PHP_EOL;
}



