<?php

namespace Test\FizzBuzz;

use App\FizzBuzz\FizzBuzzKata;
use PHPUnit\Framework\TestCase;

class FizzBuzzKataTest extends TestCase
{
    /**
     * @dataProvider dataProviderForTestFizzBuzz
     */
    public function testFizzBuzz(int $input, string $expected): void{

        $fizzBuzzKata = new FizzBuzzKata();
        $fizzBuzzKata->fizzBuzz();


        $actual = $fizzBuzzKata->getValue($input);
        $this->assertSame($expected, $actual);

    }

    public function dataProviderForTestFizzBuzz(): \Generator
    {
        yield 'value for number 1' => [
            'input' => 1,
            'expected' => '1',
        ];
        yield 'value for number 3' => [
            'input' => 3,
            'expected' => 'Fizz',
        ];
        yield 'value for number 5' => [
            'input' => 5,
            'expected' => 'Buzz',
        ];
    }
}