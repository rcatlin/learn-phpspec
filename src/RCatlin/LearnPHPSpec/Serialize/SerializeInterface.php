<?php

namespace RCatlin\LearnPHPSpec\Serialize;

/**
 * Interface SerializeInterface
 */
interface SerializeInterface
{
    /**
     * @return array
     */
    public function serialize();

    /**
     * @return object
     */
    public function getObject();
}
