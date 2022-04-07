<?php

namespace Hikaru\PhpUnitTest;

use SebastianBergmann\CodeCoverage\Report\PHP;

class Person {

    public function __construct(private ?string $name)
    {
    }

    public function sayHello(?string $name) : string {
        if ($name == null) throw new \Exception("Upps name cant empty");
        return "Hello $name my name is {$this->name}";
    }

    public function sayGoodBye(?string $name) : void{
        echo "Good bye $name my name is $this->name" . PHP_EOL;
    }
}
