<?php

namespace RCatlin\LearnPHPSpec\Serialize;

use RCatlin\LearnPHPSpec\Brand;
use RCatlin\LearnPHPSpec\Car;
use RCatlin\LearnPHPSpec\Color;
use RCatlin\LearnPHPSpec\Doors;
use RCatlin\LearnPHPSpec\Engine;
use RCatlin\LearnPHPSpec\Model;
use RCatlin\LearnPHPSpec\Wheels;

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
        if ($object instanceof Brand) {
            return new BrandSerializer($object, $this);
        }

        if ($object instanceof Car) {
            return new CarSerializer($object, $this);
        }

        if ($object instanceof Color) {
            return new ColorSerializer($object, $this);
        }

        if ($object instanceof Doors) {
            return new DoorsSerializer($object, $this);
        }

        if ($object instanceof Engine) {
            return new EngineSerializer($object, $this);
        }

        if ($object instanceof Model) {
            return new ModelSerializer($object, $this);
        }

        if ($object instanceof Wheels) {
            return new WheelsSerializer($object, $this);
        }

        throw new \Exception(
            sprintf('Cannot find a serializer for class "%s"', get_class($object))
        );
    }
}
