<?php

namespace Hikaru\Learn;

class Konbanwa {
    public function __construct(private string $name)
    {
    }

    function Konbanwa(string $yourname = "Guest") :string {
        return  "Konbanwa {$yourname} my name is {$this->name}" . PHP_EOL;
    }
}
