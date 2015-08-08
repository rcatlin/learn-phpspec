<?php

namespace spec\RCatlin\LearnPHPSpec\Serialize;

use PhpSpec\ObjectBehavior;
use RCatlin\LearnPHPSpec\Doors;
use RCatlin\LearnPHPSpec\Serialize\SerializerFactory;

class DoorsSerializerSpec extends ObjectBehavior
{
    /**
     * @var \RCatlin\LearnPHPSpec\Doors
     */
    private $doors;

    /**
     * @var \RCatlin\LearnPHPSpec\Serialize\SerializerFactory
     */
    private $factory;

    /**
     * @param \RCatlin\LearnPHPSpec\Doors $doors
     * @param \RCatlin\LearnPHPSpec\Serialize\SerializerFactory $factory
     */
    public function let(Doors $doors, SerializerFactory $factory)
    {
        $this->doors = $doors;
        $this->factory = $factory;
        $this->beConstructedWith($this->doors, $factory);
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType('RCatlin\LearnPHPSpec\Serialize\DoorsSerializer');
    }

    public function it_has_an_object()
    {
        $this->getObject()->shouldReturn($this->doors);
    }

    public function it_serializes()
    {
        $this->doors->getCount()->willReturn(4);
        $this->serialize()->shouldReturn(['count' => 4]);
    }
}
