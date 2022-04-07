<?php


namespace Data\Helper;

// static biasanya digunakan untuk membuat helper
// dia bisa di panggil tanpa harus membuat functionnya terlebih dahulu
// dia tidak menempel pada object akan tetapi menempel pada classnya

class Helper {

    public static string $appName = "Kizuna";

    public static function ErrorMathHandler() : void
    {
        echo "Hello from math handler" . PHP_EOL;
    }

}
