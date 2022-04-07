<?php

// biasanya trainct conflict ini terjadi jika kit amemikliki dua trait ang memiliki nama function yang sama
// disetiap traitnya, nah untuk mengatasi masalah ini kamu bisa menggunakan insteadof

// misal

trait A {
    public function doA() {
        echo "a" . PHP_EOL;
    }

    public function doB() {
        echo "b" . PHP_EOL;
    }
}

trait B {
    public function doA() {
        echo "A" . PHP_EOL;
    }

    public function doB() {
        echo "B" . PHP_EOL;
    }
}


class Example {
    // gunakan ini jika kamu memilliki trait dengan nama function yang sama
    use A, B {
        A::doA insteadof B;
        B::doB insteadof A;
    }

}

$sample = new Example();
$sample->doA();
$sample->doB();
