<?php

namespace Hikaru\PhpUnitTest;

use PHPUnit\Framework\TestCase;

class MathTest extends TestCase {

    // data provider, digunakan untuk melakukan testt dengan bayak kemungkinan dengan hanya memanfaatkan 2 func yang saling berkaitan,
    // ini bisa digunakan untuk test yang komplex
    /**
     * @dataProvider mathSum
     */
    public function testSum(array $data, $expected) : void {

        self::assertEquals($expected, Math::sum($data));
    }

    public function mathSum() : array {
        return [
            [[5, 5, 10], 20],
            [[50, 25, 25], 100],
            [[10, 20], 30],
            [[80], 80],
            [[0], 0],
        ];
    }

    // jika datanya sederhana kamu bisa menggunakan @testWith
    /**
     * @testWith
     *      [[5, 5, 10], 20]
     *      [[50, 25, 25], 100]
     *      [[10, 20], 30]
     *      [[80], 80]
     *      [[0], 0]
     */
    public function testSumWithTestWith(array $data, $values) {

        self::assertEquals($values, Math::sum($data));
    }
}
