<?php

namespace spec\RCatlin\LearnPHPSpec\Serialize;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use RCatlin\LearnPHPSpec\Color;
use RCatlin\LearnPHPSpec\Serialize\SerializerFactory;

class ColorSerializerSpec extends ObjectBehavior
{
    /**
     * @var \RCatlin\LearnPHPSpec\Color
     */
    private $color;

    /**
     * @var \RCatlin\LearnPHPSpec\Serialize\SerializerFactory
     */
    private $factory;

    function let(Color $color, SerializerFactory $factory)
    {
        $this->color = $color;
        $this->factory = $factory;
        $this->beConstructedWith($this->color, $this->factory);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('RCatlin\LearnPHPSpec\Serialize\ColorSerializer');
    }

    function it_has_an_object()
    {
        $this->getObject()->shouldReturn($this->color);
    }

    function it_serializes()
    {
        $this->color->getName()->willReturn('color name');
        $this->serialize()->shouldReturn(['name' => 'color name']);
    }
}
