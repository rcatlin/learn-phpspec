<?php

namespace RCatlin\LearnPHPSpec\Serialize;

use RCatlin\LearnPHPSpec\Car;

/**
 * Class SerializerFactory
 */
class SerializerFactory
{
    /**
     * @param $object
     *
     * @return SerializeInterface
     */
    public function get($object)
    {
        if ($object instanceof Car) {
            return new CarSerializer($object, $this);
        }
    }
}
