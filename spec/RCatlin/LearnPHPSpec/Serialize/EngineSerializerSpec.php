<?php

namespace spec\RCatlin\LearnPHPSpec\Serialize;

use PhpSpec\ObjectBehavior;
use RCatlin\LearnPHPSpec\Engine;
use RCatlin\LearnPHPSpec\Serialize\SerializerFactory;

class EngineSerializerSpec extends ObjectBehavior
{
    /**
     * @var \RCatlin\LearnPHPSpec\Engine
     */
    private $engine;

    /**
     * @var \RCatlin\LearnPHPSpec\Serialize\SerializerFactory
     */
    private $factory;

    /**
     * @param \RCatlin\LearnPHPSpec\Engine $engine
     * @param \RCatlin\LearnPHPSpec\Serialize\SerializerFactory $factory
     */
    public function let(Engine $engine, SerializerFactory $factory)
    {
        $this->engine = $engine;
        $this->factory = $factory;

        $this->beConstructedWith($this->engine, $this->factory);
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType('RCatlin\LearnPHPSpec\Serialize\EngineSerializer');
    }

    public function it_serializes()
    {
        $this->engine->getType()->willReturn(Engine::TYPE_V);
        $this->engine->getNumCylinders()->willReturn(8);
        $this->engine->getNumLiters()->willReturn(6.5);

        $this->serialize()->shouldReturn([
            'num_cylinders' => 8,
            'num_liters' => 6.5,
            'type' => Engine::TYPE_V,
        ]);
    }
}
