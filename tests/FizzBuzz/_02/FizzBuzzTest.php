<?php
namespace Test\FizzBuzz\_02;

use PHPUnit\Framework\TestCase;
use App\FizzBuzz\_02\FizzBuzz;
class FizzBuzzTest extends TestCase
{
    public function  testFizzBuzzForOne(): void{
        //given
        $expected = 1;
        $fizzBuzz = new FizzBuzz();
        $fizzBuzz->fizzBuzz();

        //when
        $actual = $fizzBuzz->getValue(1);

        //then
        $this->assertSame($expected, $actual);
    }
}