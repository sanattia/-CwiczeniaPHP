<?php


namespace App\StringCalculator;

class StringCalculator{
    public function add(string $input): int{

    $numbers = $this->extractAddendsFromString($input);

    return array_sum($numbers);
}
    private function extractAddendsFromString(string $input): array{
        $addends = explode(',', $input);

        return array_map(
            function ($addend){
                return (int) $addend;
            },
            $addends
        );
    }
}