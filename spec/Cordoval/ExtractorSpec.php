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

    
}
