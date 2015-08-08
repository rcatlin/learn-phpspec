<?php

namespace RCatlin\LearnPHPSpec\Serialize;

/**
 * Class DoorsSerializer
 */
class DoorsSerializer implements SerializeInterface
{
    use IsSerializer;

    /**
     * @return \RCatlin\LearnPHPSpec\Doors
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
        ];
    }
}
