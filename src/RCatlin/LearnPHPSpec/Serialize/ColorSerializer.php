<?php

namespace RCatlin\LearnPHPSpec\Serialize;

/**
 * Class ColorSerializer
 */
class ColorSerializer implements SerializeInterface
{
    use IsSerializer;

    /**
     * @return \RCatlin\LearnPHPSpec\Color
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
            'name' => $object->getName(),
        ];
    }
}
