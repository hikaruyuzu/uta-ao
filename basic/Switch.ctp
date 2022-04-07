<?php

$nilai = "A";

switch ($nilai) {
    case "A":
        echo "Selamat anda lulus dengan nilai " .$nilai  . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Selamat anda lulus drngan nilai " . $nilai . PHP_EOL;
        break;
    case "D":
        echo "Maaf kamu ga lulus nilai kamu " . $nilai . PHP_EOL;
        break;
    case "E":
        echo "Kamu salah masuk jurusan lol" .PHP_EOL;
        break;
    default:
        echo "Ga ada nilainya";
        break;


}