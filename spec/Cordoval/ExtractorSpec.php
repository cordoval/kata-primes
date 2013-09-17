<?php

namespace spec\Cordoval;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ExtractorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Cordoval\Extractor');
    }

    function it_is_even()
    {
        $this->even(4)->shouldBe(true);
    }

    function it_is_not_even()
    {
        $this->even(1)->shouldBe(false);
    }

    function it_is_odd()
    {
        $this->odd(3)->shouldBe(true);
    }

    function it_is_not_odd()
    {
        $this->odd(4)->shouldBe(false);
    }

    function it_is_divisible_by_an_arbitrary_number()
    {
        $this->divisibleBy(9, 3)->shouldBe(true);
    }

    function it_is_not_divisible_by_an_arbitrary_number()
    {
        $this->divisibleBy(9, 2)->shouldBe(false);
    }

    function it_divides_number_when_is_divisible()
    {
        $this->extractGivenFactor(12, 3)->shouldBe(['factor' => 3, 'dividend' => 4]);
    }

    function it_does_not_divide_number_when_it_is_not_divisible()
    {
        $this->extractGivenFactor(11, 3)->shouldBe(['factor' => 3, 'dividend' => 11]);
    }

    function it_extracts_factor_multiple_times_if_needed_when_present_12_7()
    {
        $this->extract(12, 7)->shouldBe(['factor' => 7, 'times' => 0, 'dividend' => 12]);
    }

    function it_extracts_factor_multiple_times_if_needed_when_present_12_3()
    {
        $this->extract(12, 3)->shouldBe(['factor' => 3, 'times' => 1, 'dividend' => 4]);
    }

    function it_extracts_factor_multiple_times_if_needed_when_present_12_2()
    {
        $this->extract(12, 2)->shouldBe(['factor' => 2, 'times' => 2, 'dividend' => 3]);
    }

    function it_extracts_factor_multiple_times_if_needed_when_present_18_3()
    {
        $this->extract(18, 3)->shouldBe(['factor' => 3, 'times' => 2, 'dividend' => 2]);
    }
}
