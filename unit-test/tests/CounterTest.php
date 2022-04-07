<?php

namespace Hikaru\PhpUnitTest;

use PHPUnit\Framework\TestCase;
use Webmozart\Assert\Assert;


class CounterTest extends TestCase {
    // test counter in src
    public function testCounterIncrement() : void {
        $number = new Counter();
        $number->increment();

        // melakukan testing dengan assert
        $this->assertEquals(1, $number->getCounter());

        $number->increment();
        $this->assertEquals(2, $number->getCounter());

        // bisa juga menggunakan self sama saja
        $number->increment();
        self::assertEquals(3, $number->getCounter());
    }

    // annontation akan banyak digunakan, @test adalah salah satu annontation dimana dia dinyatakan sebagai unit-test
    // jika tidak diberi annontation dia tidak akan di anggap sebagai unit-test

    /**
     * @test
     */
    public function increment() {
        $number = new Counter();
        $number->increment();

        // melakukan testing dengan assert
        $this->assertEquals(1, $number->getCounter());
    }

    // disini juga kita bis amenggunakan annnonttation @depends,
    // dimana kitra bisa membuat unit test dimana untit test lain bisa mnggunakan hasil value dari unit test sebelumnya
    // dengan car kita bisa melakukan return value
    // akan tetapi unit test yang baik adalah harus indeendent

    public function testFirst() : Counter{
        $number = new Counter();
        $number->increment();

        $this->assertEquals(1, $number->getCounter());

        return $number;
    }

    // jadi kita bisa manggunakan hasil returnnya disini, walau tidak di rekomendasikan
    /**
     * @depends testFirst
     */
    public function testSecond(Counter $number) : void {
        $number = new Counter();
        $number->increment();

        $this->assertEquals(2, $number->getCounter());
    }
}