<?php

namespace RCatlin\LearnPHPSpec\Serialize;

/**
 * Class WheelsSerializer
 */
class WheelsSerializer implements SerializeInterface
{
    use IsSerializer;

    /**
     * @return \RCatlin\LearnPHPSpec\Wheels
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * @return array
     */
    public function serialize()
    {
        $object = $this->getObject();

        return [
            'count' => $object->getCount(),
            'brand' => $this->serializeObject($object->getBrand()),
            'diameter' => $object->getDiameter(),
        ];
    }
}
