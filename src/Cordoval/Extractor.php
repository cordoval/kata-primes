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

        do {
            $r = $this->extractGivenFactor($number, $factor);
            $factor = $r['factor'];
            $dividend = $r['dividend'];
        } while($dividend !== $number);

        return [
            'factor' => $factor,
            'times' => $times,
            'dividend' => $dividend
        ];
    }
}
