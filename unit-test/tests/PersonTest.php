<?php

namespace Hikaru\PhpUnitTest;


use http\Exception;
use PHPUnit\Framework\TestCase;
use SebastianBergmann\CodeCoverage\Report\PHP;

class PersonTest extends TestCase {

    public function testSuccess() : void {
        $result = new Person("Hikaru");
        self::assertEquals("Hello Kaguya shinomiya my name is Hikaru", $result->sayHello("Kaguya shinomiya"));
    }

    // kita juga hrus melakukan test untuk unit test yang gagal
    public function testException() : void {
        $person = new Person("Hikaru");
        // gunakan expect exception
        $this->expectException(\Exception::class);
        $person->sayHello(null);
    }

    // expectOutput ini digunakan untuk melakukan test terhadap nilai yang tidak ada kebaliann nilainya
    public function testSayGoodBye() : void {
        $person = new Person("Rem chan");
        $this->expectOutputString("Good bye Hikaru my name is Rem chan" . PHP_EOL);
        $person->sayGoodBye("Hikaru");
    }
}
