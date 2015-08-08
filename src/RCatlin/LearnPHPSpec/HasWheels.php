<?php namespace RCatlin\LearnPHPSpec;

use RCatlin\LearnPHPSpec\Wheel;

/**
 * Trait HasWheels
 * @package RCatlin\LearnPHPSpec
 */
trait HasWheels
{
    /**
     * @var \RCatlin\LearnPHPSpec\Wheels $wheels
     */
    protected $wheels;

    /**
     * @return Wheels
     */
    public function getWheels()
    {
        return $this->wheels;
    }

    /**
     * @param Wheels $wheels
     * @return $this
     */
    public function setWheels($wheels)
    {
        $this->wheels = $wheels;

        return $this;
    }


}
