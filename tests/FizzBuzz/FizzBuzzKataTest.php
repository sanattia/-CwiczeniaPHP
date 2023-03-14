<?php

namespace Test\FizzBuzz;

use App\FizzBuzz\FizzBuzzKata;
use PHPUnit\Framework\TestCase;

class FizzBuzzKataTest extends TestCase
{
    public function testFizzBuzz(): void{

        $fizzBuzzKata = new FizzBuzzKata();
        $fizzBuzzKata->fizzBuzz();


        $actual = $fizzBuzzKata->getValue(1);
        $this->assertSame(1, $actual);
    }

    public function dataProviderForTestFizzBuzz(): \Generator
    {
        yield 'value for number 1' => [
            'input' => 1,
            'expected' => 1,
        ];
    }
}