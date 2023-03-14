<?php

namespace App\FizzBuzz;
class FizzBuzzKata
{

    private array $result = [];
    public function  fizzBuzz(): void{
        for ($i = 0; $i < 100; ++$i){
            if (($i + 1) % 3 === 0) {
                $this->result[$i] = 'Fizz';
            }
            elseif (($i + 1) % 5 === 0) {
                $this->result[$i] = 'Buzz';
            }
            else{
                $this->result[$i] = (string) ($i + 1);
            }
        }
    }

    public function getValue(int $number): int{
        return (string) $this->result[$number - 1];
    }
}