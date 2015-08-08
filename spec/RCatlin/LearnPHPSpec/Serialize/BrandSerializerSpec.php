<?php

namespace spec\RCatlin\LearnPHPSpec\Serialize;

use PhpSpec\ObjectBehavior;
use RCatlin\LearnPHPSpec\Brand;
use RCatlin\LearnPHPSpec\Serialize\SerializerFactory;

class BrandSerializerSpec extends ObjectBehavior
{
    /**
     * @var \RCatlin\LearnPHPSpec\Brand
     */
    private $brand;

    /**
     * @var \RCatlin\LearnPHPSpec\Serialize\SerializerFactory
     */
    private $factory;

    /**
     * @param \RCatlin\LearnPHPSpec\Brand $brand
     * @param \RCatlin\LearnPHPSpec\Serialize\SerializerFactory $factory
     */
    public function let(Brand $brand, SerializerFactory $factory)
    {
        $this->brand = $brand;
        $this->factory = $factory;

        $this->beConstructedWith($this->brand, $this->factory);
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType('RCatlin\LearnPHPSpec\Serialize\BrandSerializer');
    }

    public function it_serializes()
    {
        $this->brand->getName()->willReturn('brand name');
        $this->brand->getOriginCountry()->willReturn('origin country');

        $this->serialize()->shouldReturn([
            'name' => 'brand name',
            'origin_country' => 'origin country',
        ]);
    }
}
