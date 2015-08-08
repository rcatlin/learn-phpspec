<?php

namespace RCatlin\LearnPHPSpec\Serialize;

/**
 * Class ModelSerializer
 */
class ModelSerializer implements SerializeInterface
{
    use IsSerializer;

    /**
     * @return \RCatlin\LearnPHPSpec\Model
     */
    public function getObject()
    {
        return $this->getObject();
    }

    /**
     * @return array
     */
    public function serialize()
    {
        $object = $this->getObject();

        return [
            'brand' => $this->serializeObject($object->getBrand()),
            'name' => $object->getName(),
            'year' => $object->getYear(),
        ];
    }
}
