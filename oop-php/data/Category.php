<?php

namespace Category;

class Category {
    private string $name;
    private bool $expensive;

    // getter fan setter digunakan untuk encapsulation, agar data tetap valid
    public function getName(): string
    {
        return $this->name;
    }


    public function setName(string $name): void
    {
        // disini kita juga bisa membuat validation
        if (trim($name) != "") {
            $this->name = $name;
        }
    }


    public function isExpensive(): bool
    {
        return $this->expensive;
    }


    public function setExpensive(bool $expensive): void
    {
        $this->expensive = $expensive;
    }
}
