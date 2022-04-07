<?php

// disini kita bisa membuat berbagai macam return atau input tipe data sesuai yang kita mau
class Person {
    public function getQueueNumber(string|int $number) : bool | int | string {
        if (is_int($number)) {
            return true;
        } else if (is_string($number)) {
            return "iresaimase";
        } else {
            return 1;
        }
    }
}
