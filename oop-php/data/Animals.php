<?php

namespace Animals;

abstract class Animals {
    public string $name;

    // boleh menggunakan constructor
    public function __construct(string $name) {
        $this->name = $name;
    }

    // disni function abstact tidak boleh mempunyai block, dan dia wajib di override di childnya
    // accesibilty tidak boleh private

    abstract public function runAnimals(string $speed) : void;
}

class Cat extends Animals {
    public function runAnimals(string $speed) : void
    {
        echo "Cat $this->name is running with speed $speed km/hour" . PHP_EOL;
    }
}

class Monkey extends Animals {
    public function runAnimals(string $speed) : void
    {
        echo "Monkey $this->name is running with speed $speed km/hour" . PHP_EOL;
    }
}
