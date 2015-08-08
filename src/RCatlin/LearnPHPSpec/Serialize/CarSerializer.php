<?php namespace RCatlin\LearnPHPSpec\Serialize;

/**
 * Class CarSerializer
 * @package RCatlin\LearnPHPSpec\Serialize
 */
class CarSerializer implements SerializeInterface
{
    use IsSerializer;

    /**
     * @return \RCatlin\LearnPHPSpec\Car
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
            'color' => $this->serializeObject($object->getColor()),
            'doors' => $this->serializeObject($object->getDoors()),
            'engine' => $this->serializeObject($object->getEngine()),
            'model' => $this->serializeObject($object->getModel()),
            'wheels' => $this->serializeObject($object->getWheels()),
        ];
    }
}