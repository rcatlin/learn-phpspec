<?php

namespace spec\RCatlin\LearnPHPSpec;

use PhpSpec\ObjectBehavior;
use RCatlin\LearnPHPSpec\Brand;

/**
 * Class WheelsSpec
 */
class WheelsSpec extends ObjectBehavior
{
    /**
     * @var \RCatlin\LearnPHPSpec\Brand
     */
    private $brand;

    /**
     * @param \RCatlin\LearnPHPSpec\Brand $brand
     */
    public function let(Brand $brand)
    {
        $this->brand = $brand;
        $this->beConstructedWith($brand, 15, 22.0);
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType('RCatlin\LearnPHPSpec\Wheels');
    }

    public function it_has_a_brand()
    {
        $this->getBrand()->shouldReturn($this->brand);
    }

    public function it_has_a_count()
    {
        $this->getCount()->shouldReturn(15);
    }

    public function it_has_a_diameter()
    {
        $this->getDiameter()->shouldReturn(22.0);
    }
}
