<?php

namespace spec\RCatlin\LearnPHPSpec;

use PhpSpec\ObjectBehavior;
use RCatlin\LearnPHPSpec\Engine;

/**
 * Class EngineSpec
 */
class EngineSpec extends ObjectBehavior
{
    public function let()
    {
        $this->beConstructedWith(5, Engine::TYPE_V, 5.5);
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType('RCatlin\LearnPHPSpec\Engine');
    }

    public function it_has_a_num_cylinders()
    {
        $this->getNumCylinders()->shouldReturn(5);
    }

    public function it_has_a_type()
    {
        $this->getType()->shouldReturn(Engine::TYPE_V);
    }

    public function it_has_a_num_liters()
    {
        $this->getNumLiters()->shouldReturn(5.5);
    }
}
