<?php

class ConstructorPropertyPromotion {
    // disini secara otomatis jika fi tambah dengan key public , dia akan otomatis menjadi condtructor
    // kita juga bisa membuat dia memiliki nilai default, fan mengubah aksesibilitynya sesuai dengn yang bisa kita lakukan
    // di condtructor sebwselmunya
    // secara otomatis dia akan menjadi constructor dan akan menjadi field dari classnya


    public function __construct(public string $username, public string $address, public string $country = "japan")
    {


    }
}

// username: merupakan fitur php 8 dengan nama function named value
// itu akan sangat berguna jika kamu punya fedault value di tengah karena dia bisa di inisialize poisinya secara acak
$test = new ConstructorPropertyPromotion(username: "kaguya san", address: "tokyo");
var_dump($test);