<?php namespace RCatlin\LearnPHPSpec\Serialize;

use RCatlin\LearnPHPSpec\Car;

/**
 * Class SerializerFactory
 * @package RCatlin\LearnPHPSpec\Serialize
 */
class SerializerFactory
{
    /**
     * @param $object
     * @return SerializeInterface
     */
    public function get($object)
    {
        if ($object instanceof Car) {
            return new CarSerializer($object, $this);
        }
    }
}