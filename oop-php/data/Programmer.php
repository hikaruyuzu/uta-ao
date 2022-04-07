<?php

namespace CompanySDM;

class Programmer {
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

class ProgrammerFrontEnd extends Programmer {

}

class ProgrammerBackend extends Programmer {

}

// kamu bisa membuaut polymorphism disini, polymorphism bisa digunakan sebagai parameter atau arguments
class Company extends Programmer {
    public Programmer $programmer;

}

// kamu bisa melakukan try catch dengan menggunakan keyeord instsanceof
function sayHelloProgrammer(Programmer $programmer) {
    if ($programmer instanceof ProgrammerFrontEnd) {
        echo "Hello Frontend programmer $programmer->name" . PHP_EOL;
    } else if ($programmer instanceof ProgrammerBackend) {
        echo "Hello Backend programmer $programmer->name" . PHP_EOL;
    } else if ($programmer instanceof Programmer) {
        echo "Hello programmer $programmer->name" . PHP_EOL;
    }

}



