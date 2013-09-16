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
}
