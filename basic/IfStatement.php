<?php

$name = "Tsukasa chan";
$address = "Japan";

if ($name != null && $address != null) {
    echo "Hello " .$name . "from " .$address ." i love you";
} else if ($name != null || $address != null) {
    echo "Hello " .$name . "from " .$address ."aishiteru";
} else {
    echo "nothing data here";
}

