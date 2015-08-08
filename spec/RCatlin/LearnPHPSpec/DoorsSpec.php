<?php

namespace spec\RCatlin\LearnPHPSpec;

use PhpSpec\ObjectBehavior;

/**
 * Class DoorsSpec
 */
class DoorsSpec extends ObjectBehavior
{
    public function let()
    {
        $this->beConstructedWith(5);
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType('RCatlin\LearnPHPSpec\Doors');
    }

    public function it_has_a_count()
    {
        $this->getCount()->shouldReturn(5);
    }
}
