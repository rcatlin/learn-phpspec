<?php

namespace spec\RCatlin\LearnPHPSpec;

use PhpSpec\ObjectBehavior;

/**
 * Class BrandSpec
 */
class BrandSpec extends ObjectBehavior
{
    public function let()
    {
        $this->beConstructedWith('brand name', 'origin country');
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType('RCatlin\LearnPHPSpec\Brand');
    }

    public function it_has_a_name_and_origin_country()
    {
        $this->getName()->shouldReturn('brand name');
        $this->getOriginCountry()->shouldReturn('origin country');
    }
}
