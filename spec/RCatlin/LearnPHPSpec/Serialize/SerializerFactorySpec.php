<?php

namespace spec\RCatlin\LearnPHPSpec\Serialize;

use PhpSpec\ObjectBehavior;
use RCatlin\LearnPHPSpec\Brand;
use RCatlin\LearnPHPSpec\Car;
use RCatlin\LearnPHPSpec\Color;
use RCatlin\LearnPHPSpec\Doors;
use RCatlin\LearnPHPSpec\Engine;
use RCatlin\LearnPHPSpec\Model;
use RCatlin\LearnPHPSpec\Wheels;

class SerializerFactorySpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('RCatlin\LearnPHPSpec\Serialize\SerializerFactory');
    }

    public function it_can_get_a_brand_serializer(Brand $brand)
    {
        $this->get($brand)->shouldHaveType('RCatlin\LearnPHPSpec\Serialize\BrandSerializer');
    }

    public function it_can_get_a_car_serializer(Car $car)
    {
        $this->get($car)->shouldHaveType('RCatlin\LearnPHPSpec\Serialize\CarSerializer');
    }

    public function it_can_get_a_color_serializer(Color $color)
    {
        $this->get($color)->shouldHaveType('RCatlin\LearnPHPSpec\Serialize\ColorSerializer');
    }

    public function it_can_get_a_doors_serializer(Doors $doors)
    {
        $this->get($doors)->shouldHaveType('RCatlin\LearnPHPSpec\Serialize\DoorsSerializer');
    }

    public function it_can_get_an_engine_serializer(Engine $engine)
    {
        $this->get($engine)->shouldHaveType('RCatlin\LearnPHPSpec\Serialize\EngineSerializer');
    }

    public function it_can_get_a_model_serializer(Model $model)
    {
        $this->get($model)->shouldHaveType('RCatlin\LearnPHPSpec\Serialize\ModelSerializer');
    }

    public function it_can_get_a_wheels_serializer(Wheels $wheels)
    {
        $this->get($wheels)->shouldHaveType('RCatlin\LearnPHPSpec\Serialize\WheelsSerializer');
    }
}
