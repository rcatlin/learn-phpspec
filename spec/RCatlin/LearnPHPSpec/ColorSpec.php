<?php

namespace spec\RCatlin\LearnPHPSpec;

use PhpSpec\ObjectBehavior;

/**
 * Class ColorSpec
 */
class ColorSpec extends ObjectBehavior
{
    public function let()
    {
        $this->beConstructedWith('some color');
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType('RCatlin\LearnPHPSpec\Color');
    }

    public function it_has_a_name()
    {
        $this->getName()->shouldReturn('some color');
    }
}
