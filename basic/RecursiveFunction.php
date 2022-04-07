<?php


// memanggil dirinya sendiri
function rekurisveFactorial($number) : int {
    if ($number == 1) {
        return 1;
    } else {
        return $number * rekurisveFactorial($number-1);
    }
}

$data = rekurisveFactorial(5);
echo $data . PHP_EOL;

function loop(int $value) {
    if ($value == 0) {
        echo "end loop " . PHP_EOL;
    } else {
        echo "loop ke - $value" . PHP_EOL;
        loop($value-1);
    }
}

loop(3000000);