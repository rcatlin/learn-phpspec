<?php

namespace RCatlin\LearnPHPSpec\Serialize;

/**
 * Class BrandSerializer
 * @package RCatlin\LearnPHPSpec\Serialize
 */
class BrandSerializer implements SerializeInterface
{
    use IsSerializer;

    /**
     * @return \RCatlin\LearnPHPSpec\Brand
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
            'origin_country' => $object->getOriginCountry(),
        ];
    }
}