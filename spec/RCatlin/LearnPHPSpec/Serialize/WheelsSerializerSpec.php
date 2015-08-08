<?php

namespace spec\RCatlin\LearnPHPSpec\Serialize;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use RCatlin\LearnPHPSpec\Brand;
use RCatlin\LearnPHPSpec\Serialize\BrandSerializer;
use RCatlin\LearnPHPSpec\Serialize\SerializerFactory;
use RCatlin\LearnPHPSpec\Wheels;

class WheelsSerializerSpec extends ObjectBehavior
{
    /**
     * @var \RCatlin\LearnPHPSpec\Wheels
     */
    private $wheels;

    /**
     * @var \RCatlin\LearnPHPSpec\Serialize\SerializerFactory
     */
    private $factory;


    /**
     * @param \RCatlin\LearnPHPSpec\Wheels $wheels
     * @param \RCatlin\LearnPHPSpec\Serialize\SerializerFactory $factory
     */
    function let(Wheels $wheels, SerializerFactory $factory)
    {
        $this->wheels = $wheels;
        $this->factory = $factory;

        $this->beConstructedWith($this->wheels, $this->factory);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('RCatlin\LearnPHPSpec\Serialize\WheelsSerializer');
    }

    function it_serializes(Brand $brand, BrandSerializer $brandSerializer)
    {
        $this->wheels->getCount()->willReturn(4);
        $this->wheels->getDiameter()->willReturn(28.75);

        // Wheels returns Brand
        $this->wheels->getBrand()->willReturn($brand);

        // SerializerFactory returns BrandSerializer
        $this->factory->get($brand)->willReturn($brandSerializer);

        // BrandSerializer returns an empty array
        $brandSerializer->serialize()->willReturn([]);

        $this->serialize()->shouldReturn([
            'count' => 4,
            'brand' => [],
            'diameter' => 28.75,
        ]);
    }
}
