<?php

namespace Test\StringCalculator;
use App\StringCalculator\StringCalculator;
use PHPUnit\Framework\TestCase;

use Generator;


class StringCalculatorTest extends TestCase{
    /**
     * @dataProvider dataProviderForTestAdd
     */
    public function testAdd(string $input, int $expected): void{
        //given
        $expected = 0;
        $calculator = new StringCalculator();

        //when
        $actual = $calculator->add('');

        //then
        $this->assertSame($expected, $actual);
    }

    public function dataProviderForTestAdd():Generator
    {
        yield 'empty string' => [
            'numbers' => '',
            'expected' => 0
        ];
        yield '0' => [
            'numbers' => '0',
            'expected' => 0
        ];
        yield '1' => [
            'numbers' => '1',
            'expected' => 1
        ];
        yield '99' => [
            'numbers' => '99',
            'expected' => 99
        ];

        yield 'two numbers: 6, 5' => [
            'numbers' => '6,5',
            'expected' => 11
        ];
    }
}