<?php namespace RCatlin\LearnPHPSpec;

/**
 * Class Color
 * @package RCatlin\LearnPHPSpec
 */
class Color
{
    use HasName;

    /**
     * Color constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->setName($name);
    }
}