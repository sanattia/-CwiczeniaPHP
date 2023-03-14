<?php

namespace App\FizzBuzz;
class FizzBuzzKata
{

    private array $result = [];
    public function  fizzBuzz(): void{
        $this->result = range(1,100);
    }

    public function getValue(int $number): int{
        return $this->result[$number - 1];
    }
}