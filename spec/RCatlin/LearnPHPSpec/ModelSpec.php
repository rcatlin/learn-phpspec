<?php

namespace spec\RCatlin\LearnPHPSpec;

use PhpSpec\ObjectBehavior;
use RCatlin\LearnPHPSpec\Brand;

/**
 * Class ModelSpec
 */
class ModelSpec extends ObjectBehavior
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
        $this->beConstructedWith($this->brand, 'model name', 2015);
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType('RCatlin\LearnPHPSpec\Model');
    }

    public function it_has_a_brand()
    {
        $this->getBrand()->shouldReturn($this->brand);
    }

    public function it_has_a_name()
    {
        $this->getName()->shouldReturn('model name');
    }

    public function it_has_a_year()
    {
        $this->getYear()->shouldReturn(2015);
    }
}
