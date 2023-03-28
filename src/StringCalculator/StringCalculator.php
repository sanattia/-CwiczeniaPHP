<?php


namespace App\StringCalculator;

class StringCalculator{
    public function add(string $input): int{
        if (!preg_match('/^(\d+([,\n])*\d+)?$/')){
            throw new \ValueError('Invalid Input');
        }
        $numbers = $this->parseInput($input);

    return array_sum($numbers);
}

    private function parseInput(string $input): array{
        $inputNormalized = $this->normalizeDelimiters($input);
        return $this->extractAddendsFromString($inputNormalized);
    }
    private function normalizeDelimiters(string $input): string{
        return str_replace(['/n'], ',', $input);
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