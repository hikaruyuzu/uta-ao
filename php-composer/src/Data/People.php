<?php

namespace KizunaAI\Data;

class People {

    public function __construct(private string $name)
    {

    }

    function sayHello(string $name) : string {
        return "Hello {$this->name} my name is $name" . PHP_EOL;
    }
}
