<?php

namespace Cars;
// disini interface lebih better digunakan daripada abstract
// secara otomatis inerface akan menjadi abstract class
// kamu bisa membuat kontrak disini
interface HasBrand {
    public function getBrand() : string;
}

interface IsMaintenance {
    public function isMaintenance() : bool;
}
// jika interface bisa mewarisi interface lain kamu bisa menggunakan extends
interface Car extends HasBrand {
    public function getCar() : void;
    public function getTires() : int;
}

class KindOfCar {
    private string $name;
    private int $tire;

    function __construct(string $name, string $tire) {
        $this->name = $name;
        $this->tire = $tire;
    }

    public function getName(): string
    {
        return $this->name;
    }


    public function getTire()
    {
        return $this->tire;
    }

}
// gunakan implement untuk memilkliki akses ke interface
// kita bisa melakukan extend dan implement secara bersamaan di saru class
// interface juga bisa digunakan untuk polymorphism

class Avanza extends KindOfCar implements Car, IsMaintenance {


    public function getCar(): void
    {
       echo "Car have name {$this->getName()}" . PHP_EOL;
    }

    public function getTires(): int
    {
        return $this->getTire();
    }

    public function getBrand(): string
    {
        return "Toyota";
    }

    public function isMaintenance(): bool
    {
        return false;
    }
}
