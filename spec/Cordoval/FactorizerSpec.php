<?php

namespace spec\Cordoval;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FactorizerSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Cordoval\Factorizer');
    }
}
