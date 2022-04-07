<?php

// stringable merupakan interface yang memiliki isi __toString

function animeInfo(Stringable $stringable) : void{
    echo "Hello from  {$stringable->__toString()}" . PHP_EOL;
}

class Anime {
    public string $name;
    public function __toString(): string
    {
       return "Anime {$this->name}";
    }
}


$sonobisquedoll = new Anime();
$sonobisquedoll->name = "Sono Bisquedoll";
animeInfo($sonobisquedoll);