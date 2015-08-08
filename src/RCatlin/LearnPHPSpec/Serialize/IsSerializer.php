<?php

namespace RCatlin\LearnPHPSpec\Serialize;

/**
 * Class IsSerializer
 */
trait IsSerializer
{
    /**
     * @var object
     */
    protected $object;

    /**
     * @var SerializerFactory
     */
    protected $factory;

    /**
     * @param $object
     * @param SerializerFactory $factory
     */
    public function __construct($object, SerializerFactory $factory)
    {
        $this->object = $object;
        $this->factory = $factory;
    }

    /**
     * @return SerializerFactory
     */
    public function getFactory()
    {
        return $this->factory;
    }

    /**
     * @param SerializerFactory $factory
     *
     * @return $this
     */
    public function setFactory($factory)
    {
        $this->factory = $factory;

        return $this;
    }

    public function serializeObject($object)
    {
        return $this->getFactory()->get($object)->serialize();
    }
}
