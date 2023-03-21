<?php

namespace App\FizzBuzz\_01;
class FizzBuzzKata
{

    private array $result = [];
    public function  fizzBuzz(): void{
        for ($i = 0; $i < 100; ++$i){
            if ($this->isDivisibleByThree($i + 1) && $this->isDivisibleByFive($i + 1)) {
                $this->result[$i] = 'FizzBuzz';
            }
            elseif ($this->isDivisibleByThree($i + 1)) {
                $this->result[$i] = 'Fizz';
            }
            elseif ($this->isDivisibleByFive($i + 1)) {
                $this->result[$i] = 'Buzz';
            }
            else{
                $this->result[$i] = (string) ($i + 1);
            }
        }
    }

    public function getValue(int $number): string{
        return (string) $this->result[$number - 1];
    }

    private function isDivisibleByThree(int $number): bool {
        return $number % 3 === 0;
    }


private function isDivisibleByFive(int $number): bool
{
    return $number % 5 === 0;
}
}