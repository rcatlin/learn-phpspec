<?php

namespace RCatlin\LearnPHPSpec\Serialize;

/**
 * Class EngineSerializer
 */
class EngineSerializer implements SerializeInterface
{
    use IsSerializer;

    /**
     * @return \RCatlin\LearnPHPSpec\Engine
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
            'num_cylinders' => $object->getNumCylinders(),
            'num_liters' => $object->getNumLiters(),
            'type' => $object->getType(),
        ];
    }
}
