<?php namespace RCatlin\LearnPHPSpec\Serialize;

/**
 * Interface SerializeInterface
 * @package RCatlin\LearnPHPSpec\Serialize
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