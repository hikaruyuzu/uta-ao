<?php

// class abstrack dia tidak bisa digunakan untuk membuat object dia hanya bisa di turunkan saja
// dalam artian digunakan untuk membuat constract untuk class turunanya

namespace Location;

abstract class Location {
    public string $name;
}

class City extends Location {

}


class Province extends Location {

}

class Country extends Location {

}

