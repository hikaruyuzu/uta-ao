<?php


$name ="Kaguya shinomiya"; // global scope

function getName() {
    global $name; // solusinya kamu bisa aksesa dia menjadi global
    echo "Hello $name";
    // dimana dia berada pada array $GLOBALS
    var_dump($GLOBALS["name"]);
}

getName();
