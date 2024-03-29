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
        $times = -1;
        $dividendPrev = 0;
        $dividend = $number;
        while ($dividendPrev != $dividend) {
            $dividendPrev = $dividend;
            $times++;
            $r = $this->extractGivenFactor($dividend, $factor);
            $dividend = $r['dividend'];
        }

        return [
            'factor' => $factor,
            'times' => $times,
            'dividend' => $dividend
        ];
    }

    public function harvest($number)
    {
        $factor = 2;
        $results = [];
        $originalNumber = $number;
        while ($factor < $originalNumber) {
            $extraction = $this->extract($number, $factor);

            $number = $extraction['dividend'];
            $times = $extraction['times'];
            if ($times != 0) {
                $results[] = ['factor' => $factor, 'times' => $times];
            }
            $factor++;
        }

        return $results;
    }
}
