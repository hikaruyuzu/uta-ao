<?php

namespace Hikaru\PhpUnitTest;

class Math {

    public static function sum(array $numbers){

        $result = 0;
        foreach ($numbers as $number) {
            $result += $number;
        }

        return $result;
    }
}
