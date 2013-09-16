<?php

namespace Cordoval;

class Extractor
{
    public function even($number)
    {
        return $number % 2 == 0;
    }

    public function odd($number)
    {
        return $number % 2 !== 0;
    }

    public function divisibleBy($number, $divisor)
    {
        return is_integer($number/$divisor);
    }

    public function extractGivenFactor($number, $factor)
    {
        $dividend = $number;
        if ($this->divisibleBy($number, $factor)) {
            $dividend = $number / $factor;
        }

        return [
            'factor' => $factor,
            'dividend' => $dividend
        ];
    }

    public function extract($number, $factor)
    {
        $times = 0;
        $factorDividend = $this->extractGivenFactor($number, $factor);
        $factor = $factorDividend['factor'];
        $dividend = $factorDividend['dividend'];

        return [
            'factor' => $factor,
            'times' => $times,
            'dividend' => $dividend
        ];
    }
}
