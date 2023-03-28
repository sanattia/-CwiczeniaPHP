<?php

namespace Test\StringCalculator;
use App\StringCalculator\StringCalculator;
use PHPUnit\Framework\TestCase;

use Generator;
use ValueError;


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
        yield 'new line separator: 1,2\n3' => [
            'numbers' => '1,2\n3',
            'expected' => 6
        ];
    }

    /**
    * @dataProvider dataProviderForTestAddForIncorrectDelimitersPosition
     */
    public function testAddForIncorrectDelimitersPosition(string $input, string $expectedException): void{
        //given
        $this->expectException($expectedException);
        $calculator = new StringCalculator();
        $calculator ->add($input);
        //when

    }

    public function  dataProviderForTestAddForIncorrectDelimitersPosition(): Generator{
        yield 'incorrect delimiters position: 1, \n'=> [
            'input' => '1,\n',
            'exoectedException' => ValueError::class
        ];
        yield 'incorrect delimiters position: ,,1'=> [
            'input' => ',,1',
            'exoectedException' => ValueError::class
        ];
    }
}