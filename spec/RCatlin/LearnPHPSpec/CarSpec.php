<?php

namespace spec\RCatlin\LearnPHPSpec;

use PhpSpec\ObjectBehavior;
use RCatlin\LearnPHPSpec\Color;
use RCatlin\LearnPHPSpec\Doors;
use RCatlin\LearnPHPSpec\Engine;
use RCatlin\LearnPHPSpec\Model;
use RCatlin\LearnPHPSpec\Wheels;

/**
 * Class CarSpec
 */
class CarSpec extends ObjectBehavior
{
    /**
     * @var \RCatlin\LearnPHPSpec\Color
     */
    private $color;

    /**
     * @var \RCatlin\LearnPHPSpec\Doors
     */
    private $doors;

    /**
     * @var \RCatlin\LearnPHPSpec\Engine
     */
    private $engine;

    /**
     * @var \RCatlin\LearnPHPSpec\Model
     */
    private $model;

    /**
     * @var \RCatlin\LearnPHPSpec\Wheels
     */
    private $wheels;

    public function let(Color $color, Doors $doors, Engine $engine, Model $model, Wheels $wheels)
    {
        $this->color = $color;
        $this->doors = $doors;
        $this->engine = $engine;
        $this->model = $model;
        $this->wheels = $wheels;

        $this->beConstructedWith(
            $this->color,
            $this->doors,
            $this->engine,
            $this->model,
            $this->wheels
        );
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType('RCatlin\LearnPHPSpec\Car');
    }

    public function is_has_a_color()
    {
        $this->getColor()->shouldReturn($this->color);
    }

    public function it_has_doors()
    {
        $this->getDoors()->shouldReturn($this->doors);
    }

    public function it_has_an_engine()
    {
        $this->getEngine()->shouldReturn($this->engine);
    }

    public function it_has_a_model()
    {
        $this->getModel()->shouldReturn($this->model);
    }

    public function it_has_wheels()
    {
        $this->getWheels()->shouldReturn($this->wheels);
    }
}
