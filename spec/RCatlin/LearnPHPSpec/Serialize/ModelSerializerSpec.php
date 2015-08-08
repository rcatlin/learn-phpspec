<?php

namespace spec\RCatlin\LearnPHPSpec\Serialize;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use RCatlin\LearnPHPSpec\Brand;
use RCatlin\LearnPHPSpec\Model;
use RCatlin\LearnPHPSpec\Serialize\BrandSerializer;
use RCatlin\LearnPHPSpec\Serialize\SerializerFactory;

class ModelSerializerSpec extends ObjectBehavior
{
    /**
     * @var \RCatlin\LearnPHPSpec\Model
     */
    private $model;

    /**
     * @var \RCatlin\LearnPHPSpec\Serialize\SerializerFactory
     */
    private $factory;

    /**
     * @param \RCatlin\LearnPHPSpec\Model $model
     * @param \RCatlin\LearnPHPSpec\Serialize\SerializerFactory $factory
     */
    public function let(Model $model, SerializerFactory $factory)
    {
        $this->model = $model;
        $this->factory = $factory;

        $this->beConstructedWith($model, $factory);
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType('RCatlin\LearnPHPSpec\Serialize\ModelSerializer');
    }

    /**
     * @param \RCatlin\LearnPHPSpec\Brand $brand
     * @param \RCatlin\LearnPHPSpec\Serialize\BrandSerializer $brandSerializer
     */
    public function it_serializes(Brand $brand, BrandSerializer $brandSerializer)
    {
        // Model returns Brand
        $this->model->getBrand()->willReturn($brand);
        $this->model->getName()->willReturn('model name');
        $this->model->getYear()->willReturn(2017);

        // SerializerFactory returns BrandSerializer
        $this->factory->get($brand)->willReturn($brandSerializer);

        // Brand Serializer returns an empty array
        $brandSerializer->serialize()->willReturn([]);

        $this->serialize()->shouldReturn([
            'brand' => [],
            'name' => 'model name',
            'year' => 2017,
        ]);
    }
}
