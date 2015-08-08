<?php

namespace spec\RCatlin\LearnPHPSpec\Serialize;

use PhpSpec\ObjectBehavior;
use RCatlin\LearnPHPSpec\Car;
use RCatlin\LearnPHPSpec\Color;
use RCatlin\LearnPHPSpec\Doors;
use RCatlin\LearnPHPSpec\Engine;
use RCatlin\LearnPHPSpec\Model;
use RCatlin\LearnPHPSpec\Serialize\ColorSerializer;
use RCatlin\LearnPHPSpec\Serialize\DoorsSerializer;
use RCatlin\LearnPHPSpec\Serialize\EngineSerializer;
use RCatlin\LearnPHPSpec\Serialize\ModelSerializer;
use RCatlin\LearnPHPSpec\Serialize\SerializerFactory;
use RCatlin\LearnPHPSpec\Serialize\WheelsSerializer;
use RCatlin\LearnPHPSpec\Wheels;

class CarSerializerSpec extends ObjectBehavior
{
    /**
     * @var \RCatlin\LearnPHPSpec\Car
     */
    private $car;

    /**
     * @var \RCatlin\LearnPHPSpec\Serialize\SerializerFactory
     */
    private $factory;

    /**
     * @param \RCatlin\LearnPHPSpec\Car $car
     * @param \RCatlin\LearnPHPSpec\Serialize\SerializerFactory $factory
     */
    public function let(Car $car, SerializerFactory $factory)
    {
        $this->car = $car;
        $this->factory = $factory;

        $this->beConstructedWith($car, $factory);
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType('RCatlin\LearnPHPSpec\Serialize\CarSerializer');
    }

    /**
     * @param \RCatlin\LearnPHPSpec\Color $color
     * @param \RCatlin\LearnPHPSpec\Serialize\ColorSerializer $colorSerializer
     * @param \RCatlin\LearnPHPSpec\Doors $doors
     * @param \RCatlin\LearnPHPSpec\Serialize\DoorsSerializer $doorsSerializer
     * @param \RCatlin\LearnPHPSpec\Engine $engine
     * @param \RCatlin\LearnPHPSpec\Serialize\EngineSerializer $engineSerializer
     * @param \RCatlin\LearnPHPSpec\Model $model
     * @param \RCatlin\LearnPHPSpec\Serialize\ModelSerializer $modelSerializer
     * @param \RCatlin\LearnPHPSpec\Wheels $wheels
     * @param \RCatlin\LearnPHPSpec\Serialize\WheelsSerializer $wheelsSerializer
     */
    public function it_serializes(
        Color $color,
        ColorSerializer $colorSerializer,
        Doors $doors,
        DoorsSerializer $doorsSerializer,
        Engine $engine,
        EngineSerializer $engineSerializer,
        Model $model,
        ModelSerializer $modelSerializer,
        Wheels $wheels,
        WheelsSerializer $wheelsSerializer
    ) {
        // Car returns mocked objects
        $this->car->getColor()->willReturn($color);
        $this->car->getDoors()->willReturn($doors);
        $this->car->getEngine()->willReturn($engine);
        $this->car->getModel()->willReturn($model);
        $this->car->getWheels()->willReturn($wheels);

        // SerializerFactory#get returns Serializers
        $this->factory->get($color)->willReturn($colorSerializer);
        $this->factory->get($doors)->willReturn($doorsSerializer);
        $this->factory->get($engine)->willReturn($engineSerializer);
        $this->factory->get($model)->willReturn($modelSerializer);
        $this->factory->get($wheels)->willReturn($wheelsSerializer);

        // Serializers#serialize return arrays
        $colorSerializer->serialize()->willReturn(['color']);
        $doorsSerializer->serialize()->willReturn(['doors']);
        $engineSerializer->serialize()->willReturn(['engine']);
        $modelSerializer->serialize()->willReturn(['model']);
        $wheelsSerializer->serialize()->willReturn(['wheels']);

        $this->serialize()->shouldReturn([
            'color' => ['color'],
            'doors' => ['doors'],
            'engine' => ['engine'],
            'model' => ['model'],
            'wheels' => ['wheels'],
        ]);
    }
}
